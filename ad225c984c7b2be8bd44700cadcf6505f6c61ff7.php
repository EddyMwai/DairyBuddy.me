<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="UTF-8">
    <title>Payroll Pro - Administrator Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.min.js"></script>
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

  </head>
  <style type="text/css">

    td{
    color: black;
  }

  </style>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo"><b>Payroll</b>Pro</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
 <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/administrator.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Administrator</p>

              <a href="#"><i class="fa fa-circle text-success"></i></a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="#" onclick="toggleDivs(0)"><i class="fa fa-dashboard"></i> View Dashboard</a></li>
            <!-- <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#" onclick="toggleDivs(0)"><i class="fa fa-dashboard"></i> View Dashboard</a></li>
                <li><a href="#"><i class="fa fa-group"></i> View Users</a></li>
                <li><a href="#"><i class="fa fa-building"></i> View Companies</a></li>
                <li><a href="#"><i class="fa fa-home"></i> View Branches</a></li>
                <li><a href="#"><i class="fa fa-book"></i> View Leave Requests</a></li>
                <li><a href="#"><i class="fa fa-comments-o"></i> View Feedback</a></li>
                <li><a href="#"><i class="fa fa-money"></i> View Payrolls</a></li>
                <li><a href="#" onclick="toggleDivs(1)"><i class="fa fa-clock-o"></i> View Timings</a></li>                
              </ul>
            </li> -->
            <li><a href="#" onclick="toggleDivs(1)"><i class="fa fa-clock-o"></i> View Timings</a></li>  
                        <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Employee Data</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!-- <li><a href="#" onclick="toggleDivs(2)"><i class="fa fa-dashboard"></i> View Employees</a></li> -->
                <li><a href="#" onclick="toggleDivs(3)"><i class="fa fa-home"></i> View Branches</a></li>
                <li><a href="#" onclick="toggleDivs(4)"><i class="fa fa-book"></i> View Employees</a></li>
                <li><a href="#" onclick="toggleDivs(5)"><i class="fa fa-comments-o"></i> View Memos</a></li>              
              </ul>
            </li>
            <li class="header">ACTIONS</li>
            <li><a href="#"><i class="fa fa-user text-info"></i> My Profile</a></li>            
            <!-- <li><a href="#"><i class="fa fa-power-off text-danger"></i> Logout</a></li> -->
            <li><form action="<?php echo e(url('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                               <i class="fa fa-power-off text-danger"></i>  <button style="color: white; text-align: center;" type="submit"> Logout </button>
                            </form></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div id="start">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>Active Payrolls</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $activeCount; ?></h3>
                  <p>Working Employees</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clock"></i>
                </div>
                <a href="#" onclick="toggleDivs(0);" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $employeeCount; ?></h3>
                  <p>Employee Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" onclick="toggleDivs(2);" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $branchesCount; ?></h3>
                  <p>Branch Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-home"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="toggleDivs(3);">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">

<div id="dashboard" style="width: 100%;">
  <div class="" style="width: 100%; text-align: center;">
    <label style="font-weight: bold;">Bar Chart for Time Spent</label>
  <canvas id="timeSpentChart" width="500" height="200"></canvas>
  <br>
  <br>
</div>
<div class="" style="width: 50%; text-align: center; position: relative; left: 250px;">
  <label style="font-weight: bold;">Pie Chart for Daily Earnings</label>
<canvas id="dailyEarningsChart" width="300" height="200"></canvas>
<br>
<br>
</div>
</div>

            <div id="timings" style="display: none;">
<!-- Timings -->
                   <div class="box box-solid bg-orange">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">List of Timings</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <input style="color: black;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                  <label>Start Date:</label> -  <input style="color: black;" type="text" id="myInput1" onkeyup="myFunction1()">
                  <label>End Date:</label> -  <input style="color: black;" type="text" id="myInput2" onkeyup="myFunction2()">
