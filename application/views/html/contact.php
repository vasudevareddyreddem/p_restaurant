<div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-contact">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Contact Us</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="ct-info-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-sm-12">
                    <div class="swin-sc swin-sc-title style-2 text-left">
                      <p class="title"><span>Get In Touch</span></p>
                    </div>
                    <div class="reservation-form style-02">
                      <div class="swin-sc swin-sc-contact-form light mtl style-full">
                        <form  method="post" action="<?php echo base_url('contactus/contactpost'); ?>">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" placeholder="Name" name="name" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                              <input type="email" placeholder="Email" name="email" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-phone"></div>
                              </div>
                              <input type="text" placeholder="Phone" name="phone" pattern="[1-9]{1}[0-9]{9}" maxlength="10"  class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <textarea placeholder="Message" name="message" class="form-control" required></textarea>
                          </div>
                          <div class="form-group">
                            <div class="swin-btn-wrap"><button type="submit" name="submit" class="swin-btn center form-submit"><span>Send</span></button></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="swin-sc swin-sc-title style-2 text-left">
                      <p class="title"><span>Contact Info</span></p>
                    </div>
                    <div class="swin-sc swin-sc-contact">
                      <div class="media item">
                        <div class="media-left">
                          <div class="wrapper-icon"><i class="icons fa fa-map-marker"></i></div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Restaurent </h4>
                          <div class="description"><?php echo isset($contactus['address'])?$contactus['address']:''; ?></div>
                        </div>
                      </div>
                    
                      <div class="media item">
                        <div class="media-left">
                          <div class="wrapper-icon"><i class="icons fa fa-phone"></i></div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Phone Number</h4>
                          <div class="description"><?php echo isset($contactus['phone'])?$contactus['phone']:''; ?></div>
                        </div>
                      </div>
                      <div class="media item">
                        <div class="media-left">
                          <div class="wrapper-icon"><i class="icons fa fa-envelope"></i></div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Mail</h4>
                          <div class="description">
                            <p><?php echo isset($contactus['email_id'])?$contactus['email_id']:''; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="map-section padding-bottom-100">
              <div class="container">
			  <?php echo isset($contactus['iframe_address'])?$contactus['iframe_address']:''; ?>
              </div>
            </section>
          </div>
        </div>
