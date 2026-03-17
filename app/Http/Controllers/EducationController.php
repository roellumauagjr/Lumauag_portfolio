<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function __invoke(Request $request)
    {
        $educations = Education::where('type', 'education')->orderBy('id', 'desc')->get();
        $certifications = Education::where('type', 'certification')->orderBy('id', 'desc')->get();
        $settings = SiteSetting::pluck('value', 'key');

        return view('education', compact('educations', 'certifications', 'settings'));
    }
}
