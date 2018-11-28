
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Reservation</h4>
						</div>
					
					</div>
						<form id="defaultForm" method="post" class="m-b-30"action="<?php echo base_url('reservation/briefpost'); ?>" enctype="multipart/form-data">
								<div class="row"> 
									<div class="col-md-6"> 
										<div class="form-group">
											<label>Upload Banner</label>
											 <input type="file" class="form-control"  name="banner" >
										</div>
									</div>
									<div class="col-md-6"> 
										<div class="form-group">
											<label>Title</label>
											 <input type="text" class="form-control" name="title"  placeholder="Enter title">
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
				
                banner: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded image is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
				
			 title: {
                validators: {
					notEmpty: {
						message: 'Title is required'
					}
				}
            }
          
				
				
            }
			
        });

    });
</script>


