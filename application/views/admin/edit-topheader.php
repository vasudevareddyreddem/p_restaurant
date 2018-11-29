
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">Top Header</h4>
			</div>
		</div>
		<form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('topheader/editpost');?>">
		<input type="hidden" id="t_h_id" name="t_h_id" value="<?php echo $edit_topheader['t_h_id'] ?>">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Address</label>
						<!--<input type="text" class="form-control" value="Plot No. 177, Sri Vani Nilayam, Hyderabad.
"></input>--><textarea class="form-control" name="address"  ><?php echo isset($edit_topheader['address'])?$edit_topheader['address']:''; ?>
</textarea>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" class="form-control" name="phone_number" value="<?php echo isset($edit_topheader['phone_number'])?$edit_topheader['phone_number']:''; ?>" >
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
							<input type="text" class="form-control" name="facebook_link" placeholder="Enter facebook Link" value="<?php echo isset($edit_topheader['facebook_link'])?$edit_topheader['facebook_link']:''; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Twitter Link</label>
								<input type="text" class="form-control"name="twitter_link"  placeholder="Enter Twitter Link" value="<?php echo isset($edit_topheader['twitter_link'])?$edit_topheader['twitter_link']:''; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Google+ Link</label>
									<input type="text" class="form-control" name="google_link" placeholder="Enter Google+ Link" value="<?php echo isset($edit_topheader['google_link'])?$edit_topheader['google_link']:''; ?>">
									</div>
								</div>
								<div class="col-md-6">
               <div class="form-group">
                  <label>Pinterest link</label>
                  <input type="text" class="form-control" name="pinterest_link" placeholder="Enter Pinterest Link" value="<?php echo isset($edit_topheader['pinterest_link'])?$edit_topheader['pinterest_link']:''; ?>">
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
						message: 'Facebook link is required'
					},
					regexp: {
					regexp: /^[www].[a-zA-Z0-9-].[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid Facebook link. For example www.facebook.com	.'
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
					message: 'Please enter a valid Twitter Link. For example www.twitter.com.'
					}
				}
            },
            pinterest_link: {
               validators: {
   	notEmpty: {
   		message: 'Pinterest link is required'
   	},
   	regexp: {
   	regexp: /^[www].[a-zA-Z0-9-].[a-zA-Z0-9-.]+$/,
   	message: 'Please enter a valid Pinterest Link address. For example www.pinterest.com.'
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
					message: 'Please enter a valid Google+ Link. For example www.google.com.'
					}
				}
            }
				
				
				
				
            }
			
        });

    });
</script>