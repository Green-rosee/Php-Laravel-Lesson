<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Dashboard</title>
    @vite(['resources/css/userA.css','resources/js/app.js'])
</head>
<body>
<h2>Page Dashboard</h2>
<hr>
<div class="divA">
    <a href="{{route('user')}}" class="buttonA">Security</a>
</div>
<hr>

<div class="divA">
    <a href="{{route('user')}}" class="buttonA" type="submit">LogOut</a>
</div>

{{--  <div class="container">
    <div class="header">
        <h1>Добро пожаловать! ✈️</h1>
        <p>Создайте аккаунт для бронирования путешествий</p>
    </div>

    <div>
        <div>
            ✅ Регистрация успешна! Перенаправление...
        </div>


<form>
    @csrf
    <div class="name-row">

        <div class="divA">
            <label for="Name">Имя</label>
            <input type="text" id="Name" name="Name" placeholder="Введите имя">
            <div id="NameError">Введите имя</div>
        </div>

    </div>

    <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="example@mail.com">
        <div id="emailError">Введите корректный email</div>
    </div>

    <div >
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" placeholder="Минимум 3 символов">
        <div id="passwordError">Пароль должен содержать минимум 3 символов</div>
    </div>

    <div >
        <label for="confirmPassword">Подтверждение пароля</label>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Повторите пароль">
        <div id="confirmError">Пароли не совпадают</div>
    </div>

    <div id="agreeError" style="margin-top: -10px; margin-bottom: 10px;">
        Подтвердите согласие с условиями
    </div>

    <button class="button" type="submit">Создать аккаунт</button>
</form>

</div>
</div> --}}

</body>
</html>
