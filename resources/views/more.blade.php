@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<p>The names passed from routes is: </p>
    @foreach ($names as $name)
    {{$name}}
    @endforeach
    
@endsection
