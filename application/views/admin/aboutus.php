
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">About Us</h4>
			</div>
			
		</div>
		<form id="defaultForm" method="post" class="m-b-30"action="<?php echo base_url('aboutus/addpost');?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Upload Image</label>
						<input type="file" class="form-control" name="image">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Enter Title</label>
							<input type="text" class="form-control" name="title"  placeholder="Enter Title">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Paragraph</label>
								<textarea class="form-control" name="paragraph" rows="5" placeholder="Enter here..."></textarea>
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
				
                image: {
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
            },
           paragraph: {
                validators: {
					notEmpty: {
						message: 'Paragraph is required'
					}
				}
            }	
				
				
            }
			
        });

    });
</script>