<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Orig | VetCare </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="<?= base_url();?>assets/css1/site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/img1/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/slicknav.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/flaticon.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/animate.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/slick.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/nice-select.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css1/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/font-awesome.min.css'); ?>">


     <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url();?>assets/css/style.css" rel="stylesheet">
    

        <!-- this is for the sending email -->
        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("1CV5MTuAG2z3Xaa7Q");
   })();
</script>


</head>

<body>
    <header>
    	<!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url();?>assets/img1/logo/vetlogo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
        <!--? Header Start -->
        <div class="header-area header-transparent" style="background:#f3f6f9">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="<?= base_url();?>index.php/home"><img src="<?= base_url();?>assets/img1/logo/vetlogo.png" alt=""></a>
                            </div>
                        </div>
                        
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                        <!-- <a href="#" class="sidebar-toggler flex-shrink-0" style= "margin-right: 300px">
                                            <i class="fa fa-bars" style="color:maroon" ></i>
                                        </a> -->
                                            <li><a class="nav-link active" href="<?= base_url();?>index.php/home">Home</a></li>
                                            <li><a  href="<?= base_url();?>index.php/services">Services</a></li>
                                            <li><a href="<?= base_url();?>index.php/about">About</a></li>                                         
                                            <li><a href="<?= base_url();?>index.php/contact">Contact</a></li>
                                            <li><a href="<?= base_url();?>index.php/contact">My Account</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="<?= base_url();?>index.php/login_client"> <button class="header-btn">Logout</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>