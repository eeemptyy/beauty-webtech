<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

  </body>
</html>
