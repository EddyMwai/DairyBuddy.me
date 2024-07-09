<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <title>Rapido Cheese - Administrator Homepage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

        <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
printData1();
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
printData2();
})  
</script>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-3 text-primary" style="font-size: 30px;">Rapido Cheese</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>rapidocheese@gmail.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+254 712 345 678</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">Rapido Cheese</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="#products" class="nav-item nav-link">Products</a>
                            <a href="#orders" class="nav-item nav-link">Orders</a>
                            <a href="#booking" class="nav-item nav-link">Bookings</a>                            
                            <a href="#mod" class="nav-item nav-link">My Module</a>                           
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <!-- <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Logout</a> -->
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
        </div>
    </div>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/slide1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Taste the Authenticity</h5>
                            <h1 class="display-3 text-white mb-md-4">We prioritize sustainability in our manufacturing process.</h1>
                            <a href="#products" class="btn btn-primary">View Products</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/slide2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Experience Serenity</h5>
                            <h1 class="display-3 text-white mb-md-4">Immerse yourself in tranquility at Nyandarua County.</h1>
                            <a href="#orders" class="btn btn-primary">View Orders</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/slide3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Culinary Delights</h5>
                            <h1 class="display-3 text-white mb-md-4">Indulge in the rich flavors of our truly Kenyan dairy products.</h1>
                            <a href="#mod" class="btn btn-primary">My Module</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid pb-5 contact-info">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Our Office</h5>
                        <p class="m-0">Kwa Haraka, Nyandarua County, Kenya.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Email Us</h5>
                        <p class="m-0">rapidocheese@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Call Us</h5>
                        <p class="m-0">+254 712 345 678</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->

    <!-- Products Start -->
        <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">View Products</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="products" class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 pt-5 pt-lg-0">
                  <table id="printTable">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Product ID</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Image</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left; padding: 8px;"></th>
                </tr>

                <?php $__currentLoopData = $product_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($products->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($products->name); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><img src="img/<?php echo e($products->image); ?>" title="<?php echo e($products->image); ?>" width = '150px'></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($products->created_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($products->updated_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><a href="<?php echo e(url('delete_product',$products->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Product ?')">Delete Product</a></td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>
                  <br>
                  <a onclick="printData();" class="btn btn-primary mr-3 d-none d-lg-block">Print Report</a>  
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

        <!-- Orders Start -->
            <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">View Orders</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="orders" class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 pt-5 pt-lg-0">
                <table id="printTable1">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Order ID</th>
                <th style="text-align: left;
                  padding: 8px;">Product ID</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Amount</th>
                <th style="text-align: left;
                  padding: 8px;">Price (in kshs.)</th>
                <th style="text-align: left;
                  padding: 8px;">Comments</th>
                <th style="text-align: left;
                  padding: 8px;">Status</th>                  
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left; padding: 8px;"></th>
                  <th style="text-align: left; padding: 8px;"></th>                  
                </tr>

                <?php $__currentLoopData = $orders_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($orders->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($orders->product_id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($orders->email); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($orders->amount); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($orders->price); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($orders->comments); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($orders->status); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($orders->created_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($orders->updated_at); ?></td>
                <?php
                if($orders->status == "Pending"){
                    ?>
                <td style="text-align: left;
                  padding: 8px;"><a href="<?php echo e(url('cancel_order',$orders->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Cancel This Order ?')">Cancel Order</a></td>
                <td style="text-align: left;
                  padding: 8px;"><a href="<?php echo e(url('complete_order',$orders->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Complete This Order ?')">Complete Order</a></td>
                  <?php
              }else{
                ?>
                <td></td>
                <td></td>
              <?php  
              }
              ?>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>
                  <br>
                  <a onclick="printData1();" class="btn btn-primary mr-3 d-none d-lg-block">Print Report</a>  
                </div>
            </div>
        </div>
    </div>
    <!-- Orders End -->

    <!-- Bookings Start -->
            <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">View Bookings</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="booking" class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 pt-5 pt-lg-0">
                <table id="printTable2">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Booking ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Date for Booking</th>
                <th style="text-align: left;
                  padding: 8px;">Subject</th>
                <th style="text-align: left;
                  padding: 8px;">Comments</th>
                <th style="text-align: left;
                  padding: 8px;">Status</th>                  
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left; padding: 8px;"></th>
                  <th style="text-align: left; padding: 8px;"></th>                  
                </tr>

                <?php $__currentLoopData = $booking_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($bookings->id); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($bookings->name); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($bookings->email); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($bookings->date); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($bookings->subject); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($bookings->comments); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($bookings->status); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($bookings->created_at); ?></td>
                <td style="text-align: left;
                  padding: 8px;"><?php echo e($bookings->updated_at); ?></td>
                                  <?php
                if($bookings->status == "Pending"){
                    ?>
                <td style="text-align: left;
                  padding: 8px;"><a href="<?php echo e(url('cancel_booking',$bookings->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Cancel This Booking ?')">Cancel Booking</a></td>
                <td style="text-align: left;
                  padding: 8px;"><a href="<?php echo e(url('complete_booking',$bookings->id)); ?>" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Complete This Booking ?')">Complete Booking</a></td>
                                    <?php
              }else{
                ?>
                <td></td>
                <td></td>
              <?php  
              }
              ?>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>
                  <br>
                  <a onclick="printData2();" class="btn btn-primary mr-3 d-none d-lg-block">Print Report</a>  
                </div>
            </div>
        </div>
    </div>
    <!-- Bookings End -->

    <!-- My Module Start -->
    <div id="mod" class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">My Module</h6>
                    <h1 class="section-title mb-3">Add A Product</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="<?php echo e(url('add_product')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <input type="text" class="form-control p-4" id="name" name="name" placeholder="Product Name" required="required" data-validation-required-message="Please enter product name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="file" class="form-control p-4" id="img" name="img" placeholder="Product Image" required="required" data-validation-required-message="Please enter product image" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Module End -->
   


    <!-- Footer Start -->
    <div id="contact" class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-primary" style="font-size: 30px;">Rapido Cheese</h1>
                </a>
                <p>Rapido Cheese is more than just a dairy company; it's a story of passion, tradition, and community.</p>
                <h5 class="font-weight-semi-bold text-white mb-2">Opening Hours:</h5>
                <p class="mb-1">Mon – Sat, 8AM – 5PM</p>
                <p class="mb-0">Sunday: Closed</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>Kwa Haraka, Nyandarua County, Kenya.</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+254 751 234 567</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>rapidocheese@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#about"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="#product"><i class="fa fa-angle-right mr-2"></i>Products</a>
                    <a class="text-white mb-2" href="#booking"><i class="fa fa-angle-right mr-2"></i>Bookings</a>
                    <a class="text-white mb-2" href="#mod"><i class="fa fa-angle-right mr-2"></i>My Module</a>                    
                    <a class="text-white" href="#contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-12 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Rapido Cheese</a>. All Rights Reserved.</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!--  Javascript -->
    <script src="js/main.js"></script>
</body>

</html><?php /**PATH F:\Documents\Strathmore University\Systems\Web Dev\Laravel Templates\Student_System\Rapido_Cheese\resources\views/admin/home.blade.php ENDPATH**/ ?>