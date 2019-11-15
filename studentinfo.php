<?php
    include "includes/header.php"; 
    include "includes/navigation.php";
    
    if(!Validation::val_session($_SESSION['username'])){ 
        header("Location: index.php");
    }
?>

      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12">
              <h1 class="mt-4 text-center">All Students Info</h1>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Gender</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Sem</th>
                        <th>Student Status</th>
                        <th>Enrollment #</th>
                        <th>User Level</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $crud = $crud->displayData("student");
                ?>
                <?php foreach($crud as $row): ?>
                    <tr>
                        <td><?= $row['firstname']; ?></td>
                        <td><?= $row['lastname']; ?></td>
                        <td><?= $row['gender']; ?></td>
                        <td><?= $row['username']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['contact']; ?></td>
                        <td><?= $row['sem']; ?></td>
                        <td><?= $row['enrollment_num']; ?></td>
                        <td><?= $row['std_status']; ?></td>
                        <td><?= $row['user_level']; ?></td>
                        <td><a href="#" class="btn btn-success">Edit</a></td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
       </div>
        </div>
      </div>
      
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->






<?php include "includes/footer.php"; ?>