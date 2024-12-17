<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeatureResource;
use App\Models\Feature;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(): JsonResponse
    {
        $features = Feature::all();
        return response()->json($features);
    }

    public function store(Request $request): JsonResponse
    {
        $feature = new Feature;
        $feature->title = $request->title;
        $feature->slug = $request->slug;
        $feature->launch = $request->launch;
        $feature->status = $request->status;
        $feature->section_id = $request->section_id;
        $feature->medium = $request->medium;
        $feature->html = $request->html;
        $path = 'nowhere';
        if ($request->medium === 'video') {
            $path = $request->file('video')->storeAs('video', $request->slug . ".mp4",'public');
            $feature->mediaLocation = $path;
        } elseif ($request->medium === 'image') {
            $path = $request->file('image')->storeAs('images', $request->slug . ".mp4",'public');
            $feature->mediaLocation = $path;
        }
        $thumbPath = $request->file('thumbnail')->storeAs('thumbnails', $request->slug . "-thumb.png",'public');
        $feature->thumbnail = $thumbPath;
        $feature->save();
        return response()->json(['message' => 'Feature Saved at ' . $path . ' and ' . $thumbPath], 201);
    }

    public function show(int $id): JsonResponse
    {
        $features = Feature::find($id);
        $feature = $features->find($id);
        $out = new FeatureResource($feature);
        if (!empty($feature)) {
            return response()->json($out);
        }
        return response()->json(['message' => 'Feature Not Found'], 404);
    }

    public function update(Request $request, int $id)
    {
        $features = Feature::all();
        if ($features->where('id', $id)) {
            $feature = $features->find($id);
            $feature->title = is_null($request->title) ? $feature->title : $request->title;
            $feature->slug = is_null($request->slug) ? $feature->slug : $request->slug;
            $feature->launch = is_null($request->launch) ? $feature->launch : $request->launch;
            $feature->status = is_null($request->status) ? $feature->status : $request->status;
            $feature->section_id = is_null($request->section_id) ? $feature->section_id : $request->section_id;
            $feature->medium = is_null($request->medium) ? $feature->medium : $request->medium;
            $feature->html = is_null($request->html) ? $feature->html : $request->html;
            $feature->mediaLocation = is_null($request->mediaLocation) ? $feature->mediaLocation : $request->mediaLocation;
            $feature->save();
            return response()->json(['message' => 'Feature Updated'], 201);
        }
        return response()->json(['message' => 'Feature Not Found'], 404);
    }

    public function destroy(int $id) {
        $features = Feature::all();
        if ($features->where('id', $id)) {
            $feature = $features->find($id);
            $feature->delete();
            return response()->json(['message' => 'Feature Deleted'], 201);
        }
        return response()->json(['message' => 'Feature Not Found'], 404);
    }
}
