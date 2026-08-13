<?php

namespace App\Http\Controllers;

use App\Models\Projects;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function show(Projects $project)
    {
        return view('projects.show', compact('project'));
    }
}
