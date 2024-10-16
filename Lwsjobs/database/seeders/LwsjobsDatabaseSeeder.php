<?php

namespace Modules\Lwsjobs\Database\Seeders;

use Illuminate\Database\Seeder;

class LwsjobsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Call individual seeders here
        //php artisan db:seed --class=Modules\Lwsjobs\Database\Seeders\LwsjobsDatabaseSeeder
        $this->call(JobSeeder::class); // Register JobSeeder
    }
}
