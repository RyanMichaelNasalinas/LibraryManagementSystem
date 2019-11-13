<?php include "includes/header.php"; ?>

<?php 

    $msg = '';
    if(isset($_POST['user_type']) && $_POST['user_type'] === 'librarian') {
        if(isset($_POST['login'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            if($login->librarian_login($username,$password)) {
                header("location: dashboard.php");
            }
            } else {
            $msg = "You are not a librarian";
        }
    } 
?>



<div class="container" id="login-container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-6">
            <div class="card text-white bg-primary mb-3 login-form">

            <div class="msg">
                <?php echo $msg; ?>
            </div>
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
            </div>
        </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>