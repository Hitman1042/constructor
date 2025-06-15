<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::create($request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'description' => 'nullable',
            'domain' => 'nullable',
            'theme' => 'nullable'
        ]));
        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'description' => 'nullable',
            'domain' => 'nullable',
            'theme' => 'nullable'
        ]));
        return redirect('/projects');
    }
}