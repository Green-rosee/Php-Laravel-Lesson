@extends('layouts.main')

@section('header-title')
    {{$post->title}}
@endsection

@section('content')

    <div class="post-container">
        <div class="div-c">
            <h3>
                {{$post->title}}
            </h3>
            <p>
                {{$post->text}}
            </p>
            <a href="{{route('posts.one.edit',$post->id)}}">Edit</a>
            <a href="{{route('posts.one.delete',$post->id)}}">Delete</a>
        </div>

    </div>


    @include('includes.aside')

@endsection



