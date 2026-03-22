<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Register</title>
    @vite(['resources/css/userA.css','resources/js/app.js'])
</head>
<body>
<h1>Page Register</h1>
<div class="divA">
    <a href="{{route('user')}}" class="buttonB" type="submit">LogIn</a>
</div>

<div class="container">
    <div class="header">
        <h1>Добро пожаловать! ✈️</h1>
        <p>Создайте аккаунт для бронирования путешествий</p>
    </div>
    <ul>
        @foreach($errors->all() as $message)
            <li>{{$message}}</li>
        @endforeach
    </ul>

    <div>
        <div>
            ✅ Регистрация успешна! Перенаправление...
        </div>
        {{-- <form action="{{ route('register') }}" method="post" autocomplete="off"> novalidate --}}

        <form action="{{route('register')}}" method="post" autocomplete="off" novalidate>
            @csrf
            <div class="name-row">

                <div class="divC">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" placeholder="Введите имя" value="{{ old('name') }}">
                    <div id="NameError">Введите имя</div>
                </div>

            </div>

            <div class="divC">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="example@mail.com" value="{{old('email')}}">
                <div id="emailError"></div>
            </div>

            <div class="divC">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" placeholder="Минимум 3 символов" value="{{old('password')}}">
                <div id="passwordError"></div>
            </div>

            <div class="divC">
                <label for="confirmPassword">Подтверждение пароля</label>
                <input type="password" id="confirmPassword" name="confirmPassword"
                       placeholder="Повторите пароль" value="{{ old('confirmPassword') }}">
                <div id="confirmError"></div>
            </div>

            <div id="agreeError" style="margin-top: -10px; margin-bottom: 10px;">
                Подтвердите согласие с условиями
            </div>

            {{-- <a href="{{route('dashboard')}}" class="button" type="submit">SignUp</a> --}}


            <button class="button" type="submit">SignUp</button>
        </form>

    </div>
</div>

</body>
</html>

