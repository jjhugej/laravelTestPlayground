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

    public function create(){

        return view('projects.create');
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
          
        
        

        //persist
        auth()->user()->projects()->create($attributes);

    
        //Redirect
        return redirect('/projects');
    }
}
