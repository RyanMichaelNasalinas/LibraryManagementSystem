<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-secondary" id="sidebar-wrapper">
      <div class="sidebar-heading text-center">LMS</div>
        <div class="list-group list-group-flush">
          <a href="studentinfo.php" class="list-group-item list-group-item-action bg-secondary">Students Info</a>
          <a href="#" class="list-group-item list-group-item-action bg-secondary">Add Books</a>
          <a href="#" class="list-group-item list-group-item-action bg-secondary">Books Details</a>
          <a href="#" class="list-group-item list-group-item-action bg-secondary">Books Issued</a>
          <a href="#" class="list-group-item list-group-item-action bg-secondary">Books To Return</a>
          <a href="#" class="list-group-item list-group-item-action bg-secondary">All Students with Books</a>
          <a href="#" class="list-group-item list-group-item-action bg-secondary">Send Message</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <?= $_SESSION['username']; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <!-- <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>