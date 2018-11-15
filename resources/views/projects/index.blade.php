@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Projects</h1>

    <ul>
        @foreach($projects as $project)
            <li>
                <a href="/projects/ {{ $project->id }}">
                    <ul>
                        {{ $project-> title }}
                    </ul>
                </a>
            </li>
        @endforeach
    </ul>
@endsection