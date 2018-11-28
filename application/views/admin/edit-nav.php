
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title"> Edit Nav</h4>
			</div>
			
		</div>
		<form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('header/editpost');?>" enctype="multipart/form-data">
		<input type="hidden" id="h_id" name="h_id" value="<?php echo $edit_header['h_id'] ?>">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Upload Favicon</label>
						<input type="file" class="form-control" name="favicon" value="<?php echo isset($edit_header['favicon'])?$edit_header['favicon']:''; ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Upload Logo</label>
							<input type="file" class="form-control" name="logo" value="<?php echo isset($edit_header['logo'])?$edit_header['logo']:''; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Upload Banner</label>
								<input type="file" class="form-control" name="banner" value="<?php echo isset($edit_header['banner'])?$edit_header['banner']:''; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="title"   placeholder="Enter title...." value="<?php echo isset($edit_header['title'])?$edit_header['title']:''; ?>">
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
				favicon: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
			
				logo: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
				banner: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
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