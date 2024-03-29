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
                    <div class="float-right mb-3 mr-3">
                        <button type="button" name="age" id="add" data-toggle="modal" data-target="#addDataModal" class="btn btn-warning">Add</button>
                    </div>
                
            <div class="table-responsive" id="student_table">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th colspan="3">Actions</th>
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
                            <td><input type="button" value="View" name="view" class="btn btn-info btn-sm view_data" id="<?= $row['id']; ?>"></td>
                            <td><input type="button" value="Edit" name="edit" class="btn btn-success btn-sm edit_data" id="<?= $row['id']; ?>"></td>
                            <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
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


 <!-- Modal -->
<?php include "includes/modal.php"; ?>
<!-- /Modal File -->

<?php include "includes/footer.php"; ?>