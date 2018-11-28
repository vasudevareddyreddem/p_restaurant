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
            <section class="ab-timeline-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="swin-sc swin-sc-title style-2">
				<?php foreach($aboutus_brief_list as $list){?>
                  <h3 class="title"><span><?php echo $list['title'];?></span></h3>
				<?php }?>
                </div>
                <div data-item="6" class="swin-sc swin-sc-timeline-2">
                 
                  <div class="nav-slider">
                    <div class="slides">
                      <div class="timeline-content-item">
                       
                        <div class="timeline-content-detail">
                          <p>
						  <?php foreach($aboutus_brief_list as $list){?>
						  
						  <?php foreach($list['aboutus_list'] as $li){ ?>
						  <?php echo $li['paragraph'].'<br>'; ?>
						  <?php } ?>
						  
						  <?php }?>
						  </p>
                        </div>
                      </div>
                      
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            
            
            <section class="counter-section-03 padding-top-100 padding-bottom-100">
              <div class="container"><img src="<?php echo base_url();?>assets/images/background/vegetable_01.png" alt="" class="img-left img-bg img-responsive"><img src="assets/images/background/vegetable_02.png" alt="" class="img-right img-bg img-responsive">
                <div class="swin-sc swin-sc-counter">
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="50" data-to="103" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/dishes</span></div>
                      <div class="counter-avatar"><img src="<?php echo base_url();?>assets/images/counter-1.png" alt="Pracha" class="img img-responsive"></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="2300" data-to="2389" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/customers</span></div>
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
                          <p class="reservation-form-title text-center">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline:<span class="text-default"> 040-48541273</span></p>
                        </div>
                      </div>
                      <div class="swin-sc swin-sc-contact-form light mtl">
                        <form>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" placeholder="Username" class="form-control">
                            </div>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                              <input type="text" placeholder="Email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-phone"></div>
                              </div>
                              <input type="text" placeholder="Phone" class="form-control">
                            </div>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-male"></i></div>
                              <select type="text" placeholder="People" class="form-control">
                                <option>1 person</option>
                                <option>2 People</option>
                                <option>3 People</option>
                                <option>4 People</option>
                                <option>5 People</option>
                                <option>6 People</option>
                                <option>7 People</option>
                                <option>8 People</option>
                                <option>9 People</option>
                                <option>10 People</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                              <input type="text" placeholder="Date" class="form-control datepicker">
                            </div>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-clock-o"></div>
                              </div>
                              <select type="text" placeholder="Time" class="form-control">
                                <option>7:00 AM</option>
                                <option>8:00 AM</option>
                                <option>9:00 AM</option>
                                <option>10:00 AM</option>
                                <option>11:00 AM</option>
                                <option>12:00 AM</option>
                                <option>1:00 PM</option>
                                <option>2:00 PM</option>
                                <option>3:00 PM</option>
                                <option>4:00 PM</option>
                                <option>5:00 PM</option>
                                <option>6:00 PM</option>
                                <option>7:00 PM</option>
                                <option>8:00 PM</option>
                                <option>9:00 PM</option>
                                <option>10:00 PM</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"> <span>Book Table</span></a></div>
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
