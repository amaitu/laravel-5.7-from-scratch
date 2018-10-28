@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Edit project</h1>

    <form method="post" action="/projects/{{ $project->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" name="description" placeholder="Description">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection
