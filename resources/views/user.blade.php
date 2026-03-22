<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page User</title>
    @vite(['resources/css/userA.css','resources/js/app.js'])
</head>
<body>
<h2>Page User</h2>
<hr>
<div class="divB">
    <a href="#" class="buttonA">...</a>
</div>
<div class="divA">
    <a href="{{  route('dashboard')  }}" class="buttonA" type="submit">LogIn</a>
    <a href="{{  route('register')  }}" class="buttonB">Register</a>
</div>

</body>
</html>
