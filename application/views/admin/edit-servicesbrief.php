
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Edit Services</h4>
						</div>
					
					
					</div>
				<form id="defaultForm" method="post" class="m-b-30" action="<?php  echo base_url('services/briefeditpost');?>" enctype="multipart/form-data">
							<input type="hidden" id="s_r_id" name="s_r_id" value="<?php echo $edit_servies_brief['s_r_id'] ?>">

								<div class="row"> 
								<div class="col-md-6"> 
										<div class="form-group">
											<label>Upload Banner</label>
											 <input type="file" class="form-control"  name="banner" value="<?php echo isset($edit_servies_brief['banner'])?$edit_servies_brief['banner']:''; ?>">
										</div>
									</div>
								
								<div class="col-md-12"> 
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr >
												<th class="text-center">
													Image
												</th>
												<th class="text-center">
													Title
												</th>
												<th class="text-center">
													Paragraph
												</th>
											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td class="form-group">
													<input type="file" name="image" class="form-control" value="<?php echo isset($edit_servies_brief['image'])?$edit_servies_brief['image']:''; ?>">
												</td>
												<td class="form-group"> 
												<input type="text" name="title"  placeholder='Enter Name' class="form-control"   value="<?php echo isset($edit_servies_brief['title'])?$edit_servies_brief['title']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="text" name="paragraph"  placeholder='Enter Paragraph' style="max-width=100ch" class="form-control" value="<?php echo isset($edit_servies_brief['paragraph'])?$edit_servies_brief['paragraph']:''; ?>"/>
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
						
						</div>
					</div>
				</div>
			</div>
<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='image[]' id='name"+i+"' type='file'  class='form-control input-md'  /> </td><td><input  name='title[]' id='mail"+i+"' type='text' placeholder='Enter Name'  class='form-control input-md'></td><td><input  name='paragraph[]' id='mail"+i+"' type='text' placeholder='Enter Paragraph'  class='form-control input-md'></td>");

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
				
				image: {
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
                paragraph: {
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











