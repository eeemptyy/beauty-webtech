@extends('layouts.app')
@section('content')
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

    table{
      margin:10px;
      border:1px black;
    }
    td ,th{
      padding:10px;
    }
    tr{
      padding:10px;
    }
    h3{
      text-align: center;
    }
    </style>
  </head>
  <body style="font-family:Kanit;">
    <div class="container">
      <h3 style="text-align:center; margin-top:30px;">Profile</h3>
      <div class='column is-three-quarters' style="border:1px solid black; margin:auto; margin-top:20px; margin-bottom:20px; background-color:white;">

      <h3 style="text-align:center;">Firstname : {{Auth::user()->firstname}}</h3>
      <h3 style="text-align:center;">Lastname : {{Auth::user()->lastname}}</h3>
      <h3 style="text-align:center;">Email : {{Auth::user()->email}}</h3>
      <h3 style="text-align:center;">Point : {{Auth::user()->point}}</h3>

      </div>
    <h3 style="text-align:center; margin-top:30px;">History</h3>
          <table class='table' style='width:70%; margin:auto;margin-bottom:17%;'>
            <thead>
                <tr>
                    <th>Course name</th>
                    <th>Course detail</th>
                    <th>Date purchase</th>
                </tr>
            </thead>
            <tbody>
                  @foreach ($history as $d)
                  <tr class="danger">
                      <td>{{ $d->name }}</td>
                      <td>{{ $d->detail }}</td>
                      <td>{{ $d->date_purchase }}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>

  </body>
</html>
@endsection
