<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Mail</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header_left">
          <img src="{{ asset('img/logo.png')}}" alt="">
        </div>
        <div class="header_right">
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Corso</a>
            </li>
            <li>
              <a href="#">Metodo</a>
            </li>
            <li>
              <a href="#">Dopo il corso</a>
            </li>
            <li>
              <a href="#">FAQ</a>
            </li>
            <li><a href="{{ route('iscriviti.index') }}" class="nav_btn">Iscriviti</a></li>
          </ul>
        </div>
      </div>
    </header>
    @yield('content')
  </body>
</html>
