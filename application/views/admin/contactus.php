
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Contact Us</h4>
						</div>
						
					
					</div>
					<form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('contactus/addpost');?>" enctype="multipart/form-data">
					
								<div class="row"> 
								
									<div class="col-md-6">
										<div class="form-group">
											<label>Banner </label>
											<input type="file" class="form-control" name="banner" >
										</div>
										
										
									</div>
									<div class="col-lg-6">
									<div class="col-lg-12">
								<label>Opening Hours</label></div>
									</div>
									<div class="col-md-6">
										<div class="col-md-12"> 
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr >
												<th class="text-center">
													Day
												</th>
												<th class="text-center">
													Time From
												</th>
												<th class="text-center">
													Time Upto
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="form-group">
												<input type="text" name="Mondayday"  placeholder='Monday' value="Monday" class="form-control" value="<?php echo isset($contact_details['Mondayday'])?$contact_details['Mondayday']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Mondaytime_from"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Mondaytime_from'])?$contact_details['Mondaytime_from']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Mondaytime_to"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Mondaytime_to'])?$contact_details['Mondaytime_to']:''; ?>"/>
												</td>
											</tr>
											<tr>
												<td class="form-group">
												<input type="text" name="Tuesdayday"  placeholder='Tuesday' value="Tuesday" class="form-control" value="<?php echo isset($contact_details['Tuesdayday'])?$contact_details['Tuesdayday']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Tuesdaytime_from"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Tuesdaytime_from'])?$contact_details['Tuesdaytime_from']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Tuesdaytime_to"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Tuesdaytime_to'])?$contact_details['Tuesdaytime_to']:''; ?>"/>
												</td>
											</tr>
											<tr>
												<td class="form-group">
												<input type="text" name="Wednesdayday"  placeholder='Wednesday' value="Wednesday" class="form-control" value="<?php echo isset($contact_details['Wednesdayday'])?$contact_details['Wednesdayday']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Wednesdaytime_from"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Wednesdaytime_from'])?$contact_details['Wednesdaytime_from']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Wednesdaytime_to"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Wednesdaytime_to'])?$contact_details['Wednesdaytime_to']:''; ?>"/>
												</td>
											</tr><tr>
												<td class="form-group">
												<input type="text" name="Thursdayday"  placeholder='Thursday' value="Thursday" class="form-control" value="<?php echo isset($contact_details['Thursdayday'])?$contact_details['Thursdayday']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Thursdaytime_from"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Thursdaytime_from'])?$contact_details['Thursdaytime_from']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Thursdaytime_to"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Thursdaytime_to'])?$contact_details['Thursdaytime_to']:''; ?>"/>
												</td>
											</tr><tr>
												<td class="form-group">
												<input type="text" name="Fridayday"  placeholder='Friday' value="Friday" class="form-control" value="<?php echo isset($contact_details['Fridayday'])?$contact_details['Fridayday']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Fridaytime_from"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Fridaytime_from'])?$contact_details['Fridaytime_from']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Fridaytime_to"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Fridaytime_to'])?$contact_details['Fridaytime_to']:''; ?>"/>
												</td>
											</tr><tr>
												<td class="form-group">
												<input type="text" name="Saturdayday"  placeholder='Saturday' value="Saturday" class="form-control" value="<?php echo isset($contact_details['Saturdayday'])?$contact_details['Saturdayday']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Saturdaytime_from"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Saturdaytime_from'])?$contact_details['Saturdaytime_from']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Saturdaytime_to"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Saturdaytime_to'])?$contact_details['Saturdaytime_to']:''; ?>"/>
												</td>
											</tr><tr>
												<td class="form-group">
												<input type="text" name="Sundayday"  placeholder='Sunday' value="Sunday" class="form-control" value="<?php echo isset($contact_details['Sundayday'])?$contact_details['Sundayday']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Sundaytime_from"  placeholder='Enter Name' class="form-control" value="<?php echo isset($contact_details['Sundaytime_from'])?$contact_details['Sundaytime_from']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="time" name="Sundaytime_to"  placeholder='Enter Name' class="form-control "  value="<?php echo isset($contact_details['Sundaytime_to'])?$contact_details['Sundaytime_to']:''; ?>"/>
												</td>
											</tr>
										</tbody>
									</table>	
								</div>
										
										
									</div>
									
								</div>
								<div class="row"> 
								<div class="col-lg-12">
									<h4 class="text-primary">Contact us form Email</h4>
								</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email </label>
											<input type="text" class="form-control" name="email" placeholder="Enter Email id" value="<?php echo isset($contact_details['email'])?$contact_details['email']:''; ?>">
										</div>
										
										
									</div>
									</div>
								<div class="row"> 
								<div class="col-lg-12">
								<h4 class="text-primary">Contact us </h4>
								</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" class="form-control" name="phone"  placeholder="Enter Phone Number" value="<?php echo isset($contact_details['phone'])?$contact_details['phone']:''; ?>">
										</div>
										
										
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email</label>
											<input type="text" class="form-control" name="email_id" placeholder="Enter Email" name="lastName" value="<?php echo isset($contact_details['email_id'])?$contact_details['email_id']:''; ?>">
										</div>
										
										
									</div>
									<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Paragraph</label>
								<!--<input type="text" class="form-control" placeholder="Enter Title" value="Plot No. 177, Sri Vani Nilayam, Hyderabad.">-->
								<textarea class="form-control"  name="paragraph" rows="5" placeholder="Enter here..."><?php echo isset($contact_details['paragraph'])?$contact_details['paragraph']:''; ?></textarea>
							</div>
						</div>
					</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Address</label>
											<textarea class="form-control" name="address" rows="5" placeholder="Enter Address"><?php echo isset($contact_details['address'])?$contact_details['address']:''; ?></textarea>
										</div>
										
										
									</div>
									
								</div>
								<div class="row"> 
								<div class="col-lg-12">
								<h4 class="text-primary">Social Connect</h4>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label>facebook Link</label>
											<input type="text" class="form-control" name="facebook_link"  placeholder="Enter facebook Link" value="<?php echo isset($contact_details['facebook_link'])?$contact_details['facebook_link']:''; ?>">
										</div>
										
										
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Twitter Link</label>
											<input type="text" class="form-control"  name="twitter_link" placeholder="Enter Twitter Link" value="<?php echo isset($contact_details['twitter_link'])?$contact_details['twitter_link']:''; ?>">
										</div>
										
										
									</div>
									
									
								</div>
								<div class="row"> 
								
									
									<div class="col-md-6">
										<div class="form-group">
											<label>Google+ Link</label>
											<input type="text" class="form-control" name="google_link" placeholder="Enter Google+ Link" value="<?php echo isset($contact_details['google_link'])?$contact_details['google_link']:''; ?>">
										</div>
										
										
									</div>
									
								</div>
								<div class="row"> 
								
									
									
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
		 if(i<=6){
      $('#addr'+i).html("<td><select  name='day[]' id='name"+i+"' class='form-control'  ><option>Select Day</option><option>Monday</option><option>Tuesday</option><option>Wednesday</option><option>Thursday</option><option>Friday</option><option>Saturday</option><option>Sunday</option></select> </td><td><input  name='time_from[]' id='mail"+i+"' type='time'   class='form-control input-md'></td><td><input  name='time_to[]' id='mail"+i+"' type='time'   class='form-control input-md'></td>");
		 }
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
			'day[]': {
                 validators: {
                        notEmpty: {
                            message: 'Day is required'
                        }
                    }
                },
			
			'time_from[]': {
                 validators: {
                        notEmpty: {
                            message: 'Time From is required'
                        }
                    }
                },
			'time_to[]': {
                 validators: {
                        notEmpty: {
                            message: 'Time Upto is required'
                        }
                    }
                },
			
			 email: {
              validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },
			
			
			 email_id: {
              validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },	
			paragraph:{	
				validators: {
					notEmpty: {
						message: 'Paragraph is required'
					}
				}
            },
                address: {
                validators: {
					notEmpty: {
						message: 'Address is required'
					}
				}
            },
				phone: {
                 validators: {
					notEmpty: {
						message: 'Phone Number is required'
					},
					regexp: {
					regexp:  /^[0-9._-]{10,14}$/,
					message:'Phone Number must be 10 digits'
					}
				
				}
            },
			
           facebook_link: {
                validators: {
					notEmpty: {
						message: 'facebook link is required'
					},
					regexp: {
					regexp: /^[www].[a-zA-Z0-9-].[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid facebook Link address. For example www.facebook.com	.'
					}
				}
            },

            twitter_link: {
                validators: {
					notEmpty: {
						message: 'Twitter Link is required'
					},
			        regexp: {
					regexp: /^[www].[a-zA-Z0-9-].[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid Twitter Link address. For example www.twitter.com.'
					}
				}
            },

			google_link: {
                validators: {
					notEmpty: {
						message: 'Google+ Link is required'
					},
				    regexp: {
					regexp: /^[www].[a-zA-Z0-9-].[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid Google+ Link address. For example www.google.com.'
					}
				}
            }
				
				
				
				
            }
			
        });

    });
</script>



