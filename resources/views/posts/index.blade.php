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
    @foreach($posts as $el)
        <div class="div-b">
            <h5>{{$el->title}}</h5>
            <p>{{$el->anons}}</p>
            <hr>
            <p>
                <a href="{{  route('posts.one',$el->id)  }}">Text Detalis</a>
            </p>
        </div>

    @endforeach
</div>


