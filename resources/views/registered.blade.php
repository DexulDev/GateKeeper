<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi</title>
</head>
<body>
    Welcome, you have successfully register, but unfortunately I don't know how to create a frontend, so here is 😁
    <br>
    <form id="logout-form" action="{{ route('login') }}" method="GET" style="display: none;">
        @csrf
        <button type="submit">Login</button>
    </form>
    <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Login
    </button>
    </form>
</body>
</html>
