<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/vendor/admin/img/favi_con.png">
        <title>Login</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/bootstrapValidator.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/bg.css">
		
    </head>
	<?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('loginerror')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('loginerror');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
	
<body class="bg">

        <div class="main-wrapper">
			<div class="account-page">
				<div class="container">
					<h3 class="account-title" style="color:#f15f2a;">Login</h3>
					<div class="account-box">
					<div class="account-logo bg-primary py-5" style="margin-bottom:0px;background-color:#f15f2a">
								<a href=""><img src="<?php echo base_url();?>assets/vendor/admin/img/logo.png" alt="Focus Technologies"></a>
							</div>
						<div class="account-wrapper" >
							
							<form id="defaultForm" name="defaultForm"action="<?php echo base_url('user/loginpost'); ?>" method="post" enctype="multipart/form-data" >
								<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
								<div class="form-group form-focus">
									<label class="control-label">Username or Email</label>
									<input class="form-control floating" type="text" name="email" value="<?php echo $this->input->cookie('email');?>" >
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Password</label>
									<input class="form-control floating" type="password" name="password" value="<?php echo $this->input->cookie('password');?>" >
								</div>
								<div class="form-group text-center">
								<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
									<button class="btn btn-primary btn-block account-btn" style="color:#fff;background-color:#f15f2a;">Login</button>
								</div>
								<div class="text-center">
									<a href="<?php echo base_url('user/forgot');?>">Forgot your password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
	<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/admin/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/admin/js/bootstrap.min.js"></script>
		 <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/admin/js/bootstrapValidator.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/admin/js/app.js"></script>
    </body>
<script type="text/javascript">
$(document).ready(function() {
   
    $('#defaultForm').bootstrapValidator({
//      
        fields: {
           email: {
              validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },
            password: {
               validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
            }
        }
    });
});
</script>
</body>
</html>