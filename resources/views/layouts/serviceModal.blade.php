<!-- Modal -->
      <div class="modal fade" id="serviceModal" role="dialog">
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
                <button class="button is-primary" type"submit">Create</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
