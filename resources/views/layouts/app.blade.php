<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light  navbar__menu">
        <div class="container-fluid" id="header">
          <a class="navbar-brand logo" href="#"><h1><b>NAHUEL MARTINEZ</b></h1>
            <h3><b>PHOTOGRAPHER</b></h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">SKATEBOARDING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PORTRAIT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">STORE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
              </li>
              <li class="nav-item1">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
