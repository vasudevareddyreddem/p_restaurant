<!DOCTYPE html>
<html lang="en" >
  

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($header_imgs['title'])?$header_imgs['title']:'PRACHA RESTAURANT'; ?></title>
	 <?php if(isset($header_imgs['logo']) && $header_imgs['logo']!=''){ ?>
		<link rel="icon" href="<?php echo base_url('assets/headerpic/'.$header_imgs['favicon']);?>" >
	 <?php }else{ ?>
	 <link rel="icon" href="http://prachatech.com/assets/vendor/img/fav.png" >
	 <?php } ?>
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
                     <li><a target="_blank" href="http://<?php echo isset($topheader['facebook_link'])?$topheader['facebook_link']:''; ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="http://<?php echo isset($topheader['twitter_link'])?$topheader['twitter_link']:''; ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="http://<?php echo isset($topheader['pinterest_link'])?$topheader['pinterest_link']:''; ?>"><i class="fa fa-pinterest"></i></a></li>
                            <li><a target="_blank" href="http://<?php echo isset($topheader['google_link'])?$topheader['google_link']:''; ?>"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                
                </div>
              </div>
            </div>
          </div>
          <div class="header-main">
            <div class="container">
             
              <div class="open-offcanvas">&#9776;</div>
              
              <div class="header-logo"><a href="<?php echo base_url(); ?>" class="logo logo-static">
			  <?php if(isset($header_imgs['logo']) && $header_imgs['logo']!=''){ ?>
			  <img src="<?php echo base_url('assets/headerpic/'.$header_imgs['logo']);?>" alt="<?php echo isset($header_imgs['logo'])?$header_imgs['logo']:''; ?>" class="logo-img img-responsive">
			  <?php }else{ ?>
			  	<img src="<?php echo base_url();?>assets/images/logo.png" alt="pracha" class="logo-img img-responsive">

			  <?php } ?>
			  </a><a href="<?php echo base_url('home'); ?>" class="logo logo-fixed"><img src="<?php echo base_url();?>assets/images/logo.png" alt="pracha" class="logo-img img-responsive" style="height:50px;width:auto;background:#f15f2a"></a></div>
              <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                  <ul id="main-nav" class="nav nav-pills">
                    <li class="<?php if($this->uri->segment(1)=='home' && $this->uri->segment(2)==''){ echo "current-menu-item"; } ?>"><a href="<?php echo base_url('home'); ?>" class="">Home</a>
                  
                    </li>
                    <li class="<?php if($this->uri->segment(1)=='home' && $this->uri->segment(2)=='aboutus'){ echo "current-menu-item"; } ?>"><a href="<?php echo base_url('home/aboutus'); ?>">About</a></li>
                   <li class="<?php if($this->uri->segment(1)=='home' && $this->uri->segment(2)=='reservation'){ echo "current-menu-item"; } ?>"><a href="<?php echo base_url('home/reservation'); ?>">Reservation</a></li>
                    <li class="<?php if($this->uri->segment(1)=='home' && $this->uri->segment(2)=='menu'){ echo "current-menu-item"; } ?>"><a href="<?php echo base_url('home/menu'); ?>">Menu</a>
                    </li>
                    <li class="<?php if($this->uri->segment(1)=='home' && $this->uri->segment(2)=='contact'){ echo "current-menu-item"; } ?>"><a href="<?php echo base_url('home/contact'); ?>">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </header>