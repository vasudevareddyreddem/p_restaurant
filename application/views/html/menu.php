
<div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Menu Classic</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
          
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
		  
		  
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
            
          </div>
        </div>
	