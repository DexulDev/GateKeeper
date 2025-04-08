<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container sign-in-container">
            <div class="form-content" style="background-color: #FFFFFF; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 0 50px; height: 100%; text-align: center;">
                <h1>Welcome!</h1>
                @if(session('username'))
                    <p>Hello, <strong>{{ session('username') }}</strong></p>
                    <span>You have successfully logged in</span>
                @endif
                @if(Auth::check())
                    <p>Hello, <strong>{{ Auth::user()->name }}</strong></p>
                    <span>You are already logged in</span>
                @endif
                <div style="margin-top: 20px;">
                    <form id="logout-form" action="{{ route('login.logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Session Active</h1>
                    <p>You are currently logged into your account</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
