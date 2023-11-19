<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Upeu Praticas-PPP</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/navbar.css">
        <!-- Styles -->


        <script src="/js/nav.js" defer></script>

    </head>
    <body class="antialiased">


           <header>
                <img src="/img/upeu-removebg-preview.png" alt="" class="logo" width="200px" >
                <ul>
                  <li><a href="">INICIO</a></li>
                  <li><a href="">OFERTAS</a></li>
                  <li><a href="">INDUCCION</a></li>
                  <li><a href="">CONTACTENOS</a></li>

                  @if (Route::has('login'))
                  <div class="logeo">
                      @auth
                          <a href="{{ url('/dashboard') }}" >Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" >LOGIN</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" >REGISTRARSE</a>
                          @endif
                      @endauth
                  </div>
              @endif
                </ul>
              </header>

              <section class="banner"></section>


    </body>
</html>
