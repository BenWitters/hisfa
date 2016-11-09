<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="menubar">
        <a class="menubar__logo" href="/">HISFA</a>
        <ul>
            <li>
                <a href="/silos">

                    <img src="img/silo.png" alt="Silo's">
                    <p>Silo's</p>
                    
                </a>
            </li>
            <li>
                <a href="/blocks">
                    <img src="img/blocks.png" alt="Silo's">
                    <p>Blokken</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="img/materials.png" alt="Silo's">
                    <p>Grondstoffen</p>
                </a>
            </li>
        

            <li>
                <a href="/manageaccounts">
                    <img src="img/user.png" alt="Silo's">
                    <p>Gebruikers</p>
                </a>
            </li>
        </ul>
        <a class="menubar__user" href="/account">
            <div class="menubar__user__avatar" style="background-image: url(<?php echo Auth()->user()->profile_picture; ?>)"></div>
        </a>
    </nav>
    <div class="container view">
    @yield('content')

    <!-- Scripts -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>
