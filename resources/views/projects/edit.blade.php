@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Edit project</h1>

    <form method="post" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" name="description"
                          placeholder="Description">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Update</button>
            </div>
        </div>
    </form>

    <hr>
    <form method="post" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button class="button" type="submit">Delete project</button>
            </div>
        </div>
    </form>
@endsection
