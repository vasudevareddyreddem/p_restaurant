
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Menu</h4>
						</div>
						
					
					</div>
					
					<form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('menu/editbriefpost'); ?>" enctype="multipart/form-data">
					<input type="hidden" id="m_b_id" name="m_b_id" value="<?php echo $edit_menu_brief['m_b_id'] ?>">

					
					<div  class="row">
					<div class="col-lg-6">
					<div class="form-group">
											<label>Upload Banner</label>
											 <input type="file" class="form-control"  name="banner" value="<?php echo isset($edit_menu_brief['title'])?$edit_menu_brief['title']:''; ?>">
										</div>
					</div>
					<div class="col-lg-6">
					<div class="form-group">
      <label>Title:</label>
      <input type="text" class="form-control"placeholder="Enter title...."  name="title" value="<?php echo isset($edit_menu_brief['title'])?$edit_menu_brief['title']:''; ?>">
	  </div>
					</div>
					
					</div>
					<div  class="row">
					<div class="col-lg-12">
					<h4 class="text-primary">Menu </h4></div>
					<div class="col-lg-6">
					<div class="form-group">
      <label>MenuType:</label>
      <select class="form-control" name="menu_type"  >
        <option value="">Menu type</option>
        <option value="Menu"<?php if($edit_menu_brief['menu_type']=='Menu'){ echo "selected"; } ?>>Menu</option>
        <option value="Daily special"<?php if($edit_menu_brief['menu_type']=='Daily special'){ echo "selected"; } ?>>Daily special</option>
      </select>
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
			<script>
			
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><select   name='food_type[]' id='name"+i+"'  class='form-control'  ><option>Select food type</option><option>Breakfast</option><option>Lunch</option><option>Snaks</option><option>Dinner</option></select> </td><td><input name='image[]' id='name"+i+"' type='file'  class='form-control input-md'  /> </td></td><td><input  name='name[]' id='mail"+i+"' type='text' placeholder='Enter Name'  class='form-control input-md'></td><td><input  name='description[]' id='mail"+i+"' type='text' placeholder='Enter Description'  class='form-control input-md'></td></td><td><input  name='price[]' id='mail"+i+"' type='number' placeholder='Enter Price'  class='form-control input-md'></td>");

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
				title: {
                validators: {
                        notEmpty: {
                            message: 'title is required'
                        }
                    }
                },
				banner:{
				 validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },	
				menu_type: {
                validators: {
                        notEmpty: {
                            message: 'menu type is required'
                        }
                    }
                },
				'image[]': {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
			'food_type[]': {
                 validators: {
                        notEmpty: {
                            message: 'food type is required'
                        }
                    }
                },
				'name[]': {
                 validators: {
                        notEmpty: {
                            message: 'name is required'
                        }
                    }
                },
                'description[]': {
                    validators: {
                        notEmpty: {
                            message: 'description is required'
                        }
                    }
                },
				'price[]': {
                    validators: {
                        notEmpty: {
                            message: 'price is required'
                        }
                    }
                }
				
				
				
            }
			
        });

    });
</script>



