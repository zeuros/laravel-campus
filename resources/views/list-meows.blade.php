@extends('layouts.app')



@section('content')
    List of meows: <br>
    <br>
    @foreach($meows as $meow)
        {{ $meow->title }}<br>
        {{ $meow->message }}<br>
        <br>
    @endforeach

    <a href="{{ url('create-meow') }}">Add meow</a>
@endsection
