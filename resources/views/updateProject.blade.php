@extends('layouts.master')

@section('Title', 'Update a project')

@section('content')
<div class="contenu">
    <h1>Update a Project</h1>
        <h2>Make better our Workspace </h2>
        <div>
            <form action="/updateProject" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$project->id}}">
                <div>
                    <label for="name">Project</label>
                    <div>
                        <input type="text" name="name" placeholder="Project" value="{{$project->name}}">
                    </div>
                </div>
                <div>
                    <label for="author">Author</label>
                    <div>
                        <input type="text" name="author" placeholder="Author" value="{{$project->author}}">
                    </div>
                </div>
                <div>
                    <label for="source">Source</label>
                    <div>
                        <input type="text" name="source" placeholder="Source" value="{{$project->source}}">
                    </div>
                </div>
                <div>
                    <label for="genre">Genre</label>
                    <div>
                        <input type="text"name="genre" placeholder="Genre" value="{{$project->genre}}">
                    </div>
                </div>
                <div>
                    <label for="description">Description</label>
                    <div>
                        <input type="text"name="description" placeholder="Description" value="{{$project->description}}">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit">Change this Project</button>
                </div>
            </form>
        </div>
</div>
@endsection