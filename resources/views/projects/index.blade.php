@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Projects</h1>

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