<hr/>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Employee ID</th>
                        <th>Fullname</th>
                        <th>Phone Number</th>                        
                        <th>Pay Branch</th>
                        <th>Designation</th>
                        <th>Clock-In Time</th>
                        <th>Clock-Out Time</th>
                        <th>Status</th>
                        <th>Time Spent</th>
                        <th>Daily Earnings</th>
                        <!-- <th>Overtime</th> -->
                      </tr>
                    </thead>
                    <tbody>
<?php $__currentLoopData = $timings_report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $completed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                          
<tr>  
<td><?php echo e($completed->user_id); ?></td>
<td><?php echo e($completed->user_name); ?></td>
<td><?php echo e($completed->phone_number); ?></td>
<td><?php echo e($completed->Pay_Branch); ?></td>
<td><?php echo e($completed->Designation); ?></td>
<td><?php echo e($completed->Start_Time); ?></td>
<td><?php echo e($completed->End_Time); ?></td>
<td><?php echo e($completed->Status); ?></td>
<td><?php echo e($completed->Time_Spent); ?></td>
<td><?php echo e($completed->Daily_Earnings); ?></td>
<!-- <td><?php echo e($completed->Overtime); ?></td> -->
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </tbody>
                  </table>
                </div><!-- /.box-body -->
               </div>
               <button class="custom-btn btn custom-link mt-3" id="export_button">Export to Spreadsheet</button>
             </div>

                         <div id="employ" style="display: none;">
<!-- Employees -->
                   <div class="box box-solid bg-orange">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">List of Employees</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <input style="color: black;" type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search for names..">
                  <label for="designationFilter">Filter by Designation:</label>
<select id="designationFilter" style="color: black;">
    <option value="" disabled selected>Select An Allocation Type</option>
    <option value="not-null">Allocated</option>
    <option value="null">Unallocated</option>
