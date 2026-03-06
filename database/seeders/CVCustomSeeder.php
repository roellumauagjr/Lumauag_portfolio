<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CVCustomSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Skill::truncate();
        Project::truncate();
        Experience::truncate();
        SiteSetting::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 1. Site Settings
        $settings = [
            'full_name' => 'ROEL JR. S. LUMAUAG',
            'profile_title' => 'BS Computer Science Student (Game Development) | Front-End Developer | UI/UX Artist',
            'hero_greeting' => "Hey, I'm",
            'hero_role_title' => 'Roel Jr. Lumauag',
            'about_text_paragraph' => 'I am a 3rd-year computer science student majoring in Game Development at the University of St. La Salle, passionate about creating immersive experiences and visually stunning designs. I have a strong background in both technical programming and creative media production.',
            'contact_email' => 'roelslumauagjr@gmail.com',
            'contact_phone' => '0962 1361 367',
            'address' => 'Bacolod City, Negros Occidental, Philippines',
            'behind_designs_title' => 'Behind the Designs',
            'behind_designs_subtitle' => 'Shaping Experiences That Make Life Simpler',
            'behind_designs_description' => "I believe that great design should feel invisible. It's about creating a language that connects and converts.",
            'linkedin_url' => 'https://www.linkedin.com/in/roel-jr-lumauag-7b9626323/',
            'github_url' => 'https://github.com/roellumauagjr',
            'facebook_url' => 'https://www.facebook.com/notroel',
            'navbar_brand' => "ROEL'S",
            'navbar_brand_accent' => 'PORTFOLIO',
            'navbar_contact_button' => 'Contact Info',
            'hero_cta_button' => "Let's Connect",
            'footer_name' => 'ROEL JR LUMAUAG',
            'footer_year' => '2026',
            'home_work_image_1' => 'https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=1000&auto=format&fit=crop',
            'home_work_image_2' => 'https://images.unsplash.com/photo-1558655146-d09347e92766?q=80&w=1000&auto=format&fit=crop',
            'home_work_image_3' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1000&auto=format&fit=crop',
            'skills_page_title' => 'Skills &',
            'skills_page_accent' => 'Expertise',
            'skills_page_subtitle' => 'A comprehensive list of my technical capabilities and creative expertise.',
            'projects_page_title' => 'Featured',
            'projects_page_accent' => 'Projects',
            'projects_page_subtitle' => 'A curated selection of my past work and personal projects.',
            'experience_page_title' => 'Career',
            'experience_page_accent' => 'Journey',
            'experience_page_subtitle' => 'My professional experience and academic background.',
            'contact_page_title' => 'Get in',
            'contact_page_accent' => 'Touch',
            'contact_page_subtitle' => "Let's collaborate on your next big idea.",
            'contact_card_title' => "Let's Connect",
            'contact_email_label' => 'Email',
            'contact_phone_label' => 'Phone',
            'contact_location_label' => 'Location',
            'contact_follow_title' => 'Follow Me',
            'footer_built_text' => 'Built with passion & precision.',
            'exp_professional_title' => 'Affiliations',
            'exp_education_title' => 'Education & Background',
            'edu_page_title' => 'Educational',
            'edu_page_accent' => 'Background',
            'edu_page_subtitle' => 'My academic journey and professional certifications.',
            'edu_certifications_title' => 'Certifications & Awards',
        ];

        foreach ($settings as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // 2. Skills
        $skills = [
            ['prefix' => '01', 'name' => 'Technical Development', 'desc' => 'Skilled in C++, HTML, CSS, Python, Java, and both Front-End & Back-End Development.'],
            ['prefix' => '02', 'name' => 'Design & UI/UX', 'desc' => 'Expertise in UI/UX Design, Graphic Design, Layout, and 3D Art (Modeling, Rigging, Texturing).'],
            ['prefix' => '03', 'name' => 'Media & Content', 'desc' => 'Professional Photography, Videography, and Video Editing using Adobe Creative Suite.'],
            ['prefix' => '04', 'name' => 'Software Tools', 'desc' => 'Advanced proficiency in Adobe Photoshop, Premiere Pro, and Microsoft Office Suite.'],
        ];

        foreach ($skills as $index => $skill) {
            Skill::updateOrCreate(['name' => $skill['name']], [
                'number_prefix' => $skill['prefix'],
                'description' => $skill['desc'],
                'order_column' => $index,
            ]);
        }

        // 3. Projects
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

        // 4. Experiences (Education & Experience)
        $experiences = [
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
            ], [
                'type' => $exp['type'],
                'description' => $exp['description'],
                'year' => $exp['year'],
            ]);
        }
    }
}
