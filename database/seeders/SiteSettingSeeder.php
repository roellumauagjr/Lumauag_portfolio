<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
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
    }
}
