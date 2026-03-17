<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $contacts = [
            ['type' => 'main', 'platform' => 'Email', 'value' => 'roelslumauagjr@gmail.com', 'display_text' => 'roelslumauagjr@gmail.com', 'icon' => 'bi-envelope'],
            ['type' => 'main', 'platform' => 'Phone', 'value' => '0962 1361 367', 'display_text' => '0962 1361 367', 'icon' => 'bi-phone'],
            ['type' => 'main', 'platform' => 'Location', 'value' => 'Bacolod City, Philippines', 'display_text' => 'Bacolod City, Philippines', 'icon' => 'bi-geo-alt'],

            ['type' => 'social', 'platform' => 'LinkedIn', 'value' => 'https://www.linkedin.com/in/roel-jr-lumauag-7b9626323/', 'display_text' => 'LinkedIn', 'icon' => 'bi-linkedin'],
            ['type' => 'social', 'platform' => 'GitHub', 'value' => 'https://github.com/roellumauagjr', 'display_text' => 'GitHub', 'icon' => 'bi-github'],
            ['type' => 'social', 'platform' => 'Facebook', 'value' => 'https://www.facebook.com/notroel', 'display_text' => 'Facebook', 'icon' => 'bi-facebook'],
        ];

        foreach ($contacts as $contact) {
            \App\Models\Contact::updateOrCreate([
                'platform' => $contact['platform']
            ], $contact);
        }
    }
}
