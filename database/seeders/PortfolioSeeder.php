<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Site Settings
        $settings = [
            'site_name' => '[Generic Portfolio Name]',
            'site_description' => '[Generic site description placeholder.]',
            'contact_email' => 'generic.email@example.com',
            'contact_phone' => '+00 000 000 0000',
            'location' => '[City, Country Placeholder]',
            'footer_text' => '© 20XX [Placeholder Name]. All rights reserved.',
        ];

        foreach ($settings as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // Skills
        $skills = [
            [
                'number_prefix' => '01',
                'name' => 'Backend Development',
                'description' => '[Generic placeholder describing backend expertise using frameworks like Laravel and languages like PHP.]',
                'order_column' => 1
            ],
            [
                'number_prefix' => '02',
                'name' => 'Frontend Development',
                'description' => '[Generic placeholder describing frontend expertise using CSS frameworks like Bootstrap and standard JavaScript.]',
                'order_column' => 2
            ],
            [
                'number_prefix' => '03',
                'name' => 'Database Management',
                'description' => '[Generic placeholder describing expertise in RDBMS like MySQL and PostgreSQL.]',
                'order_column' => 3
            ],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(['name' => $skill['name']], $skill);
        }

        // Projects
        $projects = [
            [
                'title' => 'E-Commerce Platform Placeholder',
                'slug' => 'e-commerce-platform-placeholder',
                'client_name' => '[Client A]',
                'description' => '[Generic project description placeholder for an e-commerce platform built with Laravel.]',
                'is_published' => true,
                'order_column' => 1
            ],
            [
                'title' => 'Task Management Tool Placeholder',
                'slug' => 'task-management-tool-placeholder',
                'client_name' => '[Client B]',
                'description' => '[Generic project description placeholder for a task management tool highlighting organizational features.]',
                'is_published' => true,
                'order_column' => 2
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(['title' => $project['title']], $project);
        }

        // Experiences
        $experiences = [
            [
                'type' => 'experience',
                'role' => 'Senior Developer Placeholder',
                'organization' => '[Tech Company Placeholder]',
                'year' => '20XX - Present',
                'description' => '[Generic experience description placeholder detailing leadership and technical contributions.]',
            ],
            [
                'type' => 'education',
                'role' => 'Bachelor of Science Placeholder',
                'organization' => '[University Placeholder]',
                'year' => '20XX - 20XX',
                'description' => '[Generic education description placeholder detailing academic achievements and key coursework.]',
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::updateOrCreate(
                ['role' => $exp['role'], 'organization' => $exp['organization']],
                $exp
            );
        }
    }
}
