<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>MFC | REGISTER</title>
</head>
<body>


    <div class="navbar-container">
        <nav class="navbar">
            <div class="container">
                <div class="hamburger" id="hamburger">
                    <h4 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">MENU</h4>
                </div>
                <ul class="menu">
                    <li><a href="#">EVENTS</a></li>
                    <li><a href="rangkings.blade.php">RANKINGS</a></li>
                    <li><a href="#">ATHLETES</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li class="logo">
                        <h2>MFC</h2>
                    </li>
                    <li><a href="#">CONNECT</a></li>
                    <li><a href="#">WATCH</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li><a href="#">MFC</a></li>
                </ul>
            </div>
        </nav>
    </div>
   


    <div class="container">
        <div class="registration-form">
            <h5>PAGE</h5>
            <h1>GET THE VIDEOS</h1>
            <form method="POST" action="{{ route('register') }}">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn-register">Register</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.getElementById('hamburger');
            const menu = document.querySelector('.menu');

            hamburger.addEventListener('click', function() {
                menu.classList.toggle('active');
            });
        });
    </script>

</body>
</html>