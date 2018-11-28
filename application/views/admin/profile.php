
             <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">My Profile</h4>
						</div>
						
						
					</div>
					<div class="card-box">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
									
										<div class="profile-img">
										<?php if($userdetails['profile_pic']!=''){ ?>
											<a href="#"><img class="avatar" src="<?php echo base_url('assets/adminprofilepic/'.$userdetails['profile_pic']); ?>" alt=""></a>
											<?php }else{ ?>
								         <img src="<?php echo base_url();?>assets/vendor/img/user-06.jpg" class="img-circle" alt="User Image" />
									      <?php } ?>
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-5">
												<div class="profile-info-left">
													<h3 class="user-name" style="margin-top:20px;"><?php echo $userdetails['name']; ?></h3>
													
												
												</div>
											</div>
											<div class="col-md-7">
												<ul class="personal-info">
													<li>
														<span class="title">Phone:</span>
														<span class="text"><a href="#"><?php echo $userdetails['mobile_number']; ?></a></span>
													</li>
													<li>
														<span class="title">Email:</span>
														<span class="text"><a href="#"><?php echo $userdetails['email']; ?></a></span>
													</li>
												
													<li>
														<span class="title">Address:</span>
														<span class="text"><?php echo $userdetails['current_address']; ?></span>
													</li>
													<li>
														<span class="title">Gender:</span>
														<span class="text"><?php echo $userdetails['gender']; ?></span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
					
						<div class="col-md-12">
							<div class="card-box">
							
								<div class="col-md-6">
									<h3 class="card-title">Basic Information</h3>
									<div class="experience-box">
										<ul class="experience-list">
											<li>
												<div class="experience-user">
													<div class="before-circle"></div>
												</div>
												<div class="experience-content">
													<div class="timeline-content">
														<a href="#/" class="name"> Name </a>
														<div><?php echo $userdetails['name']; ?></div>
													</div>
												</div>
											</li>
										
											
											<li>
												<div class="experience-user">
													<div class="before-circle"></div>
												</div>
												<div class="experience-content">
													<div class="timeline-content">
														<a href="#/" class="name">Email </a>
														<div><?php echo $userdetails['email']; ?></div>
														
													</div>
												</div>
											</li>
											<li>
												<div class="experience-user">
													<div class="before-circle"></div>
												</div>
												<div class="experience-content">
													<div class="timeline-content">
														<a href="#/" class="name">Mobile</a>
														<div><?php echo $userdetails['mobile_number']; ?></div>
														
													</div>
												</div>
											</li>
											
										</ul>
									</div>
								</div>
								<div class="col-md-6">
								
									<div class="experience-box">
										<ul class="experience-list">
											
											
											
											<li>
												<div class="experience-user">
													<div class="before-circle"></div>
												</div>
												<div class="experience-content">
													<div class="timeline-content">
														<a href="#/" class="name">Current Address</a>
														<div><?php echo $userdetails['current_address']; ?> </div>
														
													</div>
												</div>
											</li>
											<li>
												<div class="experience-user">
													<div class="before-circle"></div>
												</div>
												<div class="experience-content">
													<div class="timeline-content">
														<a href="#/" class="name">Permanent Address</a>
														<div><?php echo $userdetails['premenent_address']; ?> </div>
														
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								
								<div class="clearfix">&nbsp;</div>
							</div>
							
						</div>
					</div>
                </div>
				
            </div>

