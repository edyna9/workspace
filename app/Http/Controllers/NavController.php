<?php

namespace App\Http\Controllers;

use App\Models\Project;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function showHome()
    {
        return view('home');
    }

    public function showList()
    {
        $projects = Project::all();
        return view('list', ['projects'=> $projects]);
    }

    public function showProject($id)
    {
        //$projects = Project::all();
        //return view('project',['projects'=> $projects]);
        
        return view('project', ['project' => Project::findOrFail($id)]);
    }

    public function showAddProject()
    {   
        //$authors = Author::all()->sortBy('name');
        //$genres = Genre::all();
        return view('addProject');
    }

    public function showUpdateProject($id)
    {
        $project = Project::findOrFail($id);
        return view('updateProject', ['project' => $project]);
    }

}
