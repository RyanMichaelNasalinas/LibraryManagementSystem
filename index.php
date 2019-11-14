<?php include "includes/header.php"; ?>

<?php 
    if(isset($_POST['user_type']) && $_POST['user_type'] === 'librarian') {
        
        if(isset($_POST['login'])) {
            $username = $validation->val_trim($_POST['username']);
            $password = $validation->val_trim($_POST['password']);
            $login_lib = $login->librarian_login($username,$password);

            if ($login_lib) {
                header("location: dashboard.php");
            } elseif(Validation::val_empty($username) && Validation::val_empty($password)) {
                $validation->error_msg = 'Username and Password should not be empty';
            }
        }     
    } elseif(isset($_POST['user_type']) && $_POST['user_type'] === 'user') {

           if(isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($login->student_login($username,$password)) {
                header("location: dashboard.php");
            } elseif(Validation::val_empty($username) && Validation::val_empty($password)) {
                $validation->error_msg = 'Username and Password should not be empty';
            }
        }
    } elseif(isset($_POST['user_type']) && empty($_POST['user_type'])) {
        $validation->error_msg = 'You must select the user type';
    } 
    
    
?>

<div class="container" id="login-container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-6">
            <div class="card text-white bg-primary mb-3 login-form">
                <div class="card-header text-center">Library Management System</div>
                  
                    <div class="card-body">
                        <h4 class="card-title text-center">Input Credentials</h4>        
                        <form action="" method="POST">    
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group text-center">
                                        <label>Login As:</label>
                                        <select name="user_type" class="form-control">
                                            <option value="">Select Usertype</option>
                                            <option value="user">User</option>
                                            <option value="librarian">Librarian</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

        
                            <div class="form-group text-center mt-2">
                                <input type="submit" value="Login" name="login" class="btn-secondary btn-lg">
                            </div>
                        </form>
                    </div>
                    <!-- Error Message -->
                    <?php if(isset($validation->error_msg)): ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                            <?php echo $validation->error_msg; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            </div>
                        </div>
                    </div>
                        
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>