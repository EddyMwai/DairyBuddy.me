<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dairy Buddy - Milk Page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/dairy_logo.png" />
    <style type="text/css">
      
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="background: linear-gradient(to right, #59DF0B 0%, #226E8A 100%);">
          <a class="navbar-brand brand-logo" href="#" style="color: white; font-weight: bold;"><img src="assets/images/dairy_logo.png" alt="logo" style="width: 30px;" /> Dairy Buddy</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>

                </a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link" id="profileDropdown" href="<?php echo e(route('profile')); ?>" aria-expanded="false">
<div class="nav-profile-img">
    <img src="user_images/<?php echo e($userdetails->profile_photo_path); ?>" alt="image">
</div>
<div class="nav-profile-text">
    <p class="mb-1 text-black"><?php echo e($userdetails->name); ?></p>
</div>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
                   <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/home')); ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-speedometer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="<?php echo e(url('/statistics1')); ?>"  aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Statistics</span>
                <i class="mdi mdi-chart-bar menu-icon" style="color: white;"></i>
              </a>
            </li>
<li class="nav-item" style="background: black;">
              <a class="nav-link" href="#icons" data-bs-toggle="collapse" aria-expanded="true" aria-controls="icons">
                <span class="menu-title">Reports</span>
                <i class="mdi mdi-file-document menu-icon"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/milk1')); ?>">Milk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/exs1')); ?>">Extension Services</a>
                  </li>                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/cart1')); ?>"  aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">My Cart</span>
                <i class="mdi mdi-cart menu-icon" style="color: white;"></i>
              </a>
            </li> 
                        <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/orders1')); ?>"  aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Manage Orders</span>
                <i class="mdi mdi-cash menu-icon" style="color: white;"></i>
              </a>
            </li>           
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('profile')); ?>">
                <span class="menu-title">Account</span>
                <i class="mdi mdi-account-circle menu-icon"></i>
              </a>
            </li>
            <form action="<?php echo e(url('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <button style="background: transparent; border:0px;" type="submit"><span class="menu-title">Logout</span></button>
                <i class="mdi mdi-power menu-icon"></i>
              </a>
            </li>
            </form>                       
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> <a href="<?php echo e(url('/home')); ?>" style="color: black;text-decoration: none;">Dashboard</a> / Milk Records
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Available Milk Records <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row" id="dash">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Milk Records</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Farmer </th>
                          <th> Quality </th>
                          <th> Quantity </th>
                          <th> Date & Time </th>
                          <th> Price </th>
                          <th> </th>                                                    
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php $__currentLoopData = $milk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $milks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <td> <?php echo e($milks->id); ?> </td>
                          <td> <?php echo e($milks->quality); ?> </td>
                          <td> <?php echo e($milks->quantity); ?> </td>
                          <td> <?php echo e($milks->date); ?> at <?php echo e($milks->time); ?> </td>
                          <td> <?php echo e($milks->payable_amount); ?> </td>
                          <td> <a href="<?php echo e(url('destroyMilk',$milks->id)); ?>" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete This Milk Record ?')">DELETE</a></td> 
                        </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
          </div>
          <!-- </div> -->
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">All Rights Reserved by 150098 and 150462. &copy; 2024.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH D:\Documents\Strathmore University\Systems\Current\Milk Production Management\Milk_Production_Management\resources\views/farmer/milk.blade.php ENDPATH**/ ?>