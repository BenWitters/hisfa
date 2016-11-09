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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/css/swiper.min.css">
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
            @if(Auth::user()->can_view_prime == 1 || Auth::user()->can_view_waste == 1)
            <li>
                <a href="/silos">

                    <img src="img/silo.png" alt="Silo's">
                    <p>Silo's</p>
                    
                </a>
            </li>
            @endif

            @if(Auth::user()->can_view_blocks == 1)
            <li>
                <a href="/blocks">
                    <img src="img/blocks.png" alt="Silo's">
                    <p>Blokken</p>
                </a>
            </li>
            @endif
            <li>
                <a href="">
                    <img src="img/materials.png" alt="Silo's">
                    <p>Grondstoffen</p>
                </a>
            </li>
        
            @if(Auth::user()->is_admin == 1)
            <li>
                <a href="/manageaccounts">
                    <img src="img/user.png" alt="Silo's">
                    <p>Gebruikers</p>
                </a>
            </li>
            @endif
        </ul>
        <div class="menubar__user">
            <div class="menubar__user__avatar" style="background-image: url(<?php echo Auth()->user()->profile_picture; ?>)"></div>
            <div class="menubar__user__sub">
                <ul>
                    <a href="/account"><li>Profiel wijzigen</li></a>
                    <a href="/account/logout"><li>Uitloggen</li></a>
                </ul>
            </div>
            <div class="menubar__user__overlay"></div>
        </div>
    </nav>
    <div class="container view">
    @yield('content')

    <!-- Scripts -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(".menubar__user").click(function(){
            $(".menubar__user__sub").toggle();
            $(".menubar__user__overlay").toggle();
        });
    </script>
</body>
</html>
