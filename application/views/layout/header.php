<?php 
	$url1 = $this->uri->segment(1);
	$url2 = $this->uri->segment(2);
	$url = $url1.'/'.$url2;
	$sess = $this->session->userdata('login_data');
?>

<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>Admin || Saurav Thakur</title>
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/media/logos/pic.png" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?php echo base_url();?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo base_url();?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!-- <link rel="stylesheet" href="../../../assets/admin_assets/font-awesome-4.7.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" class="app-default">

		<!--begin::Modal - change password-->
		<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Change Password</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
						<!--begin::Form-->
						<form id="kt_modal_new_card_form" class="form" action="<?php echo base_url('ChangePassword_controller/change_pwd');?>" method="POST">
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
									<span class="required">User ID</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify user id"></i>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" name="user_id" value="<?php echo $sess['login_id'];?>"/>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">
								<!--begin::Label-->
								<label class="required fs-6 fw-semibold form-label mb-2">Change Password</label>
								<!--end::Label-->
								<!--begin::Input wrapper-->
								<div class="position-relative">
									<!--begin::Input-->
									<input type="password" class="form-control form-control-solid" placeholder="Enter Your New Password" name="password"/>
									<!--end::Input-->       
								</div>
								<!--end::Input wrapper-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center pt-15">
								<button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">cancel</button>
								<button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
									<span class="indicator-label">submit</span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - change password-->
		
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex flex-stack" id="kt_app_header_container">
						<!--begin::Sidebar toggle-->
						<div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--begin::Logo image-->
							<a href="dashboard.php">
								<img alt="Logo" src="<?php echo base_url();?>assets/media/logos/demo36.svg" class="h-30px theme-light-show" />
								<img alt="Logo" src="<?php echo base_url();?>assets/media/logos/demo36.svg" class="h-30px theme-dark-show" />
							</a>
							<!--end::Logo image-->
						</div>
						<!--end::Sidebar toggle-->
						<!--begin::Header wrapper-->
						<div class="d-flex flex-stack flex-lg-row-fluid" id="kt_app_header_wrapper">
							<!--begin::Page title-->
							<div class="page-title gap-4 me-3 mb-5 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
								<div class="d-flex align-items-center mb-3">
									<!--begin::Logo-->
									<a href="dashboard.php">
										<img alt="Logo" src="<?php echo base_url();?>assets/media/logos/demo36.svg" class="me-7 d-none d-lg-inline h-20px" />
									</a>
									<!--end::Logo-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7">
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-700 fw-bold lh-1 mx-n1">
											<a href="dashboard.php" class="text-hover-primary">
												<i class="fonticon-home text-gray-700 fs-4"></i>
											</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
											<span class="svg-icon svg-icon-4 svg-icon-gray-700 mx-n1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</li>
										<li class="breadcrumb-item text-gray-700 fw-bold lh-1 mx-n1">
											<?php switch ($url) {
												case $url=='Home_controller/index':
													echo "Dashboard";
													break;
												case $url=='Teacher_controller/teacher_list':
													echo "Teachers List";
													break;
												case $url=='Subject_controller/subject':
													echo "Subjects List"; 
													break;
												case $url=='Student_controller/student_list':
													echo "Students List";
													break;
												case $url=='Attendance_controller/attendance_list':
													echo "Attendance List";
													break;
												case $url=='Paper_controller/paper_set':
													echo "Question Papers";
													break;
												default: echo "check";
											}?>
										</li>
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--begin::Title-->
								<h1 class="text-gray-900 fw-bolder m-0"><?php switch ($url) {
												case $url=='Home_controller/index':
													echo "Dashboard";
													break;
												case $url=='Teacher_controller/teacher_list':
													echo "Teachers List";
													break;
												case $url=='Subject_controller/subject':
													echo "Subjects List";
													break;
												case $url=='Student_controller/student_list':
													echo "Students List";
													break;
												case $url=='Attendance_controller/attendance_list':
													echo "Attendance List";
													break;
												case $url=='Paper_controller/paper_set':
													echo "Question Papers";
													break;
											}?></h1>
								<!--end::Title-->
							</div>
							<!--end::Page title-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Header-->
						<div class="app-sidebar-header d-flex flex-column px-10 pt-8" id="kt_app_sidebar_header">
							<!--begin::Brand-->
							<div class="d-flex flex-stack mb-10">
								<!--begin::User-->
								<div class="">
									<!--begin::User info-->
									<div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
										<div class="d-flex flex-center cursor-pointer symbol symbol-custom symbol-40px">
											<img src="<?php echo base_url();?>assets/media/avatars/pic.jpg" alt="image" />
										</div>
										<!--begin::Username-->
										<a href="#" class="text-white text-hover-primary fs-4 fw-bold ms-3">Saurav Thakur</a>
										<!--end::Username-->
									</div>
									<!--end::User info-->
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="<?php echo base_url();?>assets/media/avatars/pic_2.png" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">Saurav Thakur 
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">sauravthakurzxcv@gmail.com</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="#" class="menu-link px-5">My Profile</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="#" class="menu-link px-5" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Change Password</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="<?php echo base_url('Auth_controller/logout');?>" class="menu-link px-5">Sign Out</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
								</div>
								<!--end::User-->
							</div> 
							<!--end::Brand-->
							
						</div>
						<!--end::Header-->
						
