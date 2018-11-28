
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
											<tr id='addr0'>
												<td class="form-group">
													<select class="form-control" name="day[]">
													<option value="">Select Day</option>
													<option value="Monday">Monday</option>
													<option value="Tuesday">Tuesday</option>
													<option value="Wednesday">Wednesday</option>
													<option value="Thursday">Thursday</option>
													<option value="Friday">Friday</option>
													<option value="Saturday">Saturday</option>
													<option value="Sunday">Sunday</option>
												  </select>
												</td>
												<td class="form-group">
												<input type="time" name="time_from[]"  placeholder='Enter Name' class="form-control"/>
												</td>
												<td class="form-group">
												<input type="time" name="time_to[]"  placeholder='Enter Name' class="form-control"/>
												</td>
											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>	
									<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
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
											<input type="text" class="form-control" name="email" placeholder="Enter Email id">
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
											<input type="Number" class="form-control" name="phone"  placeholder="Enter Phone Number">
										</div>
										
										
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email</label>
											<input type="text" class="form-control" name="email_id" placeholder="Enter Email" name="lastName">
										</div>
										
										
									</div>
									<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Paragraph</label>
								<!--<input type="text" class="form-control" placeholder="Enter Title" value="Plot No. 177, Sri Vani Nilayam, Hyderabad.">-->
								<textarea class="form-control"  name="paragraph" rows="5" placeholder="Enter here..."></textarea>
							</div>
						</div>
					</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Address</label>
											<textarea class="form-control" name="address" rows="5" placeholder="Enter Address"></textarea>
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
											<input type="text" class="form-control" name="facebook_link"  placeholder="Enter facebook Link">
										</div>
										
										
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Twitter Link</label>
											<input type="text" class="form-control"  name="twitter_link" placeholder="Enter Twitter Link">
										</div>
										
										
									</div>
									
									
								</div>
								<div class="row"> 
								
									
									<div class="col-md-6">
										<div class="form-group">
											<label>Google+ Link</label>
											<input type="text" class="form-control" name="google_link" placeholder="Enter Google+ Link">
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
      $('#addr'+i).html("<td><select  name='day[]' id='name"+i+"' class='form-control'  ><option>Select Day</option><option>Monday</option><option>Tuesday</option><option>Wednesday</option><option>Thursday</option><option>Friday</option><option>Saturday</option><option>Sunday</option></select> </td><td><input  name='time_from[]' id='mail"+i+"' type='time'   class='form-control input-md'></td><td><input  name='time_to[]' id='mail"+i+"' type='time'   class='form-control input-md'></td>");

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
					regexp:  /^[0-9]{10}$/,
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
					message: 'Please enter a valid email address. For example www.facebook.com	.'
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
					message: 'Please enter a valid email address. For example www.twitter.com.'
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
					message: 'Please enter a valid email address. For example www.google.com.'
					}
				}
            }
				
				
				
				
            }
			
        });

    });
</script>



