<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container">
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create Service</button>
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Create Service</h4>
            </div>
            <div class="modal-body">
              <!-- <p>Some text in the modal.</p> -->
              <div class="form-group" style="width:200%">
                <form class="form-horizontal" action="/course" method = "post">
                  {{ csrf_field() }}
                  <table>
                    <tr>
                      <td><label>Service Name: </label></td>
                      <td><input type="text" name="name" placeholder="name" required></td>
                    </tr>
                    <tr>
                      <td><label>Status: </label></td>
                      <td>
                        <select name="status">
                          <option value="1">active</option>
                          <option value="0">unactive</option>
                        </select>
                      </td>
                      <td><label>Service Type:</label></td>
                      <td>
                        <select name="type_id">
                          <option value="1">course</option>
                          <option value="2">vorcher</option>
                        </select>
                      </td>
                      </tr>
                      <tr>
                        <td><label>Category:</label></td>
                        <td>
                          <select name="category">
                            <option>ทรีทเมนท์ผิวหน้า</option>
                            <option>ทรีทเมนท์ผิวกาย</option>
                            <option>กระชับสัดส่วน</option>
                            <option>เลเซอร์</option>
                            <option>ปรับรูปหน้า</option>
                          </select>
                        </td>
                        <td><label>Service Picture:</label></td>
                        <td><input type="file" name="pic_path" placeholder="picture" required></td>
                    </tr>
                    <tr>
                      <td><label>Service Price:</label></td>
                      <td><input type="number" name="price" placeholder="price" required></td>
                      <td><label>Bonus Point:</label></td>
                      <td><input type="number" name="bonus_point" placeholder="point" required></td>
                    </tr>
                    <tr>
                      <td><label>Service Detail</label></td>
                      <td><textarea name="detail" required></textarea></td>
                    </tr>
                  </table>
                </div>
                <div class="modal-footer">
                <button class="btn btn-default" type"submit">Create</button>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Promotion Setting</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Promotion Settingr</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <form class="form-horizontal" action="/promotion" method = "post" >
              {{ csrf_field() }}
              <table>
                <tr>
                  </td><label>Course Name:</label><td>
                  <td>
                    <span class="select">
                      <select name="course_id">
                      @foreach ($courses as $course)
                      @if ($course->status == '1' && $course->type_id == '1')
                          <option value={{$course->id}}>{{$course->name}}</option>
                      @endif
                      @endforeach
                    </select>
                    </span>
                  </td>
                </tr>
                
                <tr>
                  <td><label>Discount:</label></td>
                  <td>
                    <input class="input is-medium" type="number" name="discount" placeholder="discount %" required>
                  </td>
                </tr>

                <tr>
                  <td><label>Promotion Start:</label></td>
                  <td>
                    <input class="input is-medium" type="date" name="date_start" required>
                  </td>
                  <td><label>Promotion Start:</label></td>
                  <td>
                    <input class="input is-medium" type="date" name="date_end" required></td>
                </tr>
              </table>
          <!-- <p>Some text in the modal.</p> -->
        </div>
        <div class="modal-footer">
            <button class="button is-primary" type="submit">Apply</button>
        </div>
      </div>
    </div>
  </div>
</div>

    </form>
  </div>

  </body>
</html>
