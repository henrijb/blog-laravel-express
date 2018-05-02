@extends('template')
@section('title')
    Blog
@stop
@section('content')

    <h1>Blog</h1>

    @foreach($posts as $post)

        <h2>{{ $post->title }}<h6><i>{{ $post->created_at }}</i></h6></h2>
        <p>{{ $post->content }}</p>
        <hr/>

        <h3>Comments:</h3><br/>
        @foreach($post->comments as $comment)
            <b>{{ $comment->name }}</b> say:<br/><br/>
            <p>{{ $comment->comment}}</p>
            <hr/>
        @endforeach
        <hr/>
    @endforeach

@endsection