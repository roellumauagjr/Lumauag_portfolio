<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $skills = Skill::orderBy('order_column')->get();
        $projects = Project::where('is_published', true)->orderBy('order_column')->get();
        $experiences = Experience::where('type', 'experience')->orderBy('id', 'desc')->get();
        $educations = Education::where('type', 'education')->orderBy('id', 'desc')->get();
        $contacts = Contact::all();
        $settings = SiteSetting::pluck('value', 'key');

        return view('home', compact('skills', 'projects', 'experiences', 'educations', 'contacts', 'settings'));
    }
}
