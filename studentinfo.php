<?php
    include "includes/header.php"; 
    include "includes/navigation.php";
    
    if(!Validation::val_session($_SESSION['username'])){ 
        header("Location: index.php");
    }
?>

      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
              <h1 class="mt-4 text-center">All Students Info</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
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
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
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