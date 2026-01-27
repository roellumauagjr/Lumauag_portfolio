<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name'=> 'HTML', 'level' => 'Advanced'],
            ['name'=> 'PHP', 'level' => 'Intermediate'],
            ['name'=> 'JAVA', 'level' => 'Advanced'],
            ['name'=> 'CPP', 'level' => 'Advanced'],
            ['name'=> 'PYTHON', 'level' => 'Amateur'],
        ]);
    }
}
