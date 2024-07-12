<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <title>Rapido Cheese - Homepage</title>
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

<style type="text/css">
    #home{
        display: block;
    }
    #booking{
        display: none;
    }
    #product{
        display: none;
    }
    #service{
        display: none;
    }
</style>

</head>

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
                            <a href="#" onclick="myFunction(event, 0);" class="nav-item nav-link">Home</a>
                            <a href="#about" class="nav-item nav-link">About</a>
                            <a href="#" onclick="myFunction(event, 3);" class="nav-item nav-link">Service</a>
                            <a href="#" onclick="myFunction(event, 2);" class="nav-item nav-link">Products</a>
                            <a href="#" onclick="myFunction(event, 1);" class="nav-item nav-link">Bookings</a>                            
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary mr-3 d-none d-lg-block">Admin Login</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

<div id="home">
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
                            <a href="#about" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/slide2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Experience Serenity</h5>
                            <h1 class="display-3 text-white mb-md-4">Immerse yourself in tranquility at Nyandarua County.</h1>
                            <a onclick="myFunction(event, 1);" class="btn btn-primary">Book A Reservation</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/slide3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Culinary Delights</h5>
                            <h1 class="display-3 text-white mb-md-4">Indulge in the rich flavors of our truly Kenyan dairy products.</h1>
                            <a onclick="myFunction(event, 2);" class="btn btn-primary">Order A Product</a>
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


    <!-- About Start -->
    <div id="about" class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title">A journey of flavor, sustainability, and community.</h1>
                    <h5 class="text-muted font-weight-normal mb-3">Experience the essence of Rapido Cheese - where quality meets tradition, and every bite tells a story.</h5>
                    <p>Rapido Cheese is more than just a dairy company; it's a story of passion, tradition, and community. Nestled in the scenic landscapes of Kwa Haraka, Nyandarua County, Kenya, Rapido Cheese is a beacon of excellence in the dairy industry. Our journey began with a vision to celebrate the rich culinary heritage of Kenya while fostering positive change within local communities.
<br>
<br>
At Rapido Cheese, sustainability is at the core of everything we do. We believe in harnessing the bountiful resources of our land in a responsible manner, ensuring a harmonious relationship between nature and industry. Through our sustainable manufacturing practices, we strive to minimize our environmental footprint and pave the way for a greener future.
<br>
<br>
Our commitment to community empowerment is unwavering. By creating job opportunities, providing skills development programs, and supporting local initiatives, we aim to uplift the lives of those around us. Rapido Cheese isn't just about making cheese; it's about making a difference.
<br>
<br>
As a family-run business, we take pride in our heritage and values. Alongside our esteemed CEO, Engineer Lawrence Mukundi, our dedicated team of board members - Isaac, Trizah, and Georgette Ndungu - bring a wealth of experience and expertise to the table. Together, we are united in our mission to redefine the dairy industry in Kenya and beyond.</p>
                    <div class="d-flex align-items-center pt-4">
                        <a onclick="myFunction(3);" class="btn btn-primary mr-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Meet Our Team</h6>
                    <h1 class="section-title mb-3">Discover the Faces Behind Rapido Cheese</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel position-relative">
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/ceo.png" alt="">
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Hon. Lawrence Mukundi</h5>
                                <p class="text-white m-0">Chief Executive Officer</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/board.png" alt="">
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Issac</h5>
                                <p class="text-white m-0">Board Member</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/board.png" alt="">
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Trizah</h5>
                                <p class="text-white m-0">Board Member</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/board.png" alt="">
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Georgette Ndungu</h5>
                                <p class="text-white m-0">Board Member</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
</div>

<div id="booking">
 <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Book A Reservation</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" onclick="myFunction(event, 0);">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="#">Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Booking Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Book A Reservation</h6>
                    <h1 class="section-title mb-3">Escape to Tranquility at Rapido Cheese</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Embark on a journey of discovery as you explore the inner workings of our state-of-the-art facility, from milk processing to cheese aging.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="<?php echo e(url('make_booking')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-12 control-group">
                                    <label style="color: black;">Date for Booking</label>
                                    <br>
                                    <input type="date" min="<?php echo date('Y-m-d'); ?>" class="form-control p-4" id="date" name="date" required="required" data-validation-required-message="Please enter date for booking" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label style="color: black;">Kindly Select A Subject for Booking:</label>
                                <br>
                                <input type="radio" name="subject" id="subject" value="Book A Retreat"> Book A Retreat<br><br>
                                <input type="radio" name="subject" id="subject" value="Planning A Pilgrimage"> Planning A Pilgrimage<br><br>
                                <input type="radio" name="subject" id="subject" value="Factory Visit"> Factory Visit<br><br>
                                <input type="radio" name="subject" id="subject" value="Book Internships"> Book Internships<br><br>
                                <input type="radio" name="subject" id="subject" value="Student Visits"> Student Visits<br><br>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" name="comments" placeholder="Any Comments" required="required" data-validation-required-message="Please enter your comments"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021369.5769475591!2d36.46856280000001!3d-0.3920663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1829b1ef6f484d97%3A0x1cfdb6ef7946a133!2sNyandarua%20County!5e0!3m2!1sen!2ske!4v1714864507343!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
