@extends('master')

@section('title', 'HomePage')
@section('content')
    Post a message:

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{ csrf_field() }}
        <input type="submit" name="submit" value="Submit">
    </form>

    <br>

    Recent Messages:
    <ul>
        @foreach ($messages as $message)
            <li>
            <strong><a href="/message/{{$message->id}}">{{ $message->title }}</a></strong>
                <br>
                {{ $message->content }}
                <br>
                {{ $message->created_at->diffForHumans() }}
            </li>
        @endforeach
    </ul>

@endsection