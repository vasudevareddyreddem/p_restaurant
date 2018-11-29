
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">Nav</h4>
			</div>
			
		</div>
		<form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('header/addpost');?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Upload Favicon</label>
						<input type="file" class="form-control" name="favicon" >
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Upload Logo</label>
							<input type="file" class="form-control" name="logo" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Upload Banner</label>
								<input type="file" class="form-control" name="banner">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="title"   placeholder="Enter title...." >
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Tag Lines </label>
									<input type="text" class="form-control" name="tag_line"   placeholder="Enter Tag Lines...." >
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
		</div>
		<script type="text/javascript">
    $(document).ready(function() {
		
        $('#defaultForm').bootstrapValidator({
            fields: {
				favicon: {
                validators: {
					notEmpty: {
                            message: 'Favicon is required'
                        },
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
			
				logo: {
                validators: {
					notEmpty: {
                            message: 'Logo is required'
                        },
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
				banner: {
                validators: {
					notEmpty: {
                            message: 'Banner is required'
                        },
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
				
                tag_line: {
                    validators: {
                        notEmpty: {
                            message: 'Tag Line is required'
                        }
                    }
                },title: {
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