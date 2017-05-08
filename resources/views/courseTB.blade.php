@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin-top:50px;margin-bottom:27%;">
            <div class="panel panel-default">
                <div class="panel-heading">All Courses</div>
              <table>
                <tr></tr>
                <table class="table">
                <tr>
                  <td>ID</td>
                  <td>Course Name</td>
                  <td>Detail</td>
                  <td>Price</td>
                  <td>Bonus Point</td>
                  <td>Catagory</td>
                </tr>
                  @foreach ($course as $d)
                <tr>
                  <td>{{ $d->id }}</td>
                  <td>{{ $d->name }}</td>
                  <td>{{ $d->detail }}</td>
                  <td>{{ $d->price }}</td>
                  <td>{{ $d->bonus_point }}</td>
                  <td>{{ $d->category }}</td>

                </tr>
                @endforeach

              </table>
            </div>
        </div>
    </div>
</div>
@endsection
