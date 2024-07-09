<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Payroll Pro - Homepage</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/styles.css" rel="stylesheet">

    </head>

    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="index.html" class="navbar-brand mx-auto mx-lg-0">
                    <i class="bi bi-wallet2 brand-logo"></i>
                    <span class="brand-text">Payroll <br> Pro</span>
                </a>

                <a class="nav-link custom-btn btn d-lg-none" href="#">Buy Tickets</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_7">Get Started</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link custom-btn btn d-none d-lg-block" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                    </ul>
                <div>
                        
            </div>
        </nav>

        <main>

            <section class="hero" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 m-auto">
                            <div class="hero-text">

                                <h1 class="text-white mb-4"><u class="text-info">Transform Your </u> Payroll Experience </h1>

                                <a href="#section_2" class="custom-link bi-arrow-down arrow-icon"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="videos/bg_video.mp4" type="video/mp4">
                    </video>
                </div>
            </section>

            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h2 class="mb-4">About <u class="text-info">Us</u></h2>
                        </div>

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-3">We are your trusted partner in streamlining payroll management for businesses in Kenya.</h3>

                            <p>PayrollPro is dedicated to simplifying the complexities of payroll processing, allowing you to focus on what matters most – growing your business. With our comprehensive suite of features and commitment to accuracy and efficiency, we empower organizations of all sizes to manage their payrolls with ease and confidence.</p>

                            <a class="custom-btn custom-border-btn btn custom-link mt-3 me-3" href="#section_6">Contact Us</a>

                            <a class="custom-btn btn custom-link mt-3" href="#section_7">Get Started</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="venue section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-5">Contact <u class="text-info">Us</u></h2>
                        </div>

                        <div class="col-lg-12 col-12 mt-5 mt-lg-0">
                            <div class="venue-thumb bg-white shadow-lg">
                                
                                <div class="venue-info-title">
                                    <h2 class="text-white mb-0">Reach out to us via:</h2>
                                </div>

                                <div class="venue-info-body">
                                    <h4 class="d-flex">
                                        <i class="bi-geo-alt me-2"></i> 
                                        <span>Nairobi, Kenya.</span>
                                    </h4>

                                    <h5 class="mt-4 mb-3">
                                        <a href="mailto:code.genius.systems@gmail.com">
                                            <i class="bi-envelope me-2"></i>
                                            code.genius.systems@gmail.com
                                        </a>
                                    </h5>

                                    <h5 class="mb-0">
                                        <a href="tel: 305-240-9671">
                                            <i class="bi-telephone me-2"></i>
                                            +254-712-345678
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- <section class="contact section-padding" id="section_7"> 
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <form class="custom-form contact-form bg-white shadow-lg" action="php/login.php" method="post" role="form">
                                <h2>Get Started</h2>

                                <div class="row">

                                    <div class="col-lg-6 col-md-4 col-12">         
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email Address" required="">
                                        <input type="hidden" value="0" name="mod">
                                    </div>

                                    <div class="col-lg-6 col-md-4 col-12">                                    
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Your Password" required="">
                                         <br>
                                    <input type="checkbox" onclick="myFunction()"> Show Password
                                    <br>
                                    </div>

                                    <div class="col-lg-6 col-md-4 col-12">                                    
                                        <select name="type" id="type" class="form-control" required="">
                                            <option value="" disabled selected>Kindly Select A User Type</option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Company Owner">Company Owner</option>
                                            <option value="Employee">Employee</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>

                                        <button type="submit" class="form-control" name="login">Login</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                            <a class="custom-btn btn custom-link mt-3" href="others/activate_account.php">Activate Account</a>

                            <a class="custom-btn btn custom-link mt-3" href="others/clock_in.php">Clock In</a>
                    </div>
                </div>
            </section> -->

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-12 border-bottom pb-5 mb-5">
                        <div class="d-flex">
                            <a href="index.html" class="navbar-brand">
                                <i class="bi bi-wallet2 brand-logo"></i>
                                <span class="brand-text">Payroll <br> Pro</span>
                            </a>

                            <ul class="social-icon ms-auto">
                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                                <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="#section_2" class="footer-menu-link">Our Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Code of Conduct</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy and Terms</a></li>

                            <li class="footer-menu-item"><a href="#section_6" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                        
                    <div class="col-lg-5 col-12 ms-lg-auto">
                        <div class="copyright-text-wrap d-flex align-items-center">
                            <p class="copyright-text ms-lg-auto me-4 mb-0">Copyright © <span id="year"></span> Payroll Pro. 
                            
                            <br>All Rights Reserved. 
          
                            <br><br>Design by: <a title="CSS s" rel="sponsored" href="mailto:code.genius.systems@gmail.com" target="_blank">Code Genius Systems</a></p>

                            <a href="#section_1" class="bi-arrow-up arrow-icon custom-link"></a>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
<script type="text/javascript">
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
<script type="text/javascript">
        
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

    </script>
    </body>
</html><?php /**PATH F:\Documents\Strathmore University\Systems\Current\Payroll System with Amani\Payroll_System\resources\views/users/home.blade.php ENDPATH**/ ?>