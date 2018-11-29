
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">Edit About Us</h4>
			</div>
			
		</div>
			<form id="defaultForm" method="post" class="m-b-30" action="<?php  echo base_url('aboutus/editbriefpost');?>" enctype="multipart/form-data">
			<input type="hidden" id="a_b_id" name="a_b_id" value="<?php echo $edit_aboutus_brief['a_b_id'] ?>">

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Upload Banner</label>
						<input type="file" class="form-control"  name="banner" value="<?php echo isset($edit_aboutus_brief['banner'])?$edit_aboutus_brief['banner']:''; ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Enter Title</label>
							<input type="text" class="form-control" placeholder="Enter Title" name="title" value="<?php echo isset($edit_aboutus_brief['title'])?$edit_aboutus_brief['title']:''; ?>">
							</div>
						</div>
					</div>
				
					<form id="defaultForm" method="post" class="m-b-30" action="#">
						<div class="row">
							<div class="col-lg-12">
								<h4 class="text-primary">Add Paragraph</h4>
							</div>
							<div class="col-md-12">
								<table class="table table-bordered table-hover" id="tab_logic">
									
									<tbody>
										<tr id='addr0'>
											<td class="form-group">
												<textarea class="form-control" name="paragraph" placeholder="Enter Here..."><?php echo isset($edit_aboutus_brief['paragraph'])?$edit_aboutus_brief['paragraph']:''; ?></textarea>
												</td>
												
												</tr>
												<tr id='addr1'></tr>
											</tbody>
										</table>
										
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Upload</button>
								</div>
							</form>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><textarea name='paragraph[]' id='name"+i+"' class='form-control input-md'></textarea> </td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>
	<script type="text/javascript">
    $(document).ready(function() {
		
        $('#defaultForm').bootstrapValidator({
            fields: {
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
                            message: 'title is required'
                        }
                    }
                },
                'paragraph[]': {
                    validators: {
                        notEmpty: {
                            message: 'paragraph is required'
                        }
                    }
                }
				
				
				
				
            }
			
        });

    });
</script>


	