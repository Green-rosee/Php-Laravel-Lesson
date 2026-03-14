@extends('layouts.main')

@section('header-title')
    The All Posts Page
@endsection

@section('content')
    <h1>Posts Page</h1>
    <p>
        Мельнибонэйцы (жители Империи Драконов из цикла Майкла Муркока об Элрике) — это не просто «люди с магией».
        Это древняя, нечеловеческая раса, которая доминировала над миром на протяжении десяти тысяч лет.
    </p>

    @include('includes.aside')
@endsection

<div class="div-a">
    @foreach($posts as $post)
        <div class="div-b">
            <h5>{{$post->anons}}</h5>
            <p>{{$post->title}}</p>
        </div>

    @endforeach
</div>


