<!-- Modal -->
    <div class="modal fade" id="courseModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Get Course</h4>
          </div>
          <div class="modal-body">
            <!-- <h1>Get Course</h1> -->
            <div class="form-group">
            <form action="/get-course" method = "post">
              {{ csrf_field() }}

              <!-- <label for="">Service Type: </label>
                <span class="select">
                    <select id="first_box" name="Select_id">
                      <option value="1">coures</option>
                      <option value="2">vorcher</option>
                    </select>
                </span> -->

                <table>
                  <tr>
                    <td><label>Course Name: </label></td>
                    <td>
                      <span class="select">
                        <select name="course_id" id="course_id2">
                          @foreach ($services as $service)
                            @if ($service->status == '1' && $service->type_id == '1')
                              <option value={{$service->id}}>{{$service->name}}</option>
                            @endif
                          @endforeach
                        </select>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><label>User e-mail:</label></td>
                    <td>
                      <!-- <input list="browsers" name="user_id"> -->
                          <!-- <datalist id="browsers"> -->
                          <span class="select">
                          <select name="user_id">
                            @foreach ($users as $user)
                              @if ($user->role_id == '2')
                                <option value={{$user->id}}>{{$user->email}}</option>
                              @endif
                            @endforeach
                          </select>
                        </span>
                        </td>
                      </tr>
                      <tr>
                     <td><label> Date: </lebel></td>
                    <td><input type="date" name="date_purchase"></td>
                   </tr>
                </table>
            </div>
            <div class="modal-footer">
              <button  class="btn btn-default" id="myBtn" type="submit">Submit</button>
              <button class="btn btn-default" type="reset">Clear</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
