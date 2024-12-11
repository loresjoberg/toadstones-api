<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(): JsonResponse
    {
        $sections = Section::all();
        return response()->json($sections);
    }

    public function store(Request $request): JsonResponse
    {
        $section = new Section;
        $section->title = $request->title;
        $section->slug = $request->slug;
        $section->isPrimary = $request->isPrimary;
        $section->save();
        return response()->json(['message' => 'Section Saved'], 201);
    }

    public function show(int $id): JsonResponse
    {
        $sections = Section::all();
        $section = $sections->find($id);
        if (!empty($section)) {
            return response()->json($section);
        }
        return response()->json(['message' => 'Section Not Found'], 404);
    }

    public function update(Request $request, int $id)
    {
        $sections = Section::all();
        if ($sections->where('id', $id)) {
            $section = $sections->find($id);
            $section->title = is_null($request->title) ? $section->title : $request->title;
            $section->slug = is_null($request->slug) ? $section->slug : $request->slug;
            $section->isPrimary = is_null($request->isPrimary) ? $section->isPrimary : $request->isPrimary;
            $section->save();
            return response()->json(['message' => 'Section Updated'], 201);
        }
        return response()->json(['message' => 'Section Not Found'], 404);
    }

    public function destroy(int $id) {
        $sections = Section::all();
        if ($sections->where('id', $id)) {
            $section = $sections->find($id);
            $section->delete();
            return response()->json(['message' => 'Section Deleted'], 201);
        }
        return response()->json(['message' => 'Section Not Found'], 404);
    }
}
