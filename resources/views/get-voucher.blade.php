<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Voucher</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .modal {
      /* The Modal (background) */
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
  </head>
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container">
    <h2>Buy Voucher</h2>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy Voucher</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
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

              <!-- <label for="">Service Type: </label>
                <span class="select">
                    <select id="first_box" name="Select_id">
                      <option value="1">coures</option>
                      <option value="2">vorcher</option>
                    </select>
                </span> -->

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

                <!-- <button id="myBtn" type="submit">Submit</button> -->
                <!-- <input type="submit" value="Submit"> -->
                <!-- <button class="" type="reset">Clear</button> -->
                <!-- <input type="reset" value="Clear"> -->
                <!-- <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                  <div class="w3-container">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <p>Some text. Some text. Some text.</p>
                    <p>Some text. Some text. Some text.</p>
                  </div>
                </div>
              </div> -->
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
  </div>
  </body>
</html>
