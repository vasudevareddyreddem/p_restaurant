
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
					<div class="col-md-12">
						<div class="form-group">
							<label>Enter Title</label>
							<input type="text" class="form-control" placeholder="Enter Title" name="title" value="<?php echo isset($edit_aboutus_brief['title'])?$edit_aboutus_brief['title']:''; ?>">
							</div>
						</div>
					</div>
				
						<div class="row">
							<div class="col-lg-12">
								<h4 class="text-primary">Add Paragraph</h4>
							</div>
							<div class="col-md-12">
								<table class="table table-bordered table-hover" id="tab_logic">
									
									<tbody>
									<?php $cnt=1;foreach($edit_aboutus_brief['about_list'] as $lis){ ?>
										
										<tr id="oldid<?php echo $cnt; ?>">
										<td>
											<textarea class="form-control" name="paragraph[]" placeholder="Enter Here..."><?php echo $lis['paragraph']; ?></textarea>
										</td>
										<td class="text-center" valign="center"><a href="javascript:void(0);" onclick="removeparagraph('<?php echo $lis['a_p_id']; ?>','<?php echo $cnt; ?>')"><i class="fa fa-times-circle " style="font-size:25px;" aria-hidden="true"></i></a></td>
												
										</tr>
									<?php $cnt++;} ?>
										<tr id='addr0'>
											<td class="form-group">
												<textarea class="form-control" name="paragraph[]" placeholder="Enter Here..."></textarea>
												</td>
												
												</tr>
										<tr id='addr1'></tr>
									</tbody>
										</table>
										<a id="add_row" class="btn btn-default pull-left">Add Row</a>
										<a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
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

function removeparagraph(p_id,id){
	if(p_id!=''){
		 jQuery.ajax({
					url: "<?php echo site_url('aboutus/remove_pragraph');?>",
					data: {
						p_id: p_id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
						jQuery('#oldid'+id).hide();
					}
				 }
				});
			}
	
}
</script>
	<script type="text/javascript">
    $(document).ready(function() {
		
        $('#defaultForm').bootstrapValidator({
            fields: {
				
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

	