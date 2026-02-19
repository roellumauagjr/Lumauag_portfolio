<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            ['title'=> 'Portfolio', 'description' => 'Description Ni Siya', 'tech_stack' =>'Laravel', 'year' => '2026'],
        ]);
    }
}
