
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">Top Header</h4>
			</div>
			
		</div>
<form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('topheader/addpost');?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address"></textarea>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" class="form-control" name="phone_number" >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h4 class="text-primary">Social Connect</h4>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>facebook Link</label>
							<input type="text" class="form-control" name="facebook_link" placeholder="Enter facebook Link">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Twitter Link</label>
								<input type="text" class="form-control" name="twitter_link"  placeholder="Enter Twitter Link">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Google+ Link</label>
									<input type="text" class="form-control" name="google_link"  placeholder="Enter Google+ Link">
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
		<script type="text/javascript">
    $(document).ready(function() {
		
        $('#defaultForm').bootstrapValidator({
            fields: {
				
                address: {
                validators: {
					notEmpty: {
						message: 'Address is required'
					}
				}
            },
				phone_number: {
                 validators: {
					notEmpty: {
						message: 'Phone Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10}$/,
					message:'Phone Number must be 10 digits'
					}
				
				}
            },
			
           facebook_link: {
                validators: {
					notEmpty: {
						message: 'facebook link is required'
					},
					regexp: {
					regexp: /^[www].[a-zA-Z0-9-].[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example www.facebook.com	.'
					}
				}
            },

            twitter_link: {
                validators: {
					notEmpty: {
						message: 'Twitter Link is required'
					},
			        regexp: {
					regexp: /^[www].[a-zA-Z0-9-].[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example www.twitter.com.'
					}
				}
            },

			google_link: {
                validators: {
					notEmpty: {
						message: 'Google+ Link is required'
					},
				    regexp: {
					regexp: /^[www].[a-zA-Z0-9-].[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example www.google.com.'
					}
				}
            }
				
				
				
				
            }
			
        });

    });
</script>