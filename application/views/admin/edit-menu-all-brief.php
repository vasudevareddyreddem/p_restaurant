
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title"> Edit Menu</h4>
						</div>
						
					
					</div>
					
					<form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('menu/alleditbriefpost'); ?>" enctype="multipart/form-data">
					<input type="hidden" id="m_b_a_d_id" name="m_b_a_d_id" value="<?php echo $edit_menu_all_brief['m_b_a_d_id'] ?>">
					<input type="hidden" id="brief_menu_id" name="brief_menu_id" value="<?php echo $brief_menu_id;?>">

					
					
					<div class="row"> 
								<div class="col-md-12"> 
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr >
												<th class="text-center">
													FoodType
												</th><th class="text-center">
													Image
												</th>
												<th class="text-center">
													Name
												</th>
												<th class="text-center">
													Description
												</th>
												<th class="text-center">
													Price
												</th>
											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td class="form-group">
												 <select class="form-control" name="food_type">
													<option value="">Select food type</option>
													<option value="Breakfast" <?php if($edit_menu_all_brief['food_type']=='Breakfast'){ echo "selected"; } ?>>Breakfast</option>
													<option value="Lunch" <?php if($edit_menu_all_brief['food_type']=='Lunch'){ echo "selected"; } ?>>Lunch</option>
													<option value="Snaks"<?php if($edit_menu_all_brief['food_type']=='Snaks'){ echo "selected"; } ?> >Snaks</option>
													<option value="Dinner"<?php if($edit_menu_all_brief['food_type']=='Dinner'){ echo "selected"; } ?>>Dinner</option>
													<option value="Desset"<?php if($edit_menu_all_brief['food_type']=='Desset'){ echo "selected"; } ?>>Desset</option>
													<option value="Drink"<?php if($edit_menu_all_brief['food_type']=='Drink'){ echo "selected"; } ?>>Drink</option>
												  </select>
												</td>
												<td class="form-group">
													<input type="file" class="form-control" name="image" value="<?php echo isset($edit_menu_all_brief['image'])?$edit_menu_all_brief['image']:''; ?>">
												</td>
												<td class="form-group">
												<input type="text" name="name"  placeholder='Enter Name' class="form-control" value="<?php echo isset($edit_menu_all_brief['name'])?$edit_menu_all_brief['name']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="text" name="description"  placeholder='Enter Description' class="form-control" value="<?php echo isset($edit_menu_all_brief['description'])?$edit_menu_all_brief['description']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="number" name="price"  placeholder='Enter Price' class="form-control" value="<?php echo isset($edit_menu_all_brief['price'])?$edit_menu_all_brief['price']:''; ?>"/>
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
				
				image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
			food_type: {
                 validators: {
                        notEmpty: {
                            message: 'Food Type is required'
                        }
                    }
                },
			name: {
                 validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },
                description: {
                    validators: {
                        notEmpty: {
                            message: 'Description is required'
                        }
                    }
                },
				price: {
                validators: {
					notEmpty: {
						message: 'Price is required'
					},regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'Price must be digits'
   					}
				}
            }
				
				
				
            }
			
        });

    });
</script>