</div>

<div id="product">
 <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">View Products</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" onclick="myFunction(event, 0);">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="#">Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <?php $__currentLoopData = $product_store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <img src="img/<?php echo e($products->image); ?>" alt="">
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4"><?php echo e($products->name); ?></h5>
                            <!-- <a href="login.php" class="btn btn-primary mr-3 d-none d-lg-block">Order Product</a> -->
                        </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

        <!-- Order Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Order A Product</h6>
                    <!-- <h1 class="section-title mb-3">Order...</h1> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="<?php echo e(url('order_product')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="number" min="10" class="form-control p-4" id="amo" name="amo" placeholder="Your Amount (7,000 Kshs. per 10 KG)" required="required" data-validation-required-message="Please enter your amount" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                                                <div class="col-sm-12 control-group">
                               <select style="color: black;" class="form-control p-4" id="pid" name="pid" required="required" data-validation-required-message="Please select a product">
                                     <option value="" selected disabled>Select A Product</option>
                                     <?php
                                      $con = mysqli_connect("localhost","root","","rapido_cheese");
                                      $sql = "SELECT * FROM `products`";
                                      $all_categories = mysqli_query($con,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                      <option style="color: black;" value="<?php echo $category["id"];?>">
                                          <?php echo $category["name"];?>
                                      </option>
                                  <?php
                                      endwhile;
                                  ?>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="comments" name="comments" placeholder="Additional Comments" required="required" data-validation-required-message="Please enter your comments"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order End -->
</div>

<div id="service">
<!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Service</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" onclick="myFunction(event, 0);">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="#">Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Our Services</h6>
                    <h1 class="mb-4 section-title">Explore What We Offer at Rapido Cheese</h1>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-shopping-basket"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">Dairy Product Sales</h5>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-building"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">Retreat Center</h5>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-id-card"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">Internship Programs</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


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


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-lg-5 pb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Testimonial</h6>
                    <h1 class="section-title mb-5">What Our Clients Say</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="ml-3">
                                    <h5>Jane Wanjiru</h5>
                                    <i>Nairobi</i>
                                </div>
                            </div>
                            <p>Rapido Cheese is not just a dairy company; it's a symbol of Kenyan pride and excellence. Their products are a testament to our rich culinary heritage.</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="ml-3">
                                    <h5>Peter Kamau</h5>
                                    <i>Mombasa</i>
                                </div>
                            </div>
                            <p>As a restaurant owner, sourcing quality dairy products is paramount. Rapido Cheese never disappoints - their cheese adds a unique touch to my dishes.</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="ml-3">
                                    <h5>Mary Njeri</h5>
                                    <i>Eldoret</i>
                                </div>
                            </div>
                            <p>I had the opportunity to visit Rapido Cheese for an internship program, and it was truly enlightening. Their commitment to sustainability and community development is inspiring.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
</div>

    <!-- Footer Start -->
    <div id="contact" class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="#" class="navbar-brand">
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
                    <a class="text-white mb-2" href="#" onclick="myFunction(event, 0);"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#about"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#" onclick="myFunction(event, 3);"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="#" onclick="myFunction(event, 2);"><i class="fa fa-angle-right mr-2"></i>Our Products</a>
                    <a class="text-white mb-2" href="#" onclick="myFunction(event, 1);"><i class="fa fa-angle-right mr-2"></i>Book A Reservation</a>
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
<script type="text/javascript">
    function myFunction(event, id) {
        event.preventDefault();
        event.stopPropagation();
        console.log(id);
        var home = document.getElementById("home");
        var booking = document.getElementById("booking");
        var product = document.getElementById("product");
        var service = document.getElementById("service");
                if (id == 0) {
            home.style.display = "block";
            booking.style.display = "none";
            product.style.display = "none";
            service.style.display = "none";            
        } else if (id == 1) {
            home.style.display = "none";
            booking.style.display = "block";
            product.style.display = "none";
            service.style.display = "none";            
        } else if (id == 2) {
            home.style.display = "none";
            booking.style.display = "none";
            product.style.display = "block";
            service.style.display = "none";            
        } else if (id == 3) {
            home.style.display = "none";
            booking.style.display = "none";
            product.style.display = "none";
            service.style.display = "block";            
        }
    }
</script>

</body>

</html><?php /**PATH F:\Documents\Strathmore University\Systems\Web Dev\Laravel Templates\Student_System\Rapido_Cheese\resources\views/users/home.blade.php ENDPATH**/ ?>