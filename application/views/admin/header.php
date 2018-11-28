<!DOCTYPE html>
<html>

<head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/vendor/admin/img/favi_con.png">
        <title>Pracha Restaurant</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/bootstrapValidator.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/plugins/morris/morris.css">
        
			<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/admin/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/admin/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/admin/js/bootstrapValidator.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/style.css">
	 <link href="<?php echo base_url(); ?>assets/vendor/admin/css/custom.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/dash.css">
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="<?php  echo base_url('dashboard');?>" class="logo">
						<img class="img-responsive"  src="<?php echo base_url();?>assets/vendor/admin/img/logo.png" alt="">
					</a>
                </div>
                <div class="page-title-box pull-left">
					<h3>Pracha Restaurant</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">	
					<li class="dropdown">
						<a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
						<?php if($userdetails['profile_pic']!=''){ ?>
							<span class="user-img"><img class="img-circle" src="<?php echo base_url('assets/adminprofilepic/'.$userdetails['profile_pic']); ?>" width="40" alt="">
							<?php }else{ ?>
						   <span class="user-img"><img class="img-circle" src="<?php echo base_url();?>assets/vendor/img/user-06.jpg" width="40" alt="">
						 <?php } ?>
							<span class="status online"></span></span>
							<span><?php echo isset($userdetails['name'])?$userdetails['name']:''; ?></span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('profile/index');?>">My Profile</a></li>
						<li><a href="<?php echo base_url('profile/edit');?>">Edit Profile</a></li>
							<li><a href="<?php echo base_url('dashboard/changepassword');?>">Change Password</a></li>
							<li><a href="<?php echo base_url('dashboard/logout');?>">Logout</a></li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="<?php echo base_url('profile/index');?>">My Profile</a></li>
						<li><a href="<?php echo base_url('profile/edit');?>">Edit Profile</a></li>
						<li><a href="<?php echo base_url('dashboard/changepassword');?>">Change Password</a></li>
						<li><a href="<?php echo base_url('dashboard/logout');?>">Logout</a></li>
					</ul>
				</div>
            </div>
		</div>
			
				<?php if($this->session->flashdata('success')): ?>
		<div class="alert_msg1 animated slideInUp bg-succ">
		   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
		</div>
		<?php endif; ?>
		<?php if($this->session->flashdata('error')): ?>
		<div class="alert_msg1 animated slideInUp bg-warn">
		   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
		</div>
		<?php endif; ?>
