
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">Edit Chefs</h4>
			</div>
			
		</div>
		<form id="defaultForm" method="post" class="m-b-30"  action="<?php echo base_url('chefs/editpost'); ?>"  enctype="multipart/form-data">
	<input type="hidden" id="c_id" name="c_id" value="<?php echo $edit_chefs['c_id'] ?>">

			<div class="row">
				<div class="col-md-9 col-md-offset-1">
					<table class="table table-bordered table-hover" id="tab_logic">
						<thead>
							<tr >
								<th class="text-center">
													Image
												</th>
								<th class="text-center">
													Name
												</th>
								<th class="text-center">
													Specialist
												</th>
							</tr>
						</thead>
						<tbody>
							<tr id='addr0'>
								<td class="form-group">
									<input type="file" class="form-control" name="image" value="<?php echo isset($edit_chefs['image'])?$edit_chefs['image']:''; ?>">
									</td>
									<td class="form-group">
										<input type="text" name="name"  placeholder='Enter Name' class="form-control" value="<?php echo isset($edit_chefs['name'])?$edit_chefs['name']:''; ?>"> 
									</td>
									<td class="form-group">
										<input type="text" name="specialist"  placeholder='Enter specialist' class="form-control" value="<?php echo isset($edit_chefs['specialist'])?$edit_chefs['specialist']:''; ?>">
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
<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='image[]' id='name"+i+"' type='file'  class='form-control input-md'  /> </td><td><input  name='name[]' id='mail"+i+"' type='text' placeholder='Enter Name'  class='form-control input-md'></td><td><input  name='specialist[]' id='mail"+i+"' type='text' placeholder='Enter specialist'  class='form-control input-md'></td>");

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
				image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
			name: {
                 validators: {
                        notEmpty: {
                            message: 'name is required'
                        }
                    }
                },
                specialist: {
                    validators: {
                        notEmpty: {
                            message: 'specialist is required'
                        }
                    }
                }
				
				
				
				
            }
			
        });

    });
</script>




