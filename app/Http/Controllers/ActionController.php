<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ActionController extends Controller
{
    public function addProject(Request $request)
    {
        $project= new Project;
        $project->name = $request->name;
        $project->author = $request->author;
        $project->genre = $request->genre ;
        $project->source = $request->source ;
        $project->description = $request->description;
        $project->save();
        
        return redirect('/list');
    }

    public function deleteProject(Request $request)
    {
        //$project = Project::find($request->id);
        //$project->delete();

        Project::destroy($request->id);

        return redirect('/list');
    }

    public function updateProject(Request $request)
    {
        $project = Project::findOrFail($request->id);
        $project->name = $request->name;
        $project->author= $request->author;
        $project->source = $request->source ;
        $project->genre = $request->genre ;
        $project->description = $request->description;
        
        $project->save();
        return redirect('/list'); 
    }
}
