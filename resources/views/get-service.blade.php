<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Service</title>
  </head>
  <body>
    <div class="form-group" >
    <form action="/get-service" method = "post">
      {{ csrf_field() }}
      <label for="">Service Type: </label>
      <span class="select">
          <select id="type_id" name="type_id" >
            <option value="1">coures</option>
            <option value="2">vorcher</option>
          </select>
      </span>

        <label>Service Name: </label>
        <span class="select">
            <select name="course_id">
              @foreach ($services as $service)
                @if ($service->status == '1')
                  <option value={{$service->id}}>{{$service->name}}</option>
                @endif
              @endforeach
            </select>
        </span>

        <label for="">User e-mail: </label>
        <!-- <input type="email" name="email" value="" placeholder="Email Address"> -->
        <!-- <label for="">Service Name: </label> -->
          <span class="select">
            <select name="user_id">
              @foreach ($users as $user)
                @if ($user->role_id == '2')
                  <option value={{$user->id}}>{{$user->email}}</option>
                <!-- @endif -->
              @endforeach

            </select>
          </span>

        <label> Date: </lebel>
          <input type="date" name="date_purchase">

        <button class="" type="submit">Submit</button>
        <!-- <input type="submit" value="Submit"> -->
        <button class="" type="reset">Clear</button>
        <!-- <input type="reset" value="Clear"> -->
    </form>
  </div>
  </body>
</html>
