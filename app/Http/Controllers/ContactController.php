<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $contacts = Contact::all();
        $settings = SiteSetting::pluck('value', 'key');

        return view('contact', compact('contacts', 'settings'));
    }
}
