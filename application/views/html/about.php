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
		  <?php if(isset($aboutus_brief_list) && count($aboutus_brief_list)>0){ ?>
		   <section class="ab-timeline-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="swin-sc swin-sc-title style-2">
                  <h3 class="title"><span>About us</span></h3>
                </div>
                <div data-item="6" class="swin-sc swin-sc-timeline-2">
                 
                  <div class="nav-slider">
                    <div class="slides">
					<?php foreach($aboutus_brief_list as $list){ ?>
                      <div class="timeline-content-item">
                        <p class="timeline-heading"><strong></strong><?php echo isset($list['title'])?$list['title']:''; ?></p>
                        <?php if(isset($list['aboutus_list']) && count($list['aboutus_list'])>0){ ?>
						<div class="timeline-content-detail">
						<?php foreach($list['aboutus_list'] as $li){ ?>
                          <p><?php echo isset($li['paragraph'])?$li['paragraph']:''; ?></p>
						<?php } ?>
                        </div>
							<?php } ?>
                      </div>
					<?php } ?>
				
                      
                    </div>
                  </div>
                </div>
              </div>
			 </section>
			  <?php } ?>
            
            
            <section class="counter-section-03 padding-top-100 padding-bottom-100">
              <div class="container"><img src="<?php echo base_url();?>assets/images/background/vegetable_01.png" alt="" class="img-left img-bg img-responsive"><img src="assets/images/background/vegetable_02.png" alt="" class="img-right img-bg img-responsive">
                <div class="swin-sc swin-sc-counter">
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="0" data-to="<?php echo isset($hot_dishes['dishes_count'])?$hot_dishes['dishes_count']:'';?>" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/Hot dishes</span></div>
                      <div class="counter-avatar"><img src="<?php echo base_url();?>assets/images/counter-1.png" alt="Pracha" class="img img-responsive"></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="0" data-to="<?php echo isset($chefs_count['chief_total_count'])?$chefs_count['chief_total_count']:'';?>" data-speed="3000" data-refresh-interval="5" class="number timer" >0</span><span class="caption">/Chefs</span></div>
                      <div class="counter-avatar"><img src="<?php echo base_url();?>assets/images/counter-2.png" alt="Pracha" class="img img-responsive"></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="0" data-to="<?php echo isset($food_items['items_count'])?$food_items['items_count']:'';?>" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/Food items</span></div>
                      <div class="counter-avatar"><img src="<?php echo base_url();?>assets/images/counter-1.png" alt="Pracha" class="img img-responsive"></div>
                    </div>
                    
					 <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="counter-info item"><span data-from="0" data-to="<?php echo isset($testimal_count['test_count'])?$testimal_count['test_count']:'';?>" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/Testimonal</span></div>
                      <div class="counter-avatar"><img src="<?php echo base_url();?>assets/images/counter-2.png" alt="Pracha" class="img img-responsive"></div>
                    </div>
					
                  </div>
                </div>
              </div>
            </section>
           
          </div>
        </div>
