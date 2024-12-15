<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi</title>
</head>
<body>
    Welcome, you have successfully logged in (or register), but unfortunately I don't know how to create a frontend, so here is 😁
    <br>
    <form id="logout-form" action="{{ route('login.logout') }}" method="POST" style="display: none;">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </button>
    </form>
    <br>
    <a href="{{ route('login') }}">Go to main page</a>
</body>
</html>