<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $experiences = Experience::where('type', 'experience')->orderBy('id', 'desc')->get();
        $settings = SiteSetting::pluck('value', 'key');

        return view('experience', compact('experiences', 'settings'));
    }
}
