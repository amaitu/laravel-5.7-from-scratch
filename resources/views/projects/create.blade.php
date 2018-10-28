@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1>Create a new project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
@endsection