<div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-about">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">About Us</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
		  <?php if(isset($aboutus_brief_list) && count($aboutus_brief_list)){?>
            <section class="ab-timeline-section padding-top-100 padding-bottom-100">
              <div class="container">
			  <?php foreach($aboutus_brief_list as $list){?>
                <div class="swin-sc swin-sc-title style-2">
				
                  <h3 class="title"><span><?php echo $list['title'];?></span></h3>
				
                </div>
                <div data-item="6" class="swin-sc swin-sc-timeline-2">
                 
                  <div class="nav-slider">
                    <div class="slides">
                      <div class="timeline-content-item">
                       
                        <div class="timeline-content-detail">
                          <p>
						 
						  
						  <?php foreach($list['aboutus_list'] as $li){ ?>
						  <?php echo $li['paragraph'].'<br>'; ?>
						  
						  
						  <?php }?>
						  </p>
                        </div>
                      </div>
                      
                      
                      
                    </div>
                  </div>
                </div>
				<?php }?>
              </div>
            </section>
		  <?php } ?>
            
            
            <section class="counter-section-03 padding-top-100 padding-bottom-100">
              <div class="container"><img src="<?php echo base_url();?>assets/images/background/vegetable_01.png" alt="" class="img-left img-bg img-responsive"><img src="assets/images/background/vegetable_02.png" alt="" class="img-right img-bg img-responsive">
                <div class="swin-sc swin-sc-counter">
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="0" data-to="<?php echo isset($food_count['food_total_count'])?$food_count['food_total_count']:'';?>" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/dishes</span></div>
                      <div class="counter-avatar"><img src="<?php echo base_url();?>assets/images/counter-1.png" alt="Pracha" class="img img-responsive"></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="0" data-to="<?php echo isset($chefs_count['chief_total_count'])?$chefs_count['chief_total_count']:'';?>" data-speed="3000" data-refresh-interval="5" class="number timer" >0</span><span class="caption">/Chefs</span></div>
                      <div class="counter-avatar"><img src="<?php echo base_url();?>assets/images/counter-2.png" alt="Pracha" class="img img-responsive"></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="1" data-to="20" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/awards</span></div>
                      <div class="counter-avatar"><img src="<?php echo base_url();?>assets/images/counter-3.png" alt="Pracha" class="img img-responsive"></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="2500" data-to="2589" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/working hours</span></div>
                      <div class="counter-avatar"><img src="<?php echo base_url();?>assets/images/counter-4.png" alt="Pracha" class="img img-responsive"></div>
                    </div>
					
                  </div>
                </div>
              </div>
            </section>
            <section class="section-reservation-form padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2">
                    <h3 class="title"><span>Make Reservation</span></h3>
                  </div>
                  <div class="reservation-form layout-2">
                    <div class="reservation-form-inner">
                      <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                          <p class="reservation-form-title text-center">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline:<span class="text-default"> <?php echo isset($contactus['phone'])?$contactus['phone']:''; ?></span></p>
                        </div>
                      </div>
                      <div class="swin-sc swin-sc-contact-form light mtl">
                        <form action="<?php echo base_url('preview/reservation_post'); ?>" method="post">
                          <div class="form-group ">
							<div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-user"></div>
                              </div>
                              <input type="text" placeholder="Name" name="name" class="form-control" required>
                            </div>
							<div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-envelope"></div>
                              </div>
                              <input type="email" placeholder="Email" name="email" class="form-control" required>
                            </div>
						  </div>
						  <div class="form-group">
                            
							<div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-phone"></div>
                              </div>
                              <input type="text" placeholder="Phone" name="phone" class="form-control" required>
                            </div>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-male"></i></div>
                              <select type="text" placeholder="People" name="people" class="form-control" required>
                                <option value="">Select</option>
								<?php for($i=1;$i<=20;$i++){ ?>
								  <option value="<?php echo $i; ?> persons"><?php echo $i; ?> persons</option>
								<?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                              <input type="text" placeholder="Date" name="date" class="form-control datepicker" required>
                            </div>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-clock-o"></div>
                              </div>
                              <select type="text" placeholder="Time" name="time" class="form-control" required>
							  <option value="">Select</option>
							  <?php if(isset($time_list)&& count($time_list)>0){ ?>
							  <?php foreach($time_list as $list){ ?>
									<option value="<?php echo $list; ?>"><?php echo $list; ?></option>
							  <?php }?>
							  <?php }else{?>
								<option value="7:00 AM">12:00 Pm</option>
                                <option value="8:00 AM">1:00 Pm</option>
							  <?php } ?>
							  
                                
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="swin-btn-wrap center"><button type="submit" class="swin-btn center form-submit"> <span>	Find Table</span></button></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
