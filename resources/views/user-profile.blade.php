<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table, td ,th{
        border: 1px solid black;
      }
      td,td{
        padding:10px;
      }
    </style>
  </head>
  <body>
    <table class='table'>


    </table>
    <style media="screen">
      table, td ,th{
        border: 1px solid black;
      }
      td,td{
        padding:10px;
      }
    </style>
  </head>
  <body>
      <table class="table">
              <thead>
                  <tr>
                    <th>ID</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                      <th>Point</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>{{ $id }}</td>
                      <td>{{ $firstname }}</td>
                      <td>{{ $lastname }}</td>
                      <td>{{ $email }}</td>
                      <td>{{ $point }}</td>
                  </tr>
              </tbody>
          </table>
          <table>
            <thead>
                <tr>
                    <th>User_id</th>
                    <th>Course_id</th>
                    <th>Date_purchase</th>
                </tr>
            </thead>
            <tbody>
                  @foreach ($history as $d)
                  <tr>
                      <td>{{ $d->user_id }}</td>
                      <td>{{ $d->course_id }}</td>
                      <td>{{ $d->date_purchase }}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
<<<<<<< HEAD
          <div class="input">
          <input type="text" name="input_name" value="firstname">
          <button type="submit" name="edit">edit</button>
          <form action="edit" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <input type="hidden" name="id" value="">
            <input type="text" name="name" value="">
            <input type="submit" value="สมัครสมาชิก">
          </form>
=======
>>>>>>> master
  </body>
</html>
