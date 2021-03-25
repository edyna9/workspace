@extends('layouts.master')

@section('title', 'Project')

@section('content')
<div class="contenu">
    <h1>More information about :</h1>
    <table border="1">
        <tr>
            <th><h3>Title</h3></th>
            <th><h3>Author</h3></th>
            <th><h3>Genre</h3></th>
        </tr>
        <tr>
            <td><h4>{{ $project->name }}</h4></td>
            <td><p>{{$project->author}}</p></td>
            <td><p>{{$project->genre}}</p></td>     
        </tr>
    </table>
            <h3>Description</h3>
                <p>{{$project->description}}</p>
                <iframe width="560" height="315" src="{{$project->source}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>       
                <a href="{{$project->source}}" target="_blank"> <button>Go to the source</button> </a>
            <br>
            <a href="/list">BACK TO THE PROJECTS</a>
</div>
@endsection