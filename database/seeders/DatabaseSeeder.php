<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\students;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        students::create([
            'name' => 'Ac Cuesta',
            'course' => 'BSIT 3B'
        ]);

        students::create([
            'name' => 'Adler Dominguez',
            'course' => 'BSIT 3B'
        ]);
    }
}
