@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-success">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:80%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>written at {{$post->created_at}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id==$post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>

            {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!! Form::close()!!}
        @endif
    @endif
@endsection