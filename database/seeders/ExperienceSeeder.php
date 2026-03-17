<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $experiences = [
            ['type' => 'experience', 'role' => 'Videographer', 'organization' => 'The Spectrum – USLS', 'description' => "Official Student Media Corps of USLS. Filming and editing videos for university events. Captured photographs for magazines and folios. Most Promising Photojournalist (2025).", 'year' => '2025 - Present'],
            ['type' => 'experience', 'role' => 'Department of Public Relations Head', 'organization' => 'CECC Council – USLS', 'description' => "College of Engineering and Computing Studies Council. Led creation of publication materials and managed a team of creatives for official media.", 'year' => '2024 - 2025'],
            ['type' => 'experience', 'role' => 'Documentation Committee Member', 'organization' => 'USLS ISACA Student Group', 'description' => "Designed layouts and graphics. Captured photographs for organizational events.", 'year' => '2024 - 2025'],
            ['type' => 'experience', 'role' => 'Department of Media Affairs Undersecretary', 'organization' => 'Computer Science Society – USLS', 'description' => "Documented events. Created promotional materials and merchandise designs (jackets/caps).", 'year' => '2023 - 2024'],
            ['type' => 'experience', 'role' => 'Department of Public Relations Undersecretary', 'organization' => 'USLS Student Government', 'description' => "Collaborated on content planning and digital campaigns.", 'year' => '2023 - 2024'],
            ['type' => 'experience', 'role' => 'Department of Public Relations Secretary', 'organization' => 'House of Paris Executives – Liceo De La Salle', 'description' => "Oversaw comprehensive content creation, communication, and merchandise production.", 'year' => '2022 - 2023'],
            ['type' => 'experience', 'role' => 'Videojournalist', 'organization' => 'Kapawa – Liceo De La Salle', 'description' => "Official English Publication of Liceo De La Salle. Recorded and edited video segments for magazine releases.", 'year' => '2022 - 2023'],
        ];

        foreach ($experiences as $exp) {
            Experience::updateOrCreate([
                'role' => $exp['role'],
                'organization' => $exp['organization']
            ], $exp);
        }
    }
}
