
<?php
session_start();
include_once('./db_connect.php');
?>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
    <i class="fa fa-database" aria-hidden="true"></i>
    &nbsp BARANGAY <span class="brand-text font-weight-danger"> <code><b>PROFILING</b></code></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./mainindex/logo/exelogo.png" class="img-circle" width="200"></a></p>
        </div>
        <div class="info">
          <a href="admin_profile.php" class="d-block"><?php echo $_SESSION['email']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class=""></i>
              </p>
            </a>
            
          </li>
  
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
              <p>
                
                &nbsp PROFILING
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
                
               

                  <li class="nav-item">
                <a href="barangay_profiling.php" class="nav-link">
                  <i class="fa fa-address-book text-danger nav-icon"></i>
                  <p>PROFILING</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="barangay_clearance.php" class="nav-link">
                  <i class="fa fa-envelope text-danger nav-icon"></i>
                  <p>BARANGAY CLEARANCE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="barangay_id.php" class="nav-link">
                  <i class="fa fa-id-card text-danger nav-icon"></i>
                  <p>BARANGAY ID</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="barangay_certification.php" class="nav-link">
                  <i class="fa fa-folder text-danger nav-icon"></i>
                  <p>CERTIFICATION</p>
                </a>
              </li>
                </ul>
              </li>
          <!--
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-globe" aria-hidden="true"></i>
              <p>
              &nbsp WEB PAGES
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>HOME</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>GALLERY</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ABOUT US</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CONTACT US</p>
                </a>
              </li>
            </ul>
          </li>
        -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
              <p>
                
                &nbsp USERS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin_profile.php" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                  <p>
                    ADMIN TYPE
                  </p>
                </a>
                
                 
                </ul>
              </li>
             
        </ul>
      </nav>

    </div>

  </aside>