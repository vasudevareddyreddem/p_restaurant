
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title"> Edit Blog</h4>
			</div>
			
		</div>
		<form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('blog/editpost');?>"  enctype="multipart/form-data">
		<input type="hidden" id="b_id" name="b_id" value="<?php echo $edit_blog['b_id'] ?>">

			<div class="row">
				<div class="col-md-9 col-md-offset-1">
					<table class="table table-bordered table-hover" id="tab_logic">
						<thead>
							<tr >
								<th class="text-center">
													Image
												</th>
								<th class="text-center">
													Date
												</th>
								<th class="text-center">
													procedure
												</th>
							</tr>
						</thead>
						<tbody>
							<tr id='addr0'>
								<td class="form-group">
									<input type="file" class="form-control"  name="pic" value="<?php echo isset($edit_blog['pic'])?$edit_blog['pic']:''; ?>">
									</td>
									<td class="form-group">
										<input type="date" name="date"  placeholder='Enter date' class="form-control"value="<?php echo isset($edit_blog['date'])?$edit_blog['date']:''; ?>">
									</td>
									<td class="form-group">
										<input type="text" name="procedure"   placeholder='Enter procedure' class="form-control"value="<?php echo isset($edit_blog['procedure'])?$edit_blog['procedure']:''; ?>">
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
      $('#addr'+i).html("<td><input name='pic[]' id='name"+i+"' type='file'  class='form-control input-md'  /> </td><td><input  name='date[]' id='mail"+i+"' type='date' placeholder='Enter date'  class='form-control input-md'></td><td><input  name='procedure[]' id='mail"+i+"' type='text' placeholder='Enter Procedure'  class='form-control input-md'></td>");

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
				pic: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
			date: {
                validators: {
					notEmpty: {
						message: 'Date  is required'
					},
					date: {
                        format: 'DD-MM-YYYY',
                        message: 'The value is not a valid date'
                    }
				
				}
            },	
                procedure: {
                    validators: {
                        notEmpty: {
                            message: 'procedure is required'
                        }
                    }
                }
				
				
				
				
            }
			
        });

    });
</script>


