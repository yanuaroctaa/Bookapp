<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'War of the Warlodrs',
            'description' => 'A science fiction masterpiece about Martians invading London',
            'author' => 'H. G. Weels',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('books')->insert([
            'title' => 'A wrinkle in time',
            'description' => 'A young girl goes on a mission to save her father who has gone missing after working on a mysterious project called a tesseract.',
            'author' => 'Madeleine L\'Engle',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