</select>
<hr/>
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Names</th>
                        <th>Employee No.</th>                        
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
<?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employeeA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                          
<tr>  
<td><?php echo e($employeeA->user_id); ?></td>
<td><?php echo e($employeeA->name); ?></td>
<td><?php echo e($employeeA->Employee_No); ?></td>
<td><?php echo e($employeeA->Department); ?></td>
<td><?php echo e($employeeA->Designation); ?></td>
<td><?php echo e($employeeA->Start_Date); ?></td>
<td><?php echo e($employeeA->End_Date); ?></td>
<td><?php echo e($employeeA->Type); ?></td>
<td><?php echo e($employeeA->Status); ?></td>
<!-- <td style="text-align: left; padding: 8px;"><a href="<?php echo e(url('user_edit',$employeeA->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Edit This Employee ?')">Edits</a></td> -->
<td style="text-align: left; padding: 8px;"><a href="<?php echo e(url('user_destroy',$employeeA->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Employee ?')">Delete</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </tbody>
                  </table>
                </div><!-- /.box-body -->
               <button class="custom-btn btn custom-link mt-3" onclick="printData1();">Export to PDF</button>
                               <div class="box-header">
                  <h3 class="box-title">Register An Employee</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo e(url('users_store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Fullname:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Fullname" required>
                    </div>                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone Number:</label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Your Phone Number" required>
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company ID:</label>
                      <input type="text" class="form-control" id="cname" name="Company_ID" placeholder="Enter Your Company ID">
                    </div>                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">National ID:</label>
                      <input type="text" class="form-control" id="National_ID" placeholder="Enter Your National ID" name="National_ID">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NSSF:</label>
                      <input type="text" class="form-control" id="cphone" name="NSSF" placeholder="Enter Your NSSF No.">
                    </div>
                    <div class="form-group">
                      <label>KRA PIN:</label>
                      <!-- <textarea class="form-control" rows="3" placeholder="Enter Company Description..." name="desc" id="desc"></textarea> -->
                    <input type="text" class="form-control" id="KRA_PIN" name="KRA_PIN" placeholder="Enter Your KRA PIN">  
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bank Name:</label>
                      <input type="text" class="form-control" id="cent" name="Bank_Name" placeholder="Enter Your Bank Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bank Branch:</label>
                      <input type="text" class="form-control" id="Bank_Branch" name="Bank_Branch" placeholder="Enter Your Bank Branch">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bank Account:</label>
                      <input type="text" class="form-control" id="Bank_Account" name="Bank_Account" placeholder="Enter Your Bank Account">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Department:</label>
                      <input type="text" class="form-control" id="Department" name="Department" placeholder="Enter Your Department">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address:</label>
                      <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Your Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Residential Place:</label>
                      <input type="text" class="form-control" id="Residential_Place" name="Residential_Place" placeholder="Enter Your Residential Place">
                    </div>                                                                                
                    <div class="form-group">
                      <label for="exampleInputEmail1">Start Date:</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control" name="Start_Date" min="<?php echo date('Y-m-d'); ?>" data-mask/>
                    </div>
                    </div>   
                                        <div class="form-group">
                      <label for="exampleInputEmail1">End Date:</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control" name="End_Date" min="<?php echo date('Y-m-d'); ?>" data-mask/>
                    </div>
                    </div>                      
                                     <div class="form-group">
                      <label>Designation</label>
                      <select class="form-control" required name="Designation" id="Designation">
                        <option disabled selected value="">Kindly Select A Branch ID</option>
                                     <?php
                                     $conn = new mysqli("127.0.0.1", "root", "", "payroll_system_lav");
                                      $sql = "SELECT * FROM `branches`";
                                      $all_categories = mysqli_query($conn,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                  <option value="<?php echo $category["name"];?>"><?php echo $category["name"];?></option>
                                  <?php
                                      endwhile;
                                      $conn->close();
                                  ?>
                      </select>
                    </div> 
                                     <div class="form-group">
                      <label>PAY Tax Status</label>
                      <select class="form-control" required name="PAYS_Tax_Status" id="PAYS_Tax_Status">
                        <option disabled selected value="">Kindly Select A Status</option>
                        <option value="KRA PIN">KRA PIN</option>
                        <option value="NSSF">NSSF</option>
                        <option value="NHIF">NHIF</option>                        
                      </select>
                    </div>
                                     <div class="form-group">
                      <label>Employment Type</label>
                      <select class="form-control" required name="Employee_Type" id="Employee_Type">
                        <option disabled selected value="">Kindly Select An Employment Type</option>
                        <option value="Casual">Casual</option>
                        <option value="PERMANENT">PERMANENT</option>                      
                      </select>
                    </div>                                                                                                 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password:</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Confirm Password:</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                    </div>                    
<!--                     <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div> -->
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="color: black;">Register</button>
                    <br>
                  </div>
                </form>
                                               <div class="box-header">
                  <h3 class="box-title">Allocate an Employee</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo e(url('users_relocate')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                                     <div class="form-group">
                      <label>User Details</label>
                      <select class="form-control" required name="id" id="id">
                        <option disabled selected value="">Kindly Select A User</option>
                                     <?php
                                     $conn = new mysqli("127.0.0.1", "root", "", "payroll_system_lav");
                                      $sql = "SELECT * FROM `users` WHERE `user_type` = 'Employee' AND `Designation` = ''";
                                      $all_categories = mysqli_query($conn,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                  <option value="<?php echo $category["id"];?>"><?php echo $category["name"];?></option>
                                  <?php
                                      endwhile;
                                      $conn->close();
                                  ?>
                      </select>
                    </div> 
                                     <div class="form-group">
                      <label>Designation</label>
                      <select class="form-control" required name="Designation" id="Designation">
                        <option disabled selected value="">Kindly Select A Branch ID</option>
                                     <?php
                                     $conn = new mysqli("127.0.0.1", "root", "", "payroll_system_lav");
                                      $sql = "SELECT * FROM `branches`";
                                      $all_categories = mysqli_query($conn,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                  <option value="<?php echo $category["name"];?>"><?php echo $category["name"];?></option>
                                  <?php
                                      endwhile;
                                      $conn->close();
                                  ?>
                      </select>
                    </div>                                                      
                     <div class="form-group">
                      <label for="exampleInputEmail1">Department:</label>
                      <input type="text" class="form-control" id="Department" name="Department" placeholder="Enter Your Department">
                    </div>


                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="color: black;">Allocate</button>
                    <br>
                  </div>
                </form>
             </div>
</div>
                         <div id="branches" style="display: none;">
<!-- Branches -->
                   <div class="box box-solid bg-orange">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">List of Branches</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <input style="color: black;" type="text" id="myInput" onkeyup="myFunction4()" placeholder="Search for names..">
<hr/>
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Branch ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>                        
                        <th></th>                        
                      </tr>
                    </thead>
                    <tbody>
<?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branchesA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                          
<tr>  
<td><?php echo e($branchesA->id); ?></td>
<td><?php echo e($branchesA->name); ?></td>
<td><?php echo e($branchesA->description); ?></td>
<td><?php echo e($branchesA->phone_number); ?></td>
<td><?php echo e($branchesA->email); ?></td>
<td style="text-align: left; padding: 8px;"><a href="<?php echo e(url('branch_destroy',$branchesA->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Branch ?')">Delete</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </tbody>
                  </table>
                </div><!-- /.box-body -->
               </div>
               <button class="custom-btn btn custom-link mt-3" onclick="printData2();">Export to Spreadsheet</button>
               <br>
                                               <div class="box-header">
                  <h3 class="box-title">Add A Branch</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo e(url('branch_store')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>


                     <div class="form-group">
                      <label for="exampleInputEmail1">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Branch Name">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Description:</label>
                      <input type="text" class="form-control" id="description" name="description" placeholder="Enter Your Branch Description">
                    </div>                    
                                        <div class="form-group">
                      <label for="exampleInputEmail1">Email Address:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone Number:</label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Your Phone Number" required>
                    </div>
                  <div class="box-footer">
                    <button type="submit" name="addb" class="btn btn-primary" style="color: black;">Add</button>
                    <br>
                  </div>
                </form>
             </div>

             <div id="users" style="display: none;">
<!-- Users -->

            <div class="box box-solid bg-orange">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">List of Employees</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <input style="color: black;" type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search for names..">
                  <label for="designationFilter">Filter by Designation:</label>
<select id="designationFilter" style="color: black;">
    <option value="" disabled selected>Select An Allocation Type</option>
    <option value="not-null">Allocated</option>
    <option value="null">Unallocated</option>
</select>
<hr/>
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Names</th>
                        <th>Employee No.</th>                        
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
<?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employeeA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                          
<tr>  
<td><?php echo e($employeeA->user_id); ?></td>
<td><?php echo e($employeeA->name); ?></td>
<td><?php echo e($employeeA->Employee_No); ?></td>
<td><?php echo e($employeeA->Department); ?></td>
<td><?php echo e($employeeA->Designation); ?></td>
<td><?php echo e($employeeA->Start_Date); ?></td>
<td><?php echo e($employeeA->End_Date); ?></td>
<td><?php echo e($employeeA->Type); ?></td>
<td><?php echo e($employeeA->Status); ?></td>
<!-- <td style="text-align: left; padding: 8px;"><a href="<?php echo e(url('user_edit',$employeeA->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Edit This Employee ?')">Edits</a></td> -->
<td style="text-align: left; padding: 8px;"><a href="<?php echo e(url('user_destroy',$employeeA->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Employee ?')">Delete</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </tbody>
                  </table>
                </div><!-- /.box-body -->
               <button class="custom-btn btn custom-link mt-3" onclick="printData();">Export to PDF</button>
                               <div class="box-header">
                  <h3 class="box-title">Register An Employee</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo e(url('users_store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Fullname:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Fullname" required>
                    </div>                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone Number:</label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Your Phone Number" required>
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company ID:</label>
                      <input type="text" class="form-control" id="cname" name="Company_ID" placeholder="Enter Your Company ID">
                    </div>                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">National ID:</label>
                      <input type="text" class="form-control" id="National_ID" placeholder="Enter Your National ID" name="National_ID">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NSSF:</label>
                      <input type="text" class="form-control" id="cphone" name="NSSF" placeholder="Enter Your NSSF No.">
                    </div>
                    <div class="form-group">
                      <label>KRA PIN:</label>
                      <!-- <textarea class="form-control" rows="3" placeholder="Enter Company Description..." name="desc" id="desc"></textarea> -->
                    <input type="text" class="form-control" id="KRA_PIN" name="KRA_PIN" placeholder="Enter Your KRA PIN">  
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bank Name:</label>
                      <input type="text" class="form-control" id="cent" name="Bank_Name" placeholder="Enter Your Bank Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bank Branch:</label>
                      <input type="text" class="form-control" id="Bank_Branch" name="Bank_Branch" placeholder="Enter Your Bank Branch">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bank Account:</label>
                      <input type="text" class="form-control" id="Bank_Account" name="Bank_Account" placeholder="Enter Your Bank Account">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Department:</label>
                      <input type="text" class="form-control" id="Department" name="Department" placeholder="Enter Your Department">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address:</label>
                      <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter Your Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Residential Place:</label>
                      <input type="text" class="form-control" id="Residential_Place" name="Residential_Place" placeholder="Enter Your Residential Place">
                    </div>                                                                                
                    <div class="form-group">
                      <label for="exampleInputEmail1">Start Date:</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control" name="Start_Date" min="<?php echo date('Y-m-d'); ?>" data-mask/>
                    </div>
                    </div>   
                                        <div class="form-group">
                      <label for="exampleInputEmail1">End Date:</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control" name="End_Date" min="<?php echo date('Y-m-d'); ?>" data-mask/>
                    </div>
                    </div>                      
                                     <div class="form-group">
                      <label>Designation</label>
                      <select class="form-control" required name="Designation" id="Designation">
                        <option disabled selected value="">Kindly Select A Branch ID</option>
                                     <?php
                                     $conn = new mysqli("127.0.0.1", "root", "", "payroll_system_lav");
                                      $sql = "SELECT * FROM `branches`";
                                      $all_categories = mysqli_query($conn,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                  <option value="<?php echo $category["name"];?>"><?php echo $category["name"];?></option>
                                  <?php
                                      endwhile;
                                      $conn->close();
                                  ?>
                      </select>
                    </div> 
                                     <div class="form-group">
                      <label>PAY Tax Status</label>
                      <select class="form-control" required name="PAYS_Tax_Status" id="PAYS_Tax_Status">
                        <option disabled selected value="">Kindly Select A Status</option>
                        <option value="KRA PIN">KRA PIN</option>
                        <option value="NSSF">NSSF</option>
                        <option value="NHIF">NHIF</option>                        
                      </select>
                    </div>
                                     <div class="form-group">
                      <label>Employment Type</label>
                      <select class="form-control" required name="Employee_Type" id="Employee_Type">
                        <option disabled selected value="">Kindly Select An Employment Type</option>
                        <option value="Casual">Casual</option>
                        <option value="PERMANENT">PERMANENT</option>                      
                      </select>
                    </div>                                                                                                 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password:</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Confirm Password:</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                    </div>                    
<!--                     <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div> -->
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="color: black;">Register</button>
                    <br>
                  </div>
                </form>
                                               <div class="box-header">
                  <h3 class="box-title">Allocate an Employee</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo e(url('users_relocate')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                                     <div class="form-group">
                      <label>User Details</label>
                      <select class="form-control" required name="id" id="id">
                        <option disabled selected value="">Kindly Select A User</option>
                                     <?php
                                     $conn = new mysqli("127.0.0.1", "root", "", "payroll_system_lav");
                                      $sql = "SELECT * FROM `users` WHERE `user_type` = 'Employee' AND `Designation` = ''";
                                      $all_categories = mysqli_query($conn,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                  <option value="<?php echo $category["id"];?>"><?php echo $category["name"];?></option>
                                  <?php
                                      endwhile;
                                      $conn->close();
                                  ?>
                      </select>
                    </div> 
                                     <div class="form-group">
                      <label>Designation</label>
                      <select class="form-control" required name="Designation" id="Designation">
                        <option disabled selected value="">Kindly Select A Branch ID</option>
                                     <?php
                                     $conn = new mysqli("127.0.0.1", "root", "", "payroll_system_lav");
                                      $sql = "SELECT * FROM `branches`";
                                      $all_categories = mysqli_query($conn,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                  <option value="<?php echo $category["name"];?>"><?php echo $category["name"];?></option>
                                  <?php
                                      endwhile;
                                      $conn->close();
                                  ?>
                      </select>
                    </div>                                                      
                     <div class="form-group">
                      <label for="exampleInputEmail1">Department:</label>
                      <input type="text" class="form-control" id="Department" name="Department" placeholder="Enter Your Department">
                    </div>


                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="color: black;">Allocate</button>
                    <br>
                  </div>
                </form>
             </div>

</div>

                         <div id="memosd1" style="display: none;">
<!-- Memos -->
                   <div class="box box-solid bg-orange">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">List of Memos</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <input style="color: black;" type="text" id="myInput" onkeyup="myFunction6()" placeholder="Search for names..">
<hr/>
                  <table id="example6" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Memos ID</th>
                        <th>Categories</th>
                        <th>Descirptions</th>                        
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
<?php $__currentLoopData = $memo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memoA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                          
<tr>  
<td><?php echo e($memoA->idA); ?></td>
<td><?php echo e($memoA->categories); ?>A</td>
<td><?php echo e($memoA->description); ?></td>
<td style="text-align: left; padding: 8px;"><a href="<?php echo e(url('memo_destroy',$memoA->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Employee ?')">Delete</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </tbody>
                  </table>
                </div><!-- /.box-body -->
               </div>
               <button class="custom-btn btn custom-link mt-3" id="export_button">Export to Spreadsheet</button>
                                                              <div class="box-header">
                  <h3 class="box-title">Add A Memo</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo e(url('memo_store')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>


                     <div class="form-group">
                      <label for="exampleInputEmail1">Category:</label>
                      <input type="text" class="form-control" id="category" name="category" placeholder="Enter Your Branch Name">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Description:</label>
                      <input type="text" class="form-control" id="description" name="description" placeholder="Enter Your Branch Description">
                    </div>                    

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="color: black;">Add</button>
                    <br>
                  </div>
                </form>
             </div>



            </section><!-- right col -->
          </div><!-- /.row (main row) -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; <span id="year"></span> <a href="#">Payroll Pro</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- dashboard -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- demo -->
    <script src="dist/js/demo.js" type="text/javascript"></script>

  <script type="text/javascript">
            function toggleDivs(x) {
            var dashboardDiv = document.getElementById("dashboard");
            var timingsDiv = document.getElementById("timings");
            var employeeDiv = document.getElementById("employ");//2
            var memoDiv = document.getElementById("memosd1");//5
            var branchesDiv = document.getElementById("branches");//3
            var usertpeDiv = document.getElementById("users");//4    
            if (x == 0) {
                dashboardDiv.style.display = "block";
                timingsDiv.style.display = "none";
                employeeDiv.style.display = "none";
                memoDiv.style.display = "none";
                employeeDiv.style.display = "none";   
                branchesDiv.style.display = "none";
                usertpeDiv.style.display = "none";
                console.log(x);   
            } else if (x == 1){
                dashboardDiv.style.display = "none";
                timingsDiv.style.display = "block";
                employeeDiv.style.display = "none";
                memoDiv.style.display = "none";
                employeeDiv.style.display = "none";   
                branchesDiv.style.display = "none";
                usertpeDiv.style.display = "none";
                console.log(x);   
            } else if (x == 'E'){
                dashboardDiv.style.display = "none";
                timingsDiv.style.display = "none";
                employeeDiv.style.display = "block";
                memoDiv.style.display = "none";
                employeeDiv.style.display = "none";   
                branchesDiv.style.display = "none";
                usertpeDiv.style.display = "none";
                console.log(x);   
            } else if (x == 3){
                dashboardDiv.style.display = "none";
                timingsDiv.style.display = "none";
                employeeDiv.style.display = "none";
                memoDiv.style.display = "none";
                employeeDiv.style.display = "none";   
                branchesDiv.style.display = "block";
                usertpeDiv.style.display = "none";
                console.log(x);   
            } else if (x == 4){
                dashboardDiv.style.display = "none";
                timingsDiv.style.display = "none";
                employeeDiv.style.display = "none";
                memoDiv.style.display = "none";
                employeeDiv.style.display = "none";   
                branchesDiv.style.display = "none";
                usertpeDiv.style.display = "block";
                console.log(x);   
            } else if (x == 5){
                dashboardDiv.style.display = "none";
                timingsDiv.style.display = "none";
                employeeDiv.style.display = "none";
                memoDiv.style.display = "block";
                employeeDiv.style.display = "none";   
                branchesDiv.style.display = "none";
                usertpeDiv.style.display = "none"; 
                console.log(x);  
            }
        }
  </script>

<script>
$(document).ready(function(){
    $('#designationFilter').change(function(){
        var filter = $(this).val();
        $('#example2 tbody tr').filter(function() {
            var designation = $(this).find('td').eq(4).text().trim(); // 4 is the index of the Designation column
            if (filter === "not-null") {
                $(this).toggle(designation !== "");
            } else if (filter === "null") {
                $(this).toggle(designation === "");
            } else {
                $(this).toggle(true);
            }
        });
    });
});
</script>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("example1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("example2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData1();
})  
</script>

            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("example3");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData2();
})  
</script>

            <script type="text/javascript">
function printData4()
{
   var divToPrint=document.getElementById("example4");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button3').on('click',function(){
printData4();
})  
</script>

            <script type="text/javascript">
function printData5()
{
   var divToPrint=document.getElementById("example5");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button3').on('click',function(){
printData5();
})  
</script>

            <script type="text/javascript">
function printData6()
{
   var divToPrint=document.getElementById("example6");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button3').on('click',function(){
printData6();
})  
</script>

  </script>

    <script type="text/javascript">
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
<script type="text/javascript">
function filterRows() {
  var from = $('#datefilterfrom').val();
  var to = $('#datefilterto').val();

  if (!from && !to) { // no value for from and to
    return;
  }

  console.log("Original from date:", from);
  console.log("Original to date:", to);

  from = from || '1970/01/01 00:00:00'; // default from to an old date if it is not set
  to = to || '2999/12/31 23:59:59'; // default to a far future date if it is not set

  console.log("Processed from date:", from);
  console.log("Processed to date:", to);

  var dateFrom = moment(from, "YYYY/MM/DD HH:mm:ss");
  var dateTo = moment(to, "YYYY/MM/DD HH:mm:ss");

  console.log("Moment dateFrom:", dateFrom.format("YYYY/MM/DD HH:mm:ss"));
  console.log("Moment dateTo:", dateTo.format("YYYY/MM/DD HH:mm:ss"));

  $('#example1 tr').each(function(i, tr) {
    var val = $(tr).find("td:nth-child(6)").text().trim();
    console.log("Row " + i + " date value:", val);

    if (val) {
      var dateVal = moment(val, "YYYY/MM/DD HH:mm:ss");

      if (dateVal.isValid()) {
var isVisible = dateVal.isSameOrAfter(dateFrom) && dateVal.isSameOrBefore(dateTo);
                        var visible = isVisible ? "" : "none";
                        console.log("Row " + i + " visibility:", visible, "isBetween:", isVisible);
                        $(tr).css('display', visible);
      } else {
        console.log("Row " + i + " has an invalid date.");
        $(tr).css('display', 'none'); // Hide the row if dateVal is not valid
      }
    } else {
      console.log("Row " + i + " date value is empty.");
      $(tr).css('display', 'none'); // Hide the row if val is empty
    }
  });
}

$('#datefilterfrom').on("change", filterRows);
$('#datefilterto').on("change", filterRows);
</script>

    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction3() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("example2");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction4() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  table = document.getElementById("example3");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction5() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput5");
  filter = input.value.toUpperCase();
  table = document.getElementById("example4");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction6() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput6");
  filter = input.value.toUpperCase();
  table = document.getElementById("example6");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("example1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction2() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("example1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script type="text/javascript">
  function html_table_to_excel(type)
    {
        var data = document.getElementById('example1');

        var file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

        XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

        XLSX.writeFile(file, 'Timings Report.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Time Spent Chart Data Preparation
    var timeSpentLabels = [];
    var timeSpentData = [];
    var timeSpentMap = {};
    var dailyEarningsMap = {};

    <?php foreach($timings_report as $report): ?>
        <?php
        $timeString = $report->Time_Spent;
        $timeParts = explode(':', $timeString);
        $hours = (int)$timeParts[0];
        $minutes = (int)$timeParts[1];
        $totalHours = $hours + ($minutes / 60);
        ?>
        var employeeName = "<?php echo $report->user_name; ?>";
        if (timeSpentMap[employeeName] === undefined) {
            timeSpentMap[employeeName] = <?php echo $totalHours; ?>;
        } else {
            timeSpentMap[employeeName] += <?php echo $totalHours; ?>;
        }
    <?php endforeach; ?>

    // Extracting data from the map
    for (var name in timeSpentMap) {
        timeSpentLabels.push(name);
        timeSpentData.push(timeSpentMap[name]);
    }

    // Daily Earnings Chart Data Preparation
    var dailyEarningsLabels = [];
    var dailyEarningsData = [];

    <?php foreach($timings_report as $report): ?>
        var employeeName = "<?php echo $report->user_name; ?>";
        var dailyEarnings = <?php echo $report->Daily_Earnings; ?>;
        
        if (dailyEarningsMap[employeeName] === undefined) {
            dailyEarningsMap[employeeName] = dailyEarnings;
        } else {
            dailyEarningsMap[employeeName] += dailyEarnings;
        }
    <?php endforeach; ?>

    // Extracting data from the map
    for (var name in dailyEarningsMap) {
        dailyEarningsLabels.push(name);
        dailyEarningsData.push(dailyEarningsMap[name]);
    }

    // Time Spent Chart
    var timeSpentChart = new Chart(document.getElementById('timeSpentChart'), {
        type: 'bar',
        data: {
            labels: timeSpentLabels,
            datasets: [{
                label: 'Time Spent (in hours)',
                data: timeSpentData,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Daily Earnings Chart
    var dailyEarningsChart = new Chart(document.getElementById('dailyEarningsChart'), {
        type: 'pie',
        data: {
            labels: dailyEarningsLabels,
            datasets: [{
                label: 'Daily Earnings (200 kshs. per hour)',
                data: dailyEarningsData,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    // Add more colors if needed
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    // Add more colors if needed
                ],
                borderWidth: 1
            }]
        }
    });
    });
</script>
  </body>
</html><?php /**PATH F:\Documents\Strathmore University\Systems\Current\Payroll System with Amani\Payroll_System\resources\views/admin/home.blade.php ENDPATH**/ ?>