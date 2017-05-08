<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='//fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    <link href='//fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" media="screen" href="css/bulma.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Beauty Clinic') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="font-family:Kanit; background: url(img/bg.png); background-attachment:fixed;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="magin-bottom: 0px !important;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Beauty Clinic') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/change" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('change-form').submit();">
                                            Change Password
                                        </a>

                                        <form id="change-form" action="change" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" name='email' value={{ Auth::user()->email }}>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <section class="hero is-danger is-medium" style="font-family:Fredoka One; background-color:	#F08080; margin-top:0px;">
          <!-- Hero header: will stick at the top -->

          <!-- Hero content: will be in the middle -->
          <br>
            <div class="container has-text-centered"   style="font-size:70px">
                Beauty Clinic
                  @yield('pic')
            </div>
            <br>

          <!-- Hero footer: will stick at the bottom -->
          <div class="hero-foot">
            <nav class="tabs is-boxed is-fullwidth">
              <div class="container" style="font-size:20px;">
                <ul>
                  <ul >
                    @if(Auth::guest())
                          <li><a href="/">Home</a></li>
                          <li><a  href="service">Service</a></li>
                          <li ><a  href="voucher">Voucher</a></li>
                          @else
                          <?php
                          $user=\App\User::where('email','=',Auth::User()->email)->first();
                          if($user->role_id == '1'){ ?>
                            <li ><a href="/">All User</a></li>
                            <li><a  href="service">All Course</a></li>
                            <li ><a  href="voucher">All Voucher</a></li>
                          <?php }
                          if($user->role_id == '2'){ ?>
                            <li ><a href="/">Home</a></li>
                            <li><a  href="service">Service</a></li>
                            <li ><a  href="voucher">Voucher</a></li>
                            <li ><a href="profile">Profile</a></li>
                          <?php }
                          ?>

                          @endif
<!--
                    <li class="is-active"><a>Home</a></li>
                    <li><a  href="service">Service</a></li>
                    <li ><a  href="voucher">Voucher</a></li> -->
                </ul>
              </div>
            </nav>
          </div>
        </section>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
