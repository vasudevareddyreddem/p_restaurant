<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/vendor/admin/img/favicon.png">
        <title>Login</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/bootstrapValidator.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/admin/css/style.css">
		
    </head>
<body class="bg">
        <div class="main-wrapper">
			<div class="account-page">
				<div class="container">
					<h3 class="account-title" style="color:#f15f2a;">Forget Password</h3>
					<div class="account-box">
						<div class="account-logo bg-primary py-5" style="margin-bottom:0px;background-color:#f15f2a;">
								<a href=""><img src="<?php echo base_url();?>assets/vendor/admin/img/logo.png" alt="Focus Technologies"></a>
							</div>
						<div class="account-wrapper">
						
							<form id="defaultForm" name="defaultForm" method="post" action="<?php echo base_url('user/forgotpost'); ?>" enctype="multipart/form-data" >

								<div class="form-group form-focus">
									<label class="control-label">Username or Email</label>
									<input class="form-control floating" type="text"name="email" id="email" placeholder="Email Address">
								</div>
								<div class="form-group text-center">
									
									<button class="btn btn-primary btn-block account-btn" type="submit" style="background-color:#f15f2a;">Reset Password</button>
								</div>
								<div class="text-center">
									<a href="<?php echo base_url('');?>">Back to Login</a>
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
            }
            
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>
</body>
</html>