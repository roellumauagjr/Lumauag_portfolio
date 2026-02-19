<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = "profiles";

    protected $fillable = [
        'full_name',
        'title',
        'bio', // short prof summary
        'email',
        'location'// City, Country
    ];
}
