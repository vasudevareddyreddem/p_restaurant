
        <div class="page-container">
          <div class="top-header top-bg-parallax">
            <div data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/images/slider/header-bg.jpg" class="slides parallax-window">
              <div class="slide-content slide-layout-02">
                <div class="container">
                  <div class="slide-content-inner"><img src="<?php echo base_url();?>assets/images/slider/slider2-icon.png" data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="500" alt="Pracha" class="slide-icon img img-responsive animated">
                    <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1000" class="slide-title animated">PRACHA RESTAURANT</h3>
                    <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="line-before"></span><span class="line-after"></span><span class="text"><span>Tasty</span><span>Delicious</span><span>Savoury</span></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="about-us-session padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 colsm-12"><img src="<?php echo base_url();?>assets/images/pages/home1-about.jpg" alt="" class="img img-responsive wow zoomIn"></div>
                  <div class="col-md-6 col-sm-12">
                    <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                      <p class="top-title"><span>Discover</span></p>
                      <h3 class="title">Our Story</h3>
                    </div>
                    <p class="des font-bold text-center">WE HAVE THE GLORY BEGINING IN RESTAURANT BUSINESS</p>
                    <p class="des margin-bottom-20 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ullam laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="swin-btn-wrap center"><a href="<?php echo base_url('preview/aboutus'); ?>" class="swin-btn center form-submit btn-transparent"> <span>	About Us</span></a></div>
                  </div>
                </div>
              </div>
            </section>
			<?php if(isset($menu_list)&& count($menu_list)>0){ ?>
			<section class="product-sesction-01 padding-bottom-100 padding-top-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Our Menu</span></p>
                      <h3 class="title">Tasty And Good Price</h3>
                    </div>
                    <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                      <div class="row">
                        <div class="col-md-2"></div>
                        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
                          <?php foreach($menu_list as $list){?>
						  <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                              <h5 class="cat-title"><?php echo isset($list['food_type'])?$list['food_type']:''; ?></h5>
                            </div>
                          </div>
						  <?php } ?>
                        </div>
                        <div class="col-md-2"></div>
                      </div>
                      <div class="row">
                        <div class="nav-slider">
						<?php foreach($menu_list as $list){?>
						
                          <div class="tab-content">
							<div class="col-md-5 col-sm-12">
							<?php if(isset($list['food_img_list']) && count($list['food_img_list'])>0){ ?>
								  <?php foreach($list['food_img_list'] as $lis){ ?>
								  
								  <?php } ?>
							  <div class="cat-wrapper">
								<div class="item"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-responsive img-full"></div>
							  </div>
							</div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
							  <?php if(isset($list['item_list']) && count($list['item_list'])>0){ ?>
								  <?php foreach($list['item_list'] as $li){ ?>
										<div class="item product-01">
										  <div class="item-left">
											<h5 class="title"><?php echo isset($li['name'])?$li['name']:''; ?></h5>
											<div class="des"><?php echo isset($li['description'])?$li['description']:''; ?> </div>
										  </div>
										  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="">₹</span><?php echo isset($li['price'])?$li['price']:''; ?></span></div>
										</div>
									<?php } ?>
							  <?php } ?>
                                
                              </div>
                            </div>
                          </div>
						<?php } ?>
                          
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
			
			<?php } ?>
			<?php if(isset($daily_special_list) && count($daily_special_list)>0){ ?>
            <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="<?php echo base_url('assets/menu_bar_brief/'.$daily_special_list['banner']); ?>" alt="" class="img-responsive img-decorate">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-4"></div>
                  <div class="col-lg-6 col-md-8">
                    <div class="swin-sc swin-sc-title text-left light">
                      <p class="top-title"><span>chef choise</span></p>
                      <h3 class="title">Daily Special</h3>
                    </div>
					<?php if(isset($daily_special_list['item_list']) && count($daily_special_list['item_list'])>0){ ?>
                    <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
                      <div class="row">
                        <div class="col-md-12">
                          <div data-height="200" class="products nav-slider">
						  
						  <?Php foreach($daily_special_list['item_list'] as $list){ ?>
                            <div class="item product-01">
                              <div class="item-left"><img src="<?php echo base_url('assets/menu_bar_brief/'.$list['image']); ?>" alt="" class="img img-responsive">
                                <div class="content-wrapper"><a class="title"><?php echo isset($list['name'])?$list['name']:''; ?></a>
                                  <div class="dot">.....................................................................</div>
                                  <div class="des"><?php echo isset($list['description'])?$list['description']:''; ?></div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="">₹</span><?php echo isset($list['price'])?$list['price']:''; ?></span></div>
                            </div>
						  <?php } ?>
                           
                          </div>
                        </div>
                      </div>
                    </div>
				<?php } ?>
                  </div>
                </div>
              </div>
            </section>
			<?php } ?>
			
		       <?PHP if(isset($menu_special)&& count($menu_special)>0) {?>
             <section class="product-sesction-01 padding-bottom-100 padding-top-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Our Menu</span></p>
                      <h3 class="title">Tasty And Good Price</h3>
                    </div>
                    <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
					
					
                      <div class="row">
                        <div class="col-md-2"></div>
                        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
						<?Php foreach($menu_special as $lis){ ?>
						<?Php foreach($lis['menus_list'] as $list){ ?>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
							
                              <h5 class="cat-title"><?php echo isset($list['food_type'])?$list['food_type']:''; ?></h5>
							
                            </div>
                          </div>
						<?PHP }?>
					    <?PHP }?>
                        </div>
                        <div class="col-md-2"></div>
                      </div>
					
                      <div class="row">
                        <div class="nav-slider">
					 <?Php foreach($menu_special as $lis){ ?>
					 <?Php foreach($lis['menus_list'] as $list){ ?>
                          <div class="tab-content">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="<?php echo base_url('assets/menu_bar_brief/'.$list['image']);?>" alt="" class="img img-responsive img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
							
                              <div class="products">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title"><?php echo isset($list['name'])?$list['name']:''; ?></h5>
                                    <div class="des"><?php echo isset($list['description'])?$list['description']:''; ?></div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="">₹</span><?php echo isset($list['price'])?$list['price']:''; ?></span></div>
                                </div>
                               
                              </div>
							  
                            </div>
                          </div>
                          
                           <?PHP }?>
					     <?PHP }?>
                        </div>
                      </div>
					
					
                    </div>
					
					
                  </div>
                </div>
              </div>
            </section>
			 <?PHP }?>
			
				<?php if(isset($testmonial_list) && count($testmonial_list)>0){ ?>
			
            <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" class="testimonial-section-01 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Testimonial</span></p>
                      <h3 class="title white-color">Our Customer Says</h3>
                    </div>
                    <div class="row">
					
                      <div class="col-md-10 col-md-offset-1">
                        <div class="swin-sc swin-sc-testimonial style-1">
						
                          <div class="main-slider flexslider">
						  
                            <div class="slides">
							<?php foreach($testmonial_list as $list){?>

                              <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                <div class="testi-content">
                                  <p><?php echo isset($list['paragraph'])?$list['paragraph']:''; ?></p>
                                </div>
                                <div class="testi-info"><span class="name"><?php echo isset($list['name'])?$list['name']:''; ?></span> <span class="position"><?php echo isset($list['designation'])?$list['designation']:''; ?></span></div>
                              </div>
							  <?php } ?>
                            </div>
                          </div>
						
						  
                          <div data-width="150" class="nav-slider">
					
                            <ul class="slides list-inline">
								  	<?php foreach($testmonial_list as $list){?>
                              <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="<?php echo base_url('assets/adminprofilepic/'.$list['image']);?>" alt="" class="img img-responsive swin-transition"></a></li>
							<?php }?>                           
						   </ul>
                          </div>
							
                        </div>
                      </div>
					

                    </div>
                  </div>
                </div>
              </div>
            </section>
			
								<?php } ?>
			
			
			
			
			<?php if(isset($chefs_list) && COUNT($chefs_list)>0){ ?>
            <section class="team-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Meet Our</span></p>
                      <h3 class="title">Awesome Master Chefs</h3>
                    </div>
                    <div class="swin-sc swin-sc-team-slider">
					 <?php foreach($chefs_list as $list){ ?>
                      <div class="team-item swin-transition wow fadeInLeft">
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="<?php echo base_url('assets/adminprofilepic/'.$list['image']);?>" alt="<?php echo isset($list['name'])?$list['name']:'';?>" class="img img-responsive"></div>
                        </div>
                        <p class="team-name"><?php echo isset($list['name'])?$list['name']:'';?></p>
                        <p class="team-position"><?php echo isset($list['specialist'])?$list['specialist']:'';?></p>
                        <hr>
                        
                      </div>
					 <?php } ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </section>
			<?php } ?>
            <section class="reservation-section-02 padding-top-100 padding-bottom-100">
              <div class="container"><img src="<?php echo base_url();?>assets/images/background/home2-img-deco.png" alt="" class="img-deco img-responsive">
                <div class="row">
                  <div class="col-md-6 left-wrapper">
                    <div class="form-dark-wrapper">
                      <div class="swin-sc swin-sc-title style-3 light">
                        <p class="title"><span>Make A Reservation</span></p>
                        <p class="subtitle">You can call us directly at <span class="text-default"> 225-88888</span></p>
                      </div>
                      <div class="swin-sc swin-sc-contact-form dark mtl">
                        <form>
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
                            <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"> <span>	Find Table</span></a></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="video-wrapper equal-height deco-abs">
                <div class="swin-sc swin-sc-video">
                  <div class="play-wrap"><a href="https://vimeo.com/27814858" class="play-btn swipebox"><i class="play-icon fa fa-play"></i></a></div>
                </div>
              </div>
            </section>
		<?php if(isset($servies_list) && count($servies_list)>0){?>
            <section class="service-section-02 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="swin-sc swin-sc-title">
                  <p class="top-title"><span>Our Service</span></p>
                  <h3 class="title">What We Focus On</h3>
                </div>
                <div class="swin-sc swin-sc-iconbox">
                  <div class="row">
                    <?php $cnt=1; foreach($servies_list as $list){?>
					
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number"><?php echo $cnt;?></span></div>
                        <h4 class="title"><?php echo $list['name'];?></h4>
                        <div class="description"><?php echo $list['paragraph'];?></div>
                      </div>
                    </div>
                    
                    <?php $cnt++;}?>
                  </div>
                </div>
              </div>
            </section>
		<?php }?>
			
			<?php if(isset($gallery_list) && count($gallery_list)>0){?>
            <section class="gallery-section-01 padding-top-100">
              <div class="swin-sc swin-sc-title">
                <p class="top-title"><span>Our Gallery</span></p>
                <h3 class="title white-color">Pracha Hot Dishes</h3>
              </div>
			  
              <div class="swin-sc swin-sc-isotope">
                <div class="grid">
                  <div class="grid-sizer col-sm-1"></div>
                 <?php foreach($gallery_list as $list){?>
                  <div class="grid-item col-sm-2 grid-item-h1">
                    <div class="grid-wrap-item"><a href="#" class="gallery-title title"><?php echo $list['title'];?></a><a href="<?php echo base_url(); ?>assets/images/gallery/gallery-5.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="<?php echo base_url('assets/adminprofilepic/'.$list['image']);?>" alt="" class="img img-responsive"></div>
                    </div>
                  </div>
                 <?php }?>
                </div>
              </div>
			   
			  
            </section>
			<?php }?>
			<?php if(isset($blog_list) && count($blog_list)>0){ ?>
            <section class="blog-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Updated from</span></p>
                      <h3 class="title">our featured blog</h3>
                    </div>
                    <div class="swin-sc swin-sc-blog-grid"></div>
                  </div>
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-blog-grid">
                      <div class="row">
					  <?php foreach($blog_list as $list){?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div data-wow-delay="0s" class="blog-item swin-transition item wow fadeInUpShort">
                            <div class="blog-info clearfix">
                              <div class="blog-info-item blog-view">
                                <p><i class="fa fa-eye"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-comment">
                                <p><i class="fa fa-comment"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-author">
                                <p><span>Post By </span><a href="javascript:void(0)">Admin</a></p>
                                <p></p>
                              </div>
                            </div>
                            <div class="blog-featured-img"><img src="<?php echo base_url('assets/adminprofilepic/'.$list['pic']);?>" alt="" class="img img-responsive"></div>
                            <div class="blog-content">
                              <div class="blog-date"><span class="day"><?php echo $list['date'];?></span></div>
                              <h3 class="blog-title"><a href="javascript:void(0)" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                              <p class="blog-description"><?php echo $list['procedure'];?></p>
                              <div class="blog-readmore"><a href="javascript:void(0)" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                            </div>
                          </div>
                        </div>
						
					  <?php }?>
                       
                        
						
						
						
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
			<?php } ?>
			
          </div>
        </div>
      