<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __invoke(Request $request)
    {
        $projects = Project::where('is_published', true)->orderBy('order_column')->get();
        $settings = SiteSetting::pluck('value', 'key');

        return view('projects', compact('projects', 'settings'));
    }
}
