@extends('layouts.master')

@section('title', 'List')

@section('content')
<div class="contenu">
    <h1>The best projects ever</h1>
        <h2>Our selection for you :</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo quos ullam necessitatibus libero debitis. Rem in dolor voluptates at. Velit distinctio saepe autem praesentium magni commodi soluta, sit quasi hic?</p>
            <table border="1">
                <tr>
                    <th>Project</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Source</th>
                    <th>Delete</th>
                    <th>Update</th>

                    
                </tr>
                @foreach ($projects as $project)
                <tr>
                    <td> <a href="/project/{{ $project->id }}">{{ $project->name }} </a> </td>
                    <td>{{$project->author}}</td>
                    <td>{{$project->genre}}</td>
                    <td>
                        <a href="{{$project->source}}" target="_blank"> <button>Whatch the video</button> </a>
                    </td>

                     <td>
                        <form action="/deleteProject" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="submit" value="X">
                        </form>
                    </td>
                    <td>
                        <a href="/updateProject/{{$project->id}}">Change it</a>
                        {{--
                        <form action="/updateProject" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="submit" value="Change it">
                        </form>
                        --}}
                    </td>
                </tr>
                @endforeach
            </table>

            <h3>Somes reasons why we choose them</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo quos ullam necessitatibus libero debitis. Rem in dolor voluptates at. Velit distinctio saepe autem praesentium magni commodi soluta, sit quasi hic?</p>
                    {{-- @dd($projects) --}}
</div>
@endsection