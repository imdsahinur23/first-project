<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>

     .font{
            background: url("{{ asset('images/hillb.jpg') }}") no-repeat center center;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body class="font">
<div class="wrapper">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h2>Sign In</h2>
        <div class="input-field">
            <input type="email" name="email" required>
            <label>Enter your email</label>
        </div>
        <div class="input-field">
            <input type="password" name="password" required>
            <label>Enter your password</label>
        </div>
        
        <button type="submit">Sign In</button>
        <div class="register">
            <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
        </div>
    </form>
</div>

@if ($errors->any())
    <div class="error-messages">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:yellow">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body>
</html>