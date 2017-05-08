<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Promotion Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            /*.links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }*/

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="content">
          <div class="title m-b-md">
              Promotion Service
          </div>


            <div class="form-group">
              <form class="form-horizontal" action="/promotion" method = "post" >
                {{ csrf_field() }}
                <div class="tile ">
                  <div class="tile is-parent is-vertical is-flex-widescreen">
                    <article class="tile is-child notification is-warning">

                      <div class="tile is-parent is-horizontal is-flex-widescreen">


                          <div class="column">
                              <label class="label">Course Name</label>

                                  <span class="select">

                                    <select name="course_id">
                                      @foreach ($courses as $course)
                                      @if ($course->status == '1' && $course->type_id == '1')
                                          <option value={{$course->id}}>{{$course->name}}</option>
                                      @endif
                                      @endforeach
                                    </select>
                                  </span>
                          </div>
                      </div>

                      <label class="label">Discount</label>
                        <input class="input is-medium" type="number" name="discount" placeholder="discount %" required>

                      <label class="label">Promotion Start:</label>
                        <input class="input is-medium" type="date" name="date_start" required>

                      <label class="label">Promotion End:</label>
                          <input class="input is-medium" type="date" name="date_end" required>

                 </article>
                </div>
            </div>
                <button class="button is-primary" type="submit">ADD Promotion</button>
          </form>
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
