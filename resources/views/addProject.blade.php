@extends('layouts.master')

@section('title', 'Add a Project')

@section('content')
<div class="contenu">
    <h1>Add a Project</h1>
        <h2>Your opinion is our inspiration</h2>
        <div>
            <form action="/addProject" method="POST">
                @csrf
                <div>
                    <label for="name">Project</label>
                    <div>
                        <input type="text" name="name" placeholder="Project" value="10 New ideas for your room">
                    </div>
                </div>
                <div>

                    <label for="author">Author</label>
                        
                        <input type="text" name="author" placeholder="Author" value="Lone Fox">
                    
                    </select>

                </div>
                <div>
                    <label for="source">Source</label>
                    <div>
                        <input type="text" name="source" placeholder="Source" value="https://www.youtube.com/embed/Q5coSYYa6z0">
                    </div>
                </div>
                <div>
                    <label for="genre">Genre</label>
                    <div>

                        <div>
                            <input type="text"name="genre" placeholder="genre" value="Paint">
                        </div>

                    </div>
                </div>
                <div>
                    <label for="description">Description</label>
                    <div>
                        <input type="text"name="description" placeholder="description" value="Enjoy this new ideas to create something special to your home.">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit">Add a New Project!</button>
                </div>
            </form>
        </div>
</div>
@endsection