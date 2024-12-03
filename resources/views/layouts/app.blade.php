<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <title>Home</title>
  <style>

    .font{
            background: url("{{ asset('images/hill.jpg') }}") no-repeat center center;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }
    </style>    
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">


</head>
<body class="font">
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">MyWebsite</div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="menu">
              <nav class="navbar navbar-expand-sm bg-dark">

<!-- Links -->
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('profile') }}">Home</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('create') }}">Products</a>
                </li>
               
                </ul>

                </nav>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" style="background: none; border: none; color: white; padding: 10px 15px; cursor: pointer;">Logout</button>
            </form>
        </div>
    </div>
   

    <!-- Main Content -->
   @if($message = Session::get('success'))

   <div class="alert alert-success alert-block" id="success-alert">
    <strong>{{ $message }}</strong>
    </div>

   @endif

   <script>
       $(document).ready(function() {
         // Fade out the success message after 3 seconds (3000ms) with a slow motion effect
         $("#success-alert").delay(1500).fadeOut(1500);
      });

        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>
    @yield('main')
</body>
</html>