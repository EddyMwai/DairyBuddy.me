<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

  <!-- Student Functionalities
  1. Register Course.
  2. Register Graduation.
  3. Email for Dropout.
  4. View/Update Details.
  5. View Course, Graduation, Resources, & Timetable. -->

<head>
    <meta charset="utf-8">
    <title>EDU PLATFORM - Student Homepage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<style type="text/css">
        
tbody th {
  background-color: #36c;
  color: #fff;
  text-align: left;
  padding: 25px;
  border: black 2px solid;
}

tbody tr:nth-child(even) th {
  background-color: #25c;
  padding: 25px;
}
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
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
   var divToPrint=document.getElementById("printTable1");
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
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
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
function printData3()
{
   var divToPrint=document.getElementById("printTable3");
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
function printData4()
{
   var divToPrint=document.getElementById("printTable4");
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
function printData5()
{
   var divToPrint=document.getElementById("printTable5");
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
function printData6()
{
   var divToPrint=document.getElementById("printTable6");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <span class="text-primary">EDU PLATFORM</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#data" class="nav-item nav-link">Database</a>
                    <a href="#act" class="nav-item nav-link">Student Actions</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
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
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">EDU PLATFORM</h4>
                <h1 class="display-3 font-weight-bold text-white">Welcome Student!</h1>
                <p class="text-white mb-4">An easier, faster and more convinient way to manage your school.</p>
                <a href="#about" class="btn btn-secondary mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/hero.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Security</h4>
                            <p class="m-0">We offer a secure environment to manage & protect your school's data.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Materials</h4>
                            <p class="m-0">We provide a means for teachers to store and upload their materials and resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Educational Quality</h4>
                            <p class="m-0">Your ease of access and efficiency in performance is of top priority to us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Start -->


    <!-- Database Start -->
    <div id="data" class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Database</span></p>
                <h1 class="mb-4">Resources</h1>
                <p class="card-text">Click on a PDF File to download a resource.</p>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-footer bg-transparent py-4 px-5">
                <table id="printTable">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Resource ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">PDF File</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                </tr>
                <?php $__currentLoopData = $resource_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resources): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($resources->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($resources->course); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($resources->name); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><a href="pdf/<?php echo e($resources->pdf_path); ?>" title="<?php echo e($resources->pdf_path); ?>" target="_blank" download>Download</a></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($resources->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                        </div>
                        <a onclick="printData();" class="btn btn-primary px-4 mx-auto mb-4">Print Resources</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
              <div class="text-center pb-2">
                <h1 class="mb-4">Students</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-footer bg-transparent py-4 px-5">
                <table id="printTable1">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th> 
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                </tr>
                <?php $__currentLoopData = $student_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $students): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($students->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($students->name); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($students->email); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($students->phone_number); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($students->course); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($students->created_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($students->updated_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><img src="img/<?php echo e($students->profile_photo_path); ?>" title="<?php echo e($students->profile_photo_path); ?>" width = '150px'></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                        </div>
                        <a onclick="printData1();" class="btn btn-primary px-4 mx-auto mb-4">Print Students</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
              <div class="text-center pb-2">
                <h1 class="mb-4">Lecturers</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-footer bg-transparent py-4 px-5">
                <table id="printTable2">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Unit</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                </tr>
                <?php $__currentLoopData = $lecturer_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($lecturers->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($lecturers->name); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($lecturers->email); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($lecturers->phone_number); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($lecturers->course); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($lecturers->unit); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($lecturers->created_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($lecturers->updated_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><img src="img/<?php echo e($lecturers->profile_photo_path); ?>" title="<?php echo e($lecturers->profile_photo_path); ?>" width = '150px'></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                        </div>
                        <a onclick="printData2();" class="btn btn-primary px-4 mx-auto mb-4">Print Lecturers</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
              <div class="text-center pb-2">
                <h1 class="mb-4">Messages</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-footer bg-transparent py-4 px-5">
                <table id="printTable3">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Message ID</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Title</th>
                <th style="text-align: left;
                  padding: 8px;">Message</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>
                <?php $__currentLoopData = $message_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $messages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($messages->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($messages->name); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($messages->title); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($messages->message); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($messages->course); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($messages->created_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($messages->updated_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                        </div>
                        <a onclick="printData3();" class="btn btn-primary px-4 mx-auto mb-4">Print Messages</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
              <div class="text-center pb-2">
                <h1 class="mb-4">Courses</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-footer bg-transparent py-4 px-5">
                <table id="printTable4">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Course ID</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Course Code</th>
                <th style="text-align: left;
                  padding: 8px;">Year</th>
                   <th style="text-align: left;
                  padding: 8px;">Status</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>
                <?php $__currentLoopData = $course_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($courses->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($courses->name); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($courses->code); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($courses->year); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($courses->status); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($courses->created_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($courses->updated_at); ?></td>
                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                        </div>
                        <a onclick="printData4();" class="btn btn-primary px-4 mx-auto mb-4">Print Courses</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
              <div class="text-center pb-2">
                <h1 class="mb-4">Graduations</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-footer bg-transparent py-4 px-5">
                <table id="printTable5">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Graduation ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Student ID</th>
                <th style="text-align: left;
                  padding: 8px;">Status </th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>
                <?php $__currentLoopData = $graduation_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $graduations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($graduations->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($graduations->course); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($graduations->student); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($graduations->status); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($graduations->created_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($graduations->updated_at); ?></td>
                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                        </div>
                        <a onclick="printData5();" class="btn btn-primary px-4 mx-auto mb-4">Print Graduations</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
              <div class="text-center pb-2">
                <h1 class="mb-4">Timetable</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-footer bg-transparent py-4 px-5">
                <table id="printTable6">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Timetable ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Lecturer</th>
                <th style="text-align: left;
                  padding: 8px;">Unit</th>
                   <th style="text-align: left;
                  padding: 8px;">Day</th>
                   <th style="text-align: left;
                  padding: 8px;">Finish Time</th>
                  <th style="text-align: left;
                  padding: 8px;">Start Time</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>
                <?php $__currentLoopData = $timetable_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timetables): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($timetables->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($timetables->course); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($timetables->lecturer); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($timetables->unit); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($timetables->day); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($timetables->start_time); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($timetables->finish_time); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($timetables->created_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($timetables->updated_at); ?></td>
                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                        </div>
                        <a onclick="printData6();" class="btn btn-primary px-4 mx-auto mb-4">Print Timetable</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Database End -->


    <!-- Administrator Actions Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Register For A Course</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="<?php echo e(url('reg_course')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Student ID" required="required" name="uid" id="uid"/>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" id="course" name="course" required>
                                     <option value="" selected disabled>Select A Course</option>
                                     <?php
                       
                                      // Connect to database
                                      $con = mysqli_connect("localhost","root","","intergrated_school_system");
                                       
                                      // mysqli_connect("servername","username","password","database_name")
                                    
                                      // Get all the courses from category table
                                      $sql = "SELECT * FROM `courses`";
                                      $all_categories = mysqli_query($con,$sql);
                                      // use a while loop to fetch data
                                      // from the $all_categories variable
                                      // and individually display as an option
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                      <option value="<?php echo $category["name"];?>">
                                          <?php echo $category["name"];
                                              // To show the course name to the user
                                          ?>
                                      </option>
                                  <?php
                                      endwhile;
                                      // While loop must be terminated
                                  ?>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                    <div class="col-lg-12">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Register For A Graduation</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="<?php echo e(url('reg_grad')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                                 <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Student ID" required="required" name="uid" id="uid"/>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" id="course" name="course" required>
                                     <option value="" selected disabled>Select A Course</option>
                                     <?php
                       
                                      // Connect to database
                                      $con = mysqli_connect("localhost","root","","intergrated_school_system");
                                       
                                      // mysqli_connect("servername","username","password","database_name")
                                    
                                      // Get all the courses from category table
                                      $sql = "SELECT * FROM `courses`";
                                      $all_categories = mysqli_query($con,$sql);
                                      // use a while loop to fetch data
                                      // from the $all_categories variable
                                      // and individually display as an option
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                      <option value="<?php echo $category["name"];?>">
                                          <?php echo $category["name"];
                                              // To show the course name to the user
                                          ?>
                                      </option>
                                  <?php
                                      endwhile;
                                      // While loop must be terminated
                                  ?>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Administrator Actions End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-white">EDU PLATFORM</span>
                </a>
                <p>Our mission is to provide a safe, efficient learning platform that empowers all stakeholders to achieve their full potential.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Get In Touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Address</h5>
                        <p>Nairobi, KENYA.</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>edu.platform@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Phone</h5>
                        <p>+254 345 678 1290</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#data"><i class="fa fa-angle-right mr-2"></i>Databse</a>
                    <a class="text-white mb-2" href="#act"><i class="fa fa-angle-right mr-2"></i>Student Actions</a>
                    <a class="text-white" href="#contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">EDU PLATFORM</a>.
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html><?php /**PATH C:\Users\User\Downloads\Student_System\resources\views/student/home.blade.php ENDPATH**/ ?>