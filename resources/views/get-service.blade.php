<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Service</title>
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
  </head>
  <body>

    <div class="form-group">

    <form action="/get-service" method = "post">
      <label for="">Service Type: </label>
      <span class="select">
          <select id="$selectId" name="Select_id">
            <option value="1">coures</option>
            <option value="2">vorcher</option>
          </select>
      </span>
      {{ csrf_field() }}
        <label>Service Name: </label>
        <span class="select">
            <select name="course_id">
              <?php
              foreach ($services as $service)
              {
                if ($service->status == '1')
                {
              ?>
                  <option value={{$service->id}}>{{$service->name}}</option>
              <?php
                }
              }
              ?>
            </select>
        </span>

        <label for="">User e-mail: </label>
        <!-- <input type="email" name="email" value="" placeholder="Email Address"> -->
        <!-- <label for="">Service Name: </label> -->
          <!-- <span class="select"> -->
            <!-- <select name="user_id"> -->
              <input list="browsers" name="user_id">
                <datalist id="browsers">
                  @foreach ($users as $user)
                    @if ($user->role_id == '2')
                      <option value={{$user->id}}>{{$user->email}}</option>
                    @endif
                  @endforeach
                  <!-- <option value="Internet Explorer">
                  <option value="Firefox">
                  <option value="Chrome">
                  <option value="Opera">
                  <option value="Safari"> -->
                </datalist>


            <!-- </select>
          </span> -->

        <label> Date: </lebel>
          <input type="date" name="date_purchase">

        <button id="myBtn" type="submit">Submit</button>
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <p>Get Service Success!</p>
          </div>
        </div>
        <!-- <input type="submit" value="Submit"> -->
        <button class="" type="reset">Clear</button>
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
    </form>
  </div>

  <script>
// Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
  <!-- <script>
  $( "select" ).change(function () {
      var str = "";
      $( "select option:selected" ).each(function() {
        str += $( this ).text() + " ";
      });
      $( "div" ).text( str );
    })
    .change();
</script> -->
  </body>
</html>
