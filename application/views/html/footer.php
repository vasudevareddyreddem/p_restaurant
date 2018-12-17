<footer>
          <div class="subscribe-section"><img src="<?php echo base_url();?>assets/images/background/bg5.png" alt="" class="img-subscribe">
            <div class="container">
              <div class="subscribe-wrapper">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="subscribe-heading">
                      <h3 class="title">Subscribe Us Now</h3>
                      <div class="des">Get more news and delicious dishes everyday from us</div>
                    </div>
                    <form class="widget-newsletter" action="<?php echo base_url('contactus/subscribe'); ?>" method="post">
                      <div class="row col-md-12"><input type="email" placeholder="Email" name="email" class="form-control ">
					  <button type="submit" name="submit" class="">Submit</button>
					  </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-top"></div>
          <div class="footer-main">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="ft-widget-area">
                    <div class="ft-area1">
                      <div class="swin-wget swin-wget-about">
                        <div class="clearfix"><a class="wget-logo"><img style="height:100px;width:auto;" src="<?php echo base_url();?>assets/images/logo.png" alt="" class="img img-responsive"></a>
                          <ul class="socials socials-about list-unstyled list-inline">
                            <li><a target="_blank" href="http://<?php echo isset($contactus['facebook_link'])?$contactus['facebook_link']:''; ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="http://<?php echo isset($contactus['twitter_link'])?$contactus['twitter_link']:''; ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="http://<?php echo isset($contactus['pinterest_link'])?$contactus['pinterest_link']:''; ?>"><i class="fa fa-pinterest"></i></a></li>
                            <li><a target="_blank" href="http://<?php echo isset($contactus['google_link'])?$contactus['google_link']:''; ?>"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                        <div class="wget-about-content">
                          <p><?php echo $contactus['paragraph'];?></P>
                        </div>
                        <div class="about-contact-info clearfix">
                          <div class="address-info">
                            <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="info-content">
                              <p><?php echo $contactus['address'];?></p>
                            </div>
                          </div>
                          <div class="phone-info">
                            <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                            <div class="info-content">
                              <p><?php echo $contactus['phone'];?></p>
                            </div>
                          </div>
                          <div class="email-info">
                            <div class="info-icon"><i class="fa fa-envelope"></i></div>
                            <div class="info-content">
                             <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><?php echo $contactus['email_id'];?></a> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				
                <div class="col-lg-4">
                  <div class="ft-fixed-area">
                    <div class="reservation-box">
                      <div class="reservation-wrap">
                        <h3 class="res-title">Open Hour</h3>
                        <div class="res-date-time">
                         
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
									<p>Monday</p>
								</div>
								<div class="res-date-dot">.......................................</div>
								
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
								<p><?php echo isset($contactus['Mondaytime_from'])?$contactus['Mondaytime_from']:''; ?>-<?php echo isset($contactus['Mondaytime_to'])?$contactus['Mondaytime_to']:''; ?></p>
								</div>
                            </div>
                            <div class="clearfix"></div>
                          </div> 
						  <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
									<p>Tuesday</p>
								</div>
								<div class="res-date-dot">.......................................</div>
								
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
								<p><?php echo isset($contactus['Tuesdaytime_from'])?$contactus['Tuesdaytime_from']:''; ?>-<?php echo isset($contactus['Tuesdaytime_to'])?$contactus['Tuesdaytime_to']:''; ?></p>
								</div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
						  <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
									<p>Wednesday</p>
								</div>
								<div class="res-date-dot">.......................................</div>
								
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
								<p><?php echo isset($contactus['Wednesdaytime_from'])?$contactus['Wednesdaytime_from']:''; ?>-<?php echo isset($contactus['Wednesdaytime_to'])?$contactus['Wednesdaytime_to']:''; ?></p>
								</div>
                            </div>
                            <div class="clearfix"></div>
                          </div> 
						  <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
									<p>Thursday</p>
								</div>
								<div class="res-date-dot">.......................................</div>
								
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
								<p><?php echo isset($contactus['Thursdaytime_from'])?$contactus['Thursdaytime_from']:''; ?>-<?php echo isset($contactus['Thursdaytime_to'])?$contactus['Thursdaytime_to']:''; ?></p>
								</div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
						  <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
									<p>Friday</p>
								</div>
								<div class="res-date-dot">.......................................</div>
								
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
								<p><?php echo isset($contactus['Fridaytime_from'])?$contactus['Fridaytime_from']:''; ?>-<?php echo isset($contactus['Fridaytime_to'])?$contactus['Fridaytime_to']:''; ?></p>
								</div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
						  <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
									<p>Saturday</p>
								</div>
								<div class="res-date-dot">.......................................</div>
								
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
								<p><?php echo isset($contactus['Saturdaytime_from'])?$contactus['Saturdaytime_from']:''; ?>-<?php echo isset($contactus['Saturdaytime_to'])?$contactus['Saturdaytime_to']:''; ?></p>
								</div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
						  <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
									<p>Sunday</p>
								</div>
								<div class="res-date-dot">.......................................</div>
								
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
								<p><?php echo isset($contactus['Sundaytime_from'])?$contactus['Sundaytime_from']:''; ?>-<?php echo isset($contactus['Sundaytime_to'])?$contactus['Sundaytime_to']:''; ?></p>
								</div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
						  
						  
                        </div>
                        <h3 class="res-title">Reservation Numbers</h3>
                        <p class="res-number"><?php echo $contactus['phone'];?></p>
                      </div>
                    </div>
                  </div>
                </div>
				
				
              </div>
            </div>
          </div>
        </footer><a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
      </div>
      <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
        <div class="loader-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
            <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
          </svg>
      
          <div class="sk-circle sk-circle-out">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- jQuery-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- Vendors-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.swipebox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.countTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.appear.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/parallax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/gmaps.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/audio.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.vide.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/svgLoader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/classie.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sidebarEffects.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/skrollr.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/js.cookie.js"></script>
    
    <!-- Own script-->
    <script src="<?php echo base_url(); ?>assets/js/layout.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/elements.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/widget.js"></script>
  </body>


</html>