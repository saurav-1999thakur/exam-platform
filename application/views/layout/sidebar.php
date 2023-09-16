		<?php
		$url1 = $this->uri->segment(1);
		$url2 = $this->uri->segment(2);
		$url = $url1.'/'.$url2;
		$sess = $this->session->userdata('login_data'); ?>
		<!--begin::Navs-->
						<div class="app-sidebar-navs flex-column-fluid" id="kt_app_sidebar_navs">
							<div id="kt_app_sidebar_navs_wrappers" class="hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header, #kt_app_sidebar_projects" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
								<!--begin::Sidebar menu-->
								<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										
										<span class="menu-link">
											<span class="menu-icon">
												<i class="fonticon-house fs-2"></i>
											</span>
											<span class="menu-title">Admin</span>
											<span class="menu-arrow"></span>
											
										</span>
										
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion menu-active-bg">
											<!--begin:Menu item-->
											
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <?php echo ($url=='Home_controller/index')?'active':'';?>" href="<?php echo base_url('Home_controller/index');?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Dashboard</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										<!--begin:Menu item-->
										<?php if($sess['user_type']=='3'){?>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <?php echo ($url=='Teacher_controller/teacher_list')?'active':'';?>" href="<?php echo base_url('Teacher_controller/teacher_list');?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Teacher List</span>
												</a>
												<!--end:Menu link-->
											</div>
											<?php }?>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<?php if($sess['user_type']=='3'){?>
											<div class="menu-item ">
												<!--begin:Menu link-->
												<a class="menu-link <?php echo ($url=='Subject_controller/subject')?'active':'';?>" href="<?php echo base_url('Subject_controller/subject');?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Subjects</span>
												</a>
												<!--end:Menu link-->
											</div>
											<?php } ?>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<?php if($sess['user_type']=='3'){?>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <?php echo ($url=='Student_controller/student_list')?'active':'';?>" href="<?php echo base_url('Student_controller/student_list');?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Student List</span>
												</a>
												<!--end:Menu link-->
											</div>
											<?php } ?>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<?php if($sess['user_type']=='3'){?>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <?php echo ($url=='Attendance_controller/attendance_list')?'active':'';?>" href="<?php echo base_url('Attendance_controller/attendance_list');?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Attendance List</span>
												</a>
												<!--end:Menu link-->
											</div>
											<?php } ?>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<?php if($sess['user_type']=='3' || $sess['user_type']=='2'){?>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <?php echo ($url=='Paper_controller/paper_set')?'active':'';?>" href="<?php echo base_url('Paper_controller/paper_set');?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Question Paper</span>
												</a>
												<!--end:Menu link-->
											</div>
											<?php } ?>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<?php if($sess['user_type']=='1'){?>
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link <?php echo ($url=='Paper_controller/paper_attempt')?'active':'';?>" href="<?php echo base_url('Paper_controller/paper_attempt');?>">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Paper Attampt</span>
												</a>
												<!--end:Menu link-->
											</div>
											<?php }?>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end::Sidebar menu-->
							</div>
						</div>
						<!--end::Navs-->
					</div>
					<!--end::Sidebar-->
					