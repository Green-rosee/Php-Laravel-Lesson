
@extends('layouts.main')

@section('header-title')
    Edit Post Page
@endsection

@section('content')
    @if($errors->any())
        <div class="block-error">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container-a">
        <div class="form-container-b">
            <h1>Edit Post Page</h1>
            <form action="{{route('posts.edit',$post->id)}}" method="POST" class="form-group-a">
                @csrf

                <label for="title">Name Post</label>
                <input type="text" placeholder="Enter name post" name="title" id="title" value="{{$post->title}}">
                <hr>
                <label for="anons">Anons</label>
                <input type="text" placeholder="Enter anons" name="anons" id="anons" value="{{$post->anons}}">
                <hr>
                <label for="text">Text</label>
                <textarea name="text" id="text" placeholder="Enter text">{{$post->text}}</textarea>

                <button type="submit" class="button-a">Edit Button</button>


            </form>
        </div>
    </div>

    @include('includes.aside')
@endsection
