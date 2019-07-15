<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        //used as a session id
        $projects = Project::where('owner_id', auth()->id())->get();
        return view('projects.index', ['projects' => $projects]);
    }

    public function create() {
        return view('projects.create', compact('projects'));
    }

    public function store() {
        //this method ensures the data received from the request is valid and is not empty,
        //if the data is empty the page redirects to the exact same page until the user gives valid input.

        $validated = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);
        //$validated['owner_id'] = request()->Auth::user()->id;
        //$validated = ['owner_id'] = Auth::id();
        //creates a project, requests values for title and description and then saves those values.
        Project::create($validated + ['owner_id' => auth()->id()]);
        return redirect('/projects');
    }

    public function show(Project $project) {
        $this->authorize('update', $project);
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {
        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect('/projects');
    }

}
