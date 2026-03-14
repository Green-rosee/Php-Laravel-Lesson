@extends('layouts.main')

@section('header-title')
    Contact Page
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
            <h1>Contact Page</h1>
            <form action="{{route('contact.post')}}" method="POST" class="form-group-a">
                @csrf

                <label for="name">Name</label>
                <input type="text" placeholder="Enter name" name="name" id="name" value="{{old('name')}}">
                <hr>
                <label for="email">Email</label>
                <input type="text" placeholder="Enter email" name="email" id="email" value="{{old('email')}}">
                <hr>
                <label for="subject">Theme</label>
                <input type="text" placeholder="Enter theme" name="subject" id="subject" value="{{old('subject')}}">
                <hr>
                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Enter message">{{old('message')}}</textarea>

                <button type="submit" class="button-a">Push</button>


            </form>
        </div>
    </div>

    @include('includes.aside')
@endsection
