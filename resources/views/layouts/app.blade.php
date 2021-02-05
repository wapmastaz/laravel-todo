<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @yield('title')
  </title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <a class="navbar-brand">Todos App</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/todos">Home</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="/create-todo">Create Todo</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" target="_blank" href="mailto:demolatheophilus8@gmail.com">Mail Me</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" target="_blank" href="tel:+2349035355945">Call or Text</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" target="_blank" href="https://twitter.com/demolaTheo">Twitter</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">

    <div class="row">
      <div class="col-md-8 mx-auto">
        @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show">
          {{ Session::get('message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
      </div>
    </div>

    <!-- yield -->
    @yield('content')


  </div>


</body>

</html>