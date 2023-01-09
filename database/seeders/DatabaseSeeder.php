<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Home;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Home::factory()->count(4)->create();

    //     $images  = Storage::allFiles();

    //     foreach ($images as $image) {

    //         if (strpos($image, '.DS_Store')) continue;

    //         Home::factory()->create([
    //             'file' => $image,
    //             'dimension' => Home::getDimensions($image),
    //         ]);
    //     }
     }

   
}
