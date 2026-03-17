<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        $educations = [
            ['type' => 'education', 'role' => 'Bachelor of Science in Computer Science, Major in Game Development', 'organization' => 'University of St. La Salle Bacolod', 'description' => "3rd Year Undergraduate. Dean’s Lister, A.Y. 2023–2024 (First and Second Semester), A.Y. 2024–2025 (First and Second Semester). Animo Grand Cup 2024 – Outstanding Student in Filmmaking.", 'year' => '2023 - 2027'],
            ['type' => 'education', 'role' => 'Science, Technology, Engineering and Mathematics (STEM) Strand', 'organization' => 'Liceo De La Salle – University of St. La Salle Bacolod', 'description' => "General Average: 98.56 (With Highest Honors – Top 10% of graduating batch). Leadership Awardee & Publication Awardee (2022-2023).", 'year' => '2021 - 2023'],
            ['type' => 'education', 'role' => 'High School Graduate', 'organization' => 'Bata National High School', 'description' => "General Average: 96.09 (Batch Valedictorian – Overall Top 1 with High Honors). JCI Bacolod Youth Leadership Excellence Awardee (2021).", 'year' => '2018 - 2021'],
            ['type' => 'certification', 'role' => 'Introduction to Cybersecurity', 'organization' => 'Cisco Networking Academy', 'description' => 'Certificate of Course Completion - Issued by Cisco Networking Academy.', 'year' => '2024'],
            ['type' => 'certification', 'role' => 'Computer Hardware Basics', 'organization' => 'Cisco Networking Academy', 'description' => 'Certificate of Course Completion - Issued through the DICT-ITU DTC Initiative via Cisco Networking Academy.', 'year' => '2024'],
            ['type' => 'certification', 'role' => 'Visual Graphic Design NC III: Introduction to Visual Graphic Design', 'organization' => 'TESDA Online Program (eTESDA Division)', 'description' => 'Certificate of Completion - Issued by TESDA Online Program.', 'year' => '2024'],
            ['type' => 'certification', 'role' => 'Visual Graphic Design NC III: Developing Designs for User Interface', 'organization' => 'TESDA Online Program (eTESDA Division)', 'description' => 'Certificate of Completion - Issued by TESDA Online Program.', 'year' => '2024'],
            ['type' => 'certification', 'role' => 'SMART Technopreneurship 101', 'organization' => 'TESDA Online Program (eTESDA Division)', 'description' => 'Certificate of Completion - Issued by TESDA Online Program.', 'year' => '2024'],
            ['type' => 'certification', 'role' => 'Outstanding Student in Filmmaking', 'organization' => 'Animo Grand Cup 2024', 'description' => 'Awarded for exceptional creative contribution in film production.', 'year' => '2024'],
            ['type' => 'certification', 'role' => "Dean's Lister", 'organization' => 'University of St. La Salle', 'description' => 'Academic excellence for A.Y. 2023-2024 and 2024-2025.', 'year' => '2023-2025'],
        ];

        foreach ($educations as $edu) {
            \App\Models\Education::updateOrCreate([
                'role' => $edu['role'],
                'organization' => $edu['organization']
            ], $edu);
        }
    }
}
