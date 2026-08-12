<?php

namespace App\Models;

use Database\Factories\ProjectsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    /** @use HasFactory<ProjectsFactory> */
    use HasFactory;

    protected $casts = [
        'tech_stack' => 'array',
    ];
}
