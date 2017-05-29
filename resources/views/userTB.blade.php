@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin-top:50px;margin-bottom:27%;">
            <div class="panel panel-default">
                <div class="panel-heading">All Users</div>
              <table>
                <tr></tr>
                <table class="table">
                <tr>
                  <td>ID</td>
                  <td>Firstname</td>
                  <td>Lastname</td>
                  <td>E-mail</td>
                  <td>point</td>
                </tr>
                  @foreach ($user as $d)
                <tr>
                  <td>{{ $d->id }}</td>
                  <td>{{ $d->firstname }}</td>
                  <td>{{ $d->lastname }}</td>
                  <td>{{ $d->email }}</td>
                  <td>{{ $d->point }}</td>

                </tr>
                @endforeach

              </table>
            </div>
        </div>
    </div>
</div>
@endsection


@if (Auth::guest())
    <br/>
    asddddddddddddddd
@else
    @include('layouts.serviceModal')
    @include('layouts.promoModal')
    @include('layouts.vorcherModal')
    @include('layouts.courseModal')
@endif

