<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <style media="screen">
  li {
    padding-left: 40px;
  }

  </style>
  <body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="nav mx-auto">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/sports">SPORTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/lifestyle">LIFESTYLE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/fashion">FASHION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/music">MUSIC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/shop">SHOP</a>
          </li>
        </ul>
      </div>
      <div class="nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="/login">LOGIN</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('main')
    </div>

  </body>
</html>
