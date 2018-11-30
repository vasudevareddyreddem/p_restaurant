
<div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-reservation">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Reservation</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="section-reservation-form padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2">
                    <h3 class="title"><span>Reservation Form</span></h3>
                  </div>
                  <div class="reservation-form">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <p class="reservation-form-title text-center">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline:<span class="text-default"> 040-48541273</span></p>
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
                  <div class="section-deco"><img src="<?php echo base_url(); ?>assets/images/pages/reservation-showcase.png" alt="pracha" class="img-deco"></div>
                </div>
              </div>
            </section>
            <section data-bottom-top="background-position: 50% 100px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="section-reservation-service padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2 light">
                    <h3 class="title"><span>pracha Best Service</span></h3>
                  </div>
                  <div class="swin-sc swin-sc-iconbox light">
                    <div class="row">
                      <?php $cnt=1; foreach($servies_brief as $list){ ?>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                          <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number"><?php echo $cnt; ?></span></div>
                          <h4 class="title"><?php echo $list['title'];?></h4>
                          <div class="description"><?php echo $list['paragraph'];?></div>
                        </div>
                      </div>
                      <?php $cnt++;} ?>
                     
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
          </div>
        </div>
