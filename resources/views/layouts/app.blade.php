<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Test</title>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Test Blog</a>
    </div>
    <ul class="nav navbar-nav">



      <li><a href="{{ url('/') }}">Home</a></li>

      @if (Auth::guest())
      <li>
        <a href="{{ url('/auth/login') }}" class="nav-link" >Login</a>
      </li>

      <li>
        <a href="{{ url('/auth/register') }}" class="nav-link" >Register</a>
      </li>
      @else
      <li>
        <a href="#" class="nav-link" >Welcome, {{ Auth::user()->name }}</a>
      </li>

      @if (Auth::user()->can_post())
      <li><a href="{{ url('/new-post') }}" class="nav-link" >Add new post</a></li>
      <li><a href="{{ url('/user/'.Auth::id().'/posts') }}" class="nav-link" >My Posts</a></li>
      @endif
      <li><a href="{{ url('/user/'.Auth::id()) }}" class="nav-link" >My Profile</a></li>
      <li><a href="{{ url('/logout') }}" class="nav-link" >Logout, <b>{{ Auth::user()->name }}</b></a></li>
       @endif
    </ul>
  </div>
</nav>


        

  <div class="container">
    @if (Session::has('message'))
    <div class="flash alert-info">
      <p class="panel-body">
        {{ Session::get('message') }}
      </p>
    </div>
    @endif
    @if ($errors->any())
    <div class='flash alert-danger'>
      <ul class="panel-body">
        @foreach ( $errors->all() as $error )
        <li>
          {{ $error }}
        </li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2>@yield('title')</h2>
            @yield('title-meta')
          </div>
          <div class="panel-body">
            @yield('content')
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>