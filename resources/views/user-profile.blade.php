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
                    <td>{{ Auth::user()->id }}</td>
                      <td>{{ Auth::user()->firstname }}</td>
                      <td>{{ Auth::user()->lastname }}</td>
                      <td>{{ Auth::user()->email }}</td>
                      <td>{{ Auth::user()->point }}</td>
                  </tr>
              </tbody>
          </table>
          <table>
            <thead>
                <tr>
                    <th>Course_name</th>
                    <th>Course_detail</th>
                    <th>Date_purchase</th>
                </tr>
            </thead>
            <tbody>
                  @foreach ($history as $d)
                  <tr>
                      <td>{{ $d->name }}</td>
                      <td>{{ $d->detail }}</td>
                      <td>{{ $d->date_purchase }}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
  </body>
</html>
