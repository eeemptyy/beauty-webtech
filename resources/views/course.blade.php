<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Course</title>

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
              Service
          </div>


            <div class="form-group">
              <form class="form-horizontal" action="/course" method = "post" >
                {{ csrf_field() }}
                <div class="tile ">
                  <div class="tile is-parent is-vertical is-flex-widescreen">
                    <article class="tile is-child notification is-warning">

                      <label class="label">Service Name</label>
                          <input class="input is-medium" type="text" name="name" placeholder="name">

                      <label class="label">Service Detail</label>
                          <input class="input is-medium" type="text" name="detail" placeholder="detail">

                      <label class="label">Service Price</label>
                          <input class="input is-medium" type="number" name="price" placeholder="price">

                      <label class="label">Bonus Point</label>
                          <input class="input is-medium" type="number" name="bonus_point" placeholder="point">

                      <div class="tile is-parent is-horizontal is-flex-widescreen">

                          <div class="column">
                            <label class="label">Status</label>
                              <span class="select">
                                <select name="status">
                                  <option>0</option>
                                  <option>1</option>
                                </select>
                              </span>
                          </div>
                          <div class="column">
                            <label class="label">Service Type</label>
                                <span class="select">
                                  <select name="type_id">
                                    <option>1</option>
                                      <option>2</option>
                                    </select>
                                  </span>
                            </div>
                          <div class="column">
                              <label class="label">Category</label>
                                  <span class="select">
                                    <select name="category">
                                      <option>ทรีทเมนท์ผิวหน้า</option>
                                      <option>ทรีทเมนท์ผิวกาย</option>
                                      <option>กระชับสัดส่วน</option>
                                      <option>เลเซอร์</option>
                                      <option>ปรับรูปหน้า</option>
                                    </select>
                                  </span>
                          </div>
                      </div>
                      <label class="label">Service Picture</label>
                        <input class="input is-medium" type="text" name="pic_path" placeholder="picture">
                 </article>
                </div>
            </div>
                <button class="button is-primary" type="submit">ADD Service</button>
          </form>
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
