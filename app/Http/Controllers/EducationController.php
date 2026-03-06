<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $educations = Experience::where('type', 'education')->orderBy('id', 'desc')->get();
        $certifications = Experience::where('type', 'certification')->orderBy('id', 'desc')->get();
        $settings = SiteSetting::pluck('value', 'key');

        return view('education', compact('educations', 'certifications', 'settings'));
    }
}
