<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Success</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container sign-in-container">
            <form>
                <h1>Success!</h1>
                <p>Your account has been successfully registered</p>
                <span>You can now log in to access your account</span>
                
                <div style="margin-top: 20px;">
                    <a href="{{ route('login') }}">
                        <button type="button">
                            Go to Login
                        </button>
                    </a>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Registration Complete</h1>
                    <p>Thank you for registering with our service</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
