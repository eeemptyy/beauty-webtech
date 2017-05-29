    <!-- Modal -->
  <div class="modal fade" id="promoModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Promotion Setting</h4>
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
                      <select id='course_id' name="course_id">
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
                  <td><label>Promotion End:</label></td>
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
