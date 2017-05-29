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
                    <a class="navbar-brand" href="{{ url('/') }}" style="font-size:180%;">
                        {{ config('app.name', 'Beauty Clinic') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav" style="font-size:130%;margin-left:20px;">
                      @if(Auth::guest())
                            <li><a href="/">Home</a></li>
                            <li><a  href="service">Service</a></li>
                            <li ><a  href="voucher">Voucher</a></li>
                            @else
                            <?php
                            $user=\App\User::where('email','=',Auth::User()->email)->first();
                            if($user->role_id == '1'){ ?>
                              <li ><a href="userTB">All Users</a></li>
                              <li><a  href="courseTB">All Courses</a></li>
                              <li ><a  href="voucherTB">All Vouchers</a></li>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                      Add... <span class="caret"></span>
                                  </a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a data-toggle="modal" href="#serviceModal">Add Service</a></li>
                                      <li><a data-toggle="modal" href="#promoModal" onclick="getAllCourse();">Add Promotion</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                      Buy... <span class="caret"></span>
                                  </a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a data-toggle="modal" href="#voucherModal">Buy Voucher</a></li>
                                      <li><a data-toggle="modal" href="#courseModal" onclick="getAllCourse();">Buy Course</a></li>
                                  </ul>
                              </li>
                              
                            <?php }
                            if($user->role_id == '2'){ ?>
                              <li ><a href="/">Home</a></li>
                              <li><a  href="service">Service</a></li>
                              <li ><a  href="voucher">Voucher</a></li>
                              <li ><a href="profile">Profile</a></li>
                            <?php }
                            ?>

                            @endif
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
                                        <a href="/change-password" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('change-form').submit();">
                                            Change Password
                                        </a>

                                        <form id="change-form" action="/change-password" method="GET" style="display: none;">
                                            {{ csrf_field() }}
                                            {{-- <input type="hidden" name='email' value={{ Auth::user()->email }}> --}}
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

        @yield('content')
    </div>

<!-- old service modal -->

<!-- old promo modal -->

<!-- old vorcher modal -->

<!-- old course modal -->



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script>
        function getAllCourse() {
            $.ajax({
                type: "get",
                url: './get-all-courses',
                data: "",
                success: function(data) {
                    console.log('asdkasld');
                    var text = "";
                    for (i =0; i < data.courses.length; i++) { 
                        text += '<option value="' + (i+1) + '" >' + data.courses[i].name + "</option>";
                    }
                    $('#course_id').html(text);
                    $('#course_id2').html(text);
                }
            })
        };
        
    </script>

</body>
</html>
