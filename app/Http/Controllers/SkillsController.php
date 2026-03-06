<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $skills = Skill::orderBy('order_column')->get();
        $settings = SiteSetting::pluck('value', 'key');

        return view('skills', compact('skills', 'settings'));
    }
}
