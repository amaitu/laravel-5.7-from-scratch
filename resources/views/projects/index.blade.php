@extends('layout')

@section('title', 'About us')

@section('content')
    <h1>Projects</h1>

    <ul>
        @foreach($projects as $project)
            <li>
                <span>
                {{ $project-> title }}
                </span>
            </li>
            @endforeach
    </ul>
@endsection