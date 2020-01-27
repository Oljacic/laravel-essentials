@extends('master')

@section('title', 'HomePage')
@section('content')
    Recent Messages:

    <ul>
        @foreach ($messages as $message)
            <li>{{$message->title}} - {{$message->content}}</li>
        @endforeach
    </ul>

@endsection