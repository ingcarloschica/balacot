<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>CRUD</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BALACOT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('post.index')}}">Listado de post<span class="sr-only">(current)</span></a>
            </li>
   
          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h2>@yield('titulo')</h2>
            </div>
            <div class="card-body">
                @yield('content')
            </div>
        </div>
      </div>
</body>
</html>