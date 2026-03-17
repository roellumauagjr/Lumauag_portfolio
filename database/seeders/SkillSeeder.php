<?php
namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            [
                'number_prefix' => '01',
                'name' => 'Technical Development',
                'description' => 'Skilled in C++, HTML, CSS, Python, Java, and both Front-End & Back-End Development.',
                'order_column' => 0
            ],
            [
                'number_prefix' => '02',
                'name' => 'Design & UI/UX',
                'description' => 'Expertise in UI/UX Design, Graphic Design, Layout, and 3D Art (Modeling, Rigging, Texturing).',
                'order_column' => 1
            ],
            [
                'number_prefix' => '03',
                'name' => 'Media & Content',
                'description' => 'Professional Photography, Videography, and Video Editing using Adobe Creative Suite.',
                'order_column' => 2
            ],
            [
                'number_prefix' => '04',
                'name' => 'Software Tools',
                'description' => 'Advanced proficiency in Adobe Photoshop, Premiere Pro, and Microsoft Office Suite.',
                'order_column' => 3
            ],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(['name' => $skill['name']], $skill);
        }
    }
}
