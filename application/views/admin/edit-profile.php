
             <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Edit Profile</h4>
						</div>
					</div>
					<form id="defaultForm" method="post"  action="<?php echo base_url('profile/editpost'); ?>" enctype="multipart/form-data">
					<input type="hidden" class="form-control" name="u_id" id="u_id" value="<?php echo isset($userdetails['u_id'])?$userdetails['u_id']:''; ?>"  />
						<div class="card-box">
							<h3 class="card-title">Basic Informations</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-img-wrap">
									<?php if($userdetails['profile_pic']!=''){ ?>
										<img class="inline-block" src="<?php echo base_url('assets/adminprofilepic/'.$userdetails['profile_pic']); ?>" alt="user">
										<?php }else{ ?>
								         <img src="<?php echo base_url();?>assets/vendor/img/user-06.jpg" class="img-circle" alt="User Image" />
									      <?php } ?>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label"> Name</label>
													<input type="text" class="form-control floating" name="name" value="<?php echo isset($userdetails['name'])?$userdetails['name']:''; ?>"/>
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">Email</label>
													<input type="email" class="form-control floating"  name="email"  value="<?php echo isset($userdetails['email'])?$userdetails['email']:''; ?>"/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">Profile Pic</label>
												   <input type="file" id="profile_pic" name="profile_pic"   class="form-control" value="<?php echo isset($userdetails['profile_pic'])?$userdetails['profile_pic']:''; ?>"  >
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group form-focus select-focus">
													<label class="control-label">Gendar</label>
													<select class="select form-control floating" name="gender"  >
														<option value="" >Select Gendar</option>
														<option value="Male" <?php if($userdetails['gender']=='Male'){ echo "selected"; } ?>>Male</option>
														<option value="Female" <?php if($userdetails['gender']=='Female'){ echo "selected"; } ?>>Female</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Contact Informations</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Current Address</label>
										<input type="text" class="form-control floating"  name="current_address"  value="<?php echo isset($userdetails['current_address'])?$userdetails['current_address']:''; ?>"/>
									</div>
								</div>	<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Permanent Address</label>
										<input type="text" class="form-control floating"  name="premenent_address" value="<?php echo isset($userdetails['premenent_address'])?$userdetails['premenent_address']:''; ?>" />
									</div>
								</div>
								
							</div>
						</div>
						
						
						<div class="text-center m-t-20">
						<button type="submit" class="btn btn-primary btn-lg" name="signup" value="Sign up">Save &amp; update</button>
						</div>
					</form>
				</div>
				
					
				
			</div>

<script>
$(document).ready(function() {
 
   $('#defaultForm').bootstrapValidator({
//       
        fields: {
			
			name:{
			validators: {
					notEmpty: {
						message: ' Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' Name can only consist of alphanumeric, space and dot'
					}
				}
            },
			
            email: {
                validators: {
					notEmpty: {
						message: 'Email  is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },
			gender:{
			validators: {
					notEmpty: {
						message: 'Gendar is required'
					}
				}
            },
			
			current_address: {
                 validators: {
					  notEmpty: {
						message: 'Current Address is required'
					},
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Address wont allow <>[]'
					}
                }
            },
			
			
			premenent_address: {
                 validators: {
					  notEmpty: {
						message: 'Permanement Address is required'
					},
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Address wont allow <>[]'
					}
                }
            },
			
			profile_pic: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
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




