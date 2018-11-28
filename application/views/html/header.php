<!DOCTYPE html>
<html lang="en" >
  

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRACHA RESTAURANT</title>
		<link rel="icon" href="http://prachatech.com/assets/vendor/img/fav.png" >
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swipebox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/component.min.css">
    <!-- Font-icon-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-icon/style.css">
    <!-- Style-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/elements.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/extra.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/widget.css">
    <link id="colorpattern" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/color/colordefault.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/live-settings.css">
    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <!-- Script Loading Page-->
    <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/snap.svg-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>
  </head>
  <body>
    <div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
        <header class="header-transparent">
          <div class="header-top top-layout-02">
            <div class="container">
              <div class="topbar-left">
                <div class="topbar-content">
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-map-marker"></i><span><?php echo $topheader['address']; ?></span></div>
                  </div>
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-phone"></i><span><?php echo $topheader['phone_number']; ?></span></div>
                  </div>
                </div>
              </div>
              <div class="topbar-right">
                <div class="topbar-content">
                  <div class="item">
                    <ul class="socials-nb list-inline wg-social">
                      <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                  <div class="item">
				  
                    <div class="wg-social"><i class="fa fa-user"></i><span>My Account</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-main">
            <div class="container">
             
              <div class="open-offcanvas">&#9776;</div>
              
              <div class="header-logo"><a href="<?php echo base_url('home'); ?>" class="logo logo-static"><img src="<?php echo base_url();?>assets/images/logo.png" alt="pracha" class="logo-img img-responsive"></a><a href="<?php echo base_url('home'); ?>" class="logo logo-fixed"><img src="<?php echo base_url();?>assets/images/logo.png" alt="pracha" class="logo-img img-responsive" style="height:50px;width:auto;background:#f15f2a"></a></div>
              <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                  <ul id="main-nav" class="nav nav-pills">
                    <li class=" current-menu-item"><a href="<?php echo base_url('home'); ?>" class="">Home</a>
                  
                    </li>
                    <li><a href="<?php echo base_url('preview/aboutus'); ?>">About</a></li>
                    <li><a href="<?php echo base_url('preview/reservation'); ?>">Reservation</a></li>
                    <li class="dropdown"><a href="<?php echo base_url('preview/menu'); ?>">Menu</a>
                    </li>
                    <li><a href="<?php echo base_url('preview/contact'); ?>">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </header>