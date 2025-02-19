<?php

namespace Modules\Lwsjobs\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Lwsjobs\Models\Job;
use Modules\Lwsjobs\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $tags = Tag::factory(3)->create();
        // $customTags = [
        //     ['name' => 'Development'],
        //     ['name' => 'Design'],
        //     ['name' => 'Marketing'],
        // ];

        // // Create the tags in the database
        // $tags = collect($customTags)->map(function ($tagData) {
        //     return Tag::firstOrCreate($tagData); // Avoid duplication by using firstOrCreate
        // });

        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            'featured' => false,
            'schedule' => 'Full Time',
        ], [
            'featured' => true,
            'schedule' => 'Part Time',
        ]));
    }
}
