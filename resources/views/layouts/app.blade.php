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

<!-- Modal -->
      <div class="modal fade" id="serviceModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Create Service</h4>
            </div>
            <div class="modal-body">
              <!-- <p>Some text in the modal.</p> -->
              <div class="form-group" style="width:200%">
                <form class="form-horizontal" action="/course" method = "post">
                  {{ csrf_field() }}
                  <table>
                    <tr>
                      <td><label>Service Name: </label></td>
                      <td><input type="text" name="name" placeholder="name" required></td>
                    </tr>
                    <tr>
                      <td><label>Status: </label></td>
                      <td>
                        <select name="status">
                          <option value="1">active</option>
                          <option value="0">unactive</option>
                        </select>
                      </td>
                      <td><label>Service Type:</label></td>
                      <td>
                        <select name="type_id">
                          <option value="1">course</option>
                          <option value="2">vorcher</option>
                        </select>
                      </td>
                      </tr>
                      <tr>
                        <td><label>Category:</label></td>
                        <td>
                          <select name="category">
                            <option>ทรีทเมนท์ผิวหน้า</option>
                            <option>ทรีทเมนท์ผิวกาย</option>
                            <option>กระชับสัดส่วน</option>
                            <option>เลเซอร์</option>
                            <option>ปรับรูปหน้า</option>
                          </select>
                        </td>
                        <td><label>Service Picture:</label></td>
                        <td><input type="file" name="pic_path" placeholder="picture" required></td>
                    </tr>
                    <tr>
                      <td><label>Service Price:</label></td>
                      <td><input type="number" name="price" placeholder="price" required></td>
                      <td><label>Bonus Point:</label></td>
                      <td><input type="number" name="bonus_point" placeholder="point" required></td>
                    </tr>
                    <tr>
                      <td><label>Service Detail</label></td>
                      <td><textarea name="detail" required></textarea></td>
                    </tr>
                  </table>
                </div>
                <div class="modal-footer">
                <button class="button is-primary" type"submit">Create</button>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal -->
  <div class="modal fade" id="promoModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Promotion Setting</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <form class="form-horizontal" action="/promotion" method = "post" >
              {{ csrf_field() }}
              <table>
                <tr>
                  </td><label>Course Name:</label><td>
                  <td>
                    <span class="select">
                      <select id='course_id' name="course_id">
                    </select>
                    </span>
                  </td>
                </tr>

                <tr>
                  <td><label>Discount:</label></td>
                  <td>
                    <input class="input is-medium" type="number" name="discount" placeholder="discount %" required>
                  </td>
                </tr>

                <tr>
                  <td><label>Promotion Start:</label></td>
                  <td>
                    <input class="input is-medium" type="date" name="date_start" required>
                  </td>
                  <td><label>Promotion End:</label></td>
                  <td>
                    <input class="input is-medium" type="date" name="date_end" required></td>
                </tr>
              </table>
          <!-- <p>Some text in the modal.</p> -->
        </div>
        <div class="modal-footer">
            <button class="button is-primary" type="submit">Apply</button>
        </div>
      </div>
    </div>
  </div>
</div>

    </form>


 <!-- Modal -->
    <div class="modal fade" id="voucherModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Get Voucher</h4>
          </div>
          <div class="modal-body">
            <!-- <h1>Get Course</h1> -->
            <div class="form-group">
            <form action="/get-voucher" method = "post">
              {{ csrf_field() }}

                <table>
                  <tr>
                    <td><label>Voucher Name: </label></td>
                    <td>
                      <span class="select">
                        <select name="course_id">
                          @foreach ($services as $service)
                            @if ($service->status == '1' && $service->type_id == '2')
                              <option value={{$service->id}}>{{$service->name}}</option>
                            @endif
                          @endforeach
                        </select>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><label>User e-mail:</label></td>
                    <td>
                      <!-- <input list="browsers" name="user_id"> -->
                          <!-- <datalist id="browsers"> -->
                          <span class="select">
                          <select name="user_id">
                            @foreach ($users as $user)
                              @if ($user->role_id == '2')
                                <option value={{$user->id}}>{{$user->email}}</option>
                              @endif
                            @endforeach
                          </select>
                        </span>
                            <!-- <option value="Internet Explorer">
                            <option value="Firefox">
                            <option value="Chrome">
                            <option value="Opera">
                            <option value="Safari"> -->
                          <!-- </datalist> -->
                        </td>
                      </tr>
                      <tr>
                     <td><label> Date: </lebel></td>
                    <td><input type="date" name="date_purchase" required></td>
                   </tr>
                </table>
          </div>
          <div class="modal-footer">
              <button  class="btn btn-default" id="myBtn" type="submit">Submit</button>
              <button class="btn btn-default" type="reset">Clear</button>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>



<!-- Modal -->
    <div class="modal fade" id="courseModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Get Course</h4>
          </div>
          <div class="modal-body">
            <!-- <h1>Get Course</h1> -->
            <div class="form-group">
            <form action="/get-course" method = "post">
              {{ csrf_field() }}

              <!-- <label for="">Service Type: </label>
                <span class="select">
                    <select id="first_box" name="Select_id">
                      <option value="1">coures</option>
                      <option value="2">vorcher</option>
                    </select>
                </span> -->

                <table>
                  <tr>
                    <td><label>Course Name: </label></td>
                    <td>
                      <span class="select">
                        <select name="course_id">
                          @foreach ($services as $service)
                            @if ($service->status == '1' && $service->type_id == '1')
                              <option value={{$service->id}}>{{$service->name}}</option>
                            @endif
                          @endforeach
                        </select>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><label>User e-mail:</label></td>
                    <td>
                      <!-- <input list="browsers" name="user_id"> -->
                          <!-- <datalist id="browsers"> -->
                          <span class="select">
                          <select name="user_id">
                            @foreach ($users as $user)
                              @if ($user->role_id == '2')
                                <option value={{$user->id}}>{{$user->email}}</option>
                              @endif
                            @endforeach
                          </select>
                        </span>
                        </td>
                      </tr>
                      <tr>
                     <td><label> Date: </lebel></td>
                    <td><input type="date" name="date_purchase"></td>
                   </tr>
                </table>
            </div>
            <div class="modal-footer">
              <button  class="btn btn-default" id="myBtn" type="submit">Submit</button>
              <button class="btn btn-default" type="reset">Clear</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>



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
                }
            })
        };
    </script>

</body>
</html>
