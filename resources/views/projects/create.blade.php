@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1>Create a new project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
            <input type="text" name="title" placeholder="Project title" class="input{{ $errors->has('title') ? ' is-danger' : ''}}" required value="{{ old('title') }}">
        </div>

        <div>
            <label class="label" for="description">Description</label>

            <div class="control">
            <textarea name="description" class="textarea{{ $errors->has('title') ? ' is-danger' : ''}}" placeholder="{{ old('description') }}" required> </textarea>
        </div>

        <button type="submit">Submit</button>

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection