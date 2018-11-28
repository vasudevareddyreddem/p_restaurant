
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
				<form id="changepassword" name="changepassword" action="<?php echo base_url('dashboard/changepasswordpost'); ?>" method="post" enctype="multipart/form-data">	
					
					<div  class="row">
					<div class="col-lg-12">
					<h4 class="text-primary">Change Password </h4></div>
					<div class="col-lg-8">
					<div class="form-group">
					<label>Old Password</label>
					<input type="password" class="form-control" id="oldpassword" name="oldpassword"  placeholder="Password">
					</div>
					</div>
					
					</div>
					<div class="row"> 
								<div class="col-lg-8">
								<div class="form-group">
					<label>New Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="New Password">
					</div>
					</div>
								</div>
								<div class="row"> 
								<div class="col-lg-8">
								<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
					</div>
					</div>
								</div>
								<div class="m-t-20 text-center">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Upload</button>
																	</div>
							</form>
						
						</div>
					</div>
				</div>
			</div>
			

<script>
 
	 $(document).ready(function() {
    $('#changepassword').bootstrapValidator({
        
        fields: {
            oldpassword: {
                validators: {
					notEmpty: {
						message: 'Old Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Old Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Old Password wont allow <>[]'
					}
				}
            }, password: {
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
            },
           
            confirmpassword: {
					 validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					identical: {
						field: 'password',
						message: 'password and confirm Password do not match'
					}
					}
				}
            }
        })
     
});

</script>



