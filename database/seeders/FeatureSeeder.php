<?php

namespace Database\Seeders;

use Faker\Provider\DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('features')->insert([
            [
                'title' => 'Ninja Massage Therapist',
                'slug' => 'ninja-massage',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'thumbLocation' => 'ninja-massage-thumb.png',
                'section_id' => 2,
                'medium' => 'video',
                'mediaLocation' => 'ninja-massage.mp4',
                'html' => null,
                'isPopular' => false,
            ],
            [
                'title' => 'Rust Monster',
                'slug' => 'rust-monster',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 1,
                'medium' => 'image',
                'mediaLocation' => 'rust-monster.png',
                'thumbLocation' => 'rust-monster-thumb.png',
                'html' => null,
                'isPopular' => false,
            ],
            [
                'title' => 'Kitchen Floor',
                'slug' => 'kitchen-floor',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 2,
                'medium' => 'video',
                'mediaLocation' => 'kitchen-floor.png',
                'thumbLocation' => 'kitchen-floor-thumb.png',
                'html' => null,
                'isPopular' => false,
            ],
            [
                'title' => 'First Gen Pokémon',
                'slug' => 'first-gen-pokemon',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 3,
                'medium' => 'html',
                'mediaLocation' => 'first-gen-pokemon.png',
                'thumbLocation' => 'first-gen-pokemon-thumb.png',
                'html' => <<<HTML
<div></div>
HTML,
                'isPopular' => false,
            ], [
                'title' => 'You\'ve Been Hit',
                'slug' => 'youve-been-hit',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 4,
                'medium' => 'image',
                'mediaLocation' => 'youve-been-hit.png',
                'thumbLocation' => 'youve-been-hit-thumb.png',
                'html' => null,
                'isPopular' => false,
            ], [
                'title' => 'Homunculi',
                'slug' => 'homunculi',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 2,
                'medium' => 'video',
                'mediaLocation' => 'homunculi.png',
                'thumbLocation' => 'homunculi-thumb.png',
                'html' => null,
                'isPopular' => false,
            ], [
                'title' => 'MacGruff',
                'slug' => 'macgruff',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 4,
                'medium' => 'image',
                'mediaLocation' => 'macgruff.png',
                'thumbLocation' => 'macgruff-thumb.png',
                'html' => null,
                'isPopular' => false,
            ], [
                'title' => 'Nine Inch Noéls',
                'slug' => 'nine-inch-noels',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 5,
                'medium' => 'video',
                'mediaLocation' => 'nine-inch-noels.png',
                'thumbLocation' => 'nine-inch-noels-thumb.png',
                'html' => null,
                'isPopular' => true,
            ], [
                'title' => 'A Song',
                'slug' => 'a-song',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 4,
                'medium' => 'image',
                'mediaLocation' => 'a-song.png',
                'thumbLocation' => 'a-song-thumb.png',
                'html' => null,
                'isPopular' => true,
            ], [
                'title' => 'Rudolph: The Lost Scene',
                'slug' => 'rudolph-lost',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 2,
                'medium' => 'video',
                'mediaLocation' => 'rudolph-lost.png',
                'thumbLocation' => 'rudolph-lost-thumb.png',
                'html' => null,
                'isPopular' => true,
            ], [
                'title' => 'Mower Than Meets the Eye',
                'slug' => 'mower-than-meets',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 2,
                'medium' => 'video',
                'mediaLocation' => 'mower-than-meets.png',
                'thumbLocation' => 'mower-than-meets-thumb.png',
                'html' => null,
                'isPopular' => true,
            ], [
                'title' => 'Monopoly Tokens',
                'slug' => 'monopoly-tokens',
                'launch' => DateTime::dateTime(),
                'status' => 'active',
                'section_id' => 3,
                'medium' => 'html',
                'mediaLocation' => 'monopoly-tokens.png',
                'thumbLocation' => 'monopoly-tokens-thumb.png',
                'html' => <<<HTML
<div>
</div>
HTML,
                'isPopular' => true,
            ],
        ]);
    }
}
