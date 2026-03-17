<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            ['title' => 'LibraNet', 'client' => 'Solo Programmer', 'desc' => 'Desktop library management system that automates book borrowing and inventory tracking. Developed using Java.'],
            ['title' => 'QuickServe', 'client' => 'Partnered Programmer', 'desc' => 'Web-based point-of-sale dashboard designed to streamline order-taking for restaurants. Developed using HTML & CSS.'],
            ['title' => 'TwinFall', 'client' => 'Creative Director & Lead Artist', 'desc' => 'Narrative-based game where a character travels between realms. Responsible for visual assets and core game design.'],
            ['title' => 'Mango Shake Simulator', 'client' => '3D Artist', 'desc' => '3D simulator game with daily order quotas and anomaly-based punishments. Modeled characters, objects, and environments.'],
            ['title' => 'Galaxias Mania', 'client' => 'Game Developer', 'desc' => '2D mobile space shooter focused on achieving high scores and surviving enemy attacks.'],
            ['title' => 'HAVEN', 'client' => 'Front-End Developer', 'desc' => 'Real-time emergency response system (Dashboard and Mobile App). Assisted with Back-End development.'],
            ['title' => 'Renthing', 'client' => 'Full-Stack Developer & UI/UX', 'desc' => 'Rental marketplace platform. City-level finalist in the DTI Moonshot Startup Competition.'],
            ['title' => 'Prospera.AI', 'client' => 'UI/UX Artist', 'desc' => 'AI-powered mobile wallet application with expense tracking, AI chatbot, and savings envelopes.'],
            ['title' => 'MJIPHIL Construction', 'client' => 'UI/UX Artist', 'desc' => 'Web-based digital inventory and catalog system developed to replace manual processes.'],
        ];

        foreach ($projects as $index => $project) {
            Project::updateOrCreate(['title' => $project['title']], [
                'slug' => Str::slug($project['title']),
                'client_name' => $project['client'],
                'description' => $project['desc'],
                'order_column' => $index,
                'is_published' => true,
            ]);
        }
    }
}
