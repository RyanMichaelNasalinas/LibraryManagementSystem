<!-- View Data -->
<div class="modal fade bd-example-modal-lg" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Student Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="employee_detail">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- End View Data -->

<!-- Add New Data -->
<div class="modal fade bd-example-modal-lg" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="post" id="insert_form">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname">
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email"> 
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="number" name="contact_num" id="contact_num" class="form-control" placeholder="Contact Number"> 
                </div>
                <div class="form-group">
                <label>Semester</label>
                    <select name="semester" id="semester" class="form-control">
                        <option value="">Select Details</option>
                        <?php for($i = 1; $i < 4; $i++): ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Enrollment Number</label>
                    <input type="number" name="enrollment_num" id="enrollment_num" class="form-control">
                </div>
                 <div class="form-group">
                    <label>Student Status</label>
                    <select name="student_status" id="student_status" class="form-control">
                            <option value="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                    </select>
                </div>
                    <div class="form-group">
                    <label>Student Status</label>
                    <select name="user_level" id="student_status" class="form-control">
                            <option value="">Select Userlevel</option>
                            <option value="1">Administrator</option>
                            <option value="2">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Insert" id="insert" name="insert" class="btn btn-success">
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- /End Add New Data -->