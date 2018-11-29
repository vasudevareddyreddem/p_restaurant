
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Edit Reservation Time</h4>
						</div>
					
					</div>
						<form id="defaultForm" method="post" class="m-b-30"action="<?php echo base_url('reservationtime/editpost'); ?>" enctype="multipart/form-data">
								<input type="hidden" id="r_t_id" name="r_t_id" value="<?php echo $edit_reser_time['r_t_id'] ?>">

								<div class="row"> 
									
									<div class="col-md-4"> 
										<div class="form-group">
											<label>Time From </label>
											 <input type="time" class="form-control" name="time_form"  placeholder="Enter Time From" value="<?php echo isset($edit_reser_time['time_form'])?$edit_reser_time['time_form']:''; ?>">
										</div>
									</div>
									
									<div class="col-md-4"> 
										<div class="form-group">
											<label>Time Upto </label>
											 <input type="time" class="form-control" name="time_to"  placeholder="Enter Time Upto" value="<?php echo isset($edit_reser_time['time_to'])?$edit_reser_time['time_to']:''; ?>">
										</div>
									</div>
									
									<div class="col-md-4"> 
										<div class="form-group">
									  <label>Differnce Time Hours</label>
									  <select class="form-control" name="time_differnce"  >
										<option value="">Differnce Time Hours</option>
										<option value="1 hours" <?php if($edit_reser_time['time_differnce']=='1 hours'){ echo "selected"; } ?>>1 hours</option>
										<option value="2 hours" <?php if($edit_reser_time['time_differnce']=='2 hours'){ echo "selected"; } ?>>2 hours</option>
										<option value="3 hours" <?php if($edit_reser_time['time_differnce']=='3 hours'){ echo "selected"; } ?>>3 hours</option>
										<option value="4 hours" <?php if($edit_reser_time['time_differnce']=='4 hours'){ echo "selected"; } ?>>4 hours</option>
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
			

<script type="text/javascript">
    $(document).ready(function() {
		
        $('#defaultForm').bootstrapValidator({
            fields: {
			time_form: {
                validators: {
					notEmpty: {
						message: 'Time From is required'
					}
				}
            },	
             time_to: {
                validators: {
					notEmpty: {
						message: 'Time Upto is required'
					}
				}
            },  
				
			 time_differnce: {
                validators: {
					notEmpty: {
						message: 'Differnce Time Hours is required'
					}
				}
            }
          
				
				
            }
			
        });

    });
</script>


