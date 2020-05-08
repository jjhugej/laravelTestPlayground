<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects = auth()->user()->projects;

        return view('projects.index', compact('projects'));
    }
    
    public function show(Project $project){ 

        if(auth()->user()->isNot($project->owner)){
            abort(403);
        }

        return view('projects.show', compact('project'));
    }

    public function store(){

        //Validate
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required'   
            ]);
        
        //$attributes['owner_id'] = auth()->id();

        //persist
        auth()->user()->projects()->create($attributes);

    
        //Redirect
        return redirect('/projects');
    }
}
