<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $skills = Skill::orderBy('order_column')->get();
        $projects = Project::where('is_published', true)->orderBy('order_column')->get();
        $settings = SiteSetting::pluck('value', 'key');

        return view('home', compact('skills', 'projects', 'settings'));
    }
}
