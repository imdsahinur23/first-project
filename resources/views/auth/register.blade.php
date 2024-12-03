<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <style>

        .font{
            background: url("{{ asset('images/hillb.jpg') }}") no-repeat center center;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }

        .error-message {
            font-size: 0.9em;
            margin-top: 5px;
        }
</style>
</head>
<body class="font">

<div class="wrapper">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h2>Sign Up</h2>
     
        <div class="input-field">
            <input type="text" name="name" required>
            <label>Enter your name</label>
        </div>
        <div class="input-field">
            <input type="email" name="email" required>
            <label>Enter your email</label>
        </div>
        <div class="input-field">
            <input type="password" name="password" required>
            <label>Enter your password</label>
          
            <span class="length-message" style="display: none; color: red;">Password must be at least 8 characters long</span>
        </div>
        <div class="input-field">
            <input type="password" name="password_confirmation" required>
            <label>Enter your Confirm password</label>
          
            <span class="error-message" style="display: none; color: red;">Passwords do not match</span>
        </div>
      
        <button type="submit">Sign Up</button>

       
       
    </form>

    <div class="register">
            <p>You have an account, please! <a href="{{ route('login') }}">Sign In</a></p>
    </div>
</div>
 

    @if ($errors->any())
    <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>

