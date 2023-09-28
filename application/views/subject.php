                                    <!--begin::Tables Widget 9-->
                                    <div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Subjects</span>
											</h3>
											<div class="card-toolbar"  data-bs-toggle="modal" data-bs-placement="top" data-bs-target="#kt_modal_new_address" title="Click to add new Subject">
												<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-target="#kt_modal_invite_friends">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
														<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												Add New Subjects</a>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted">
															<!-- <th class="min-w-50px">S.No.</th> -->
															<th class="min-w-150px">Name</th>
															<th class="min-w-150px">Status</th>
															<th class="min-w-100px text-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<?php foreach ($ab as $data) { ?>
														<tr>
															<!-- <td></td> -->
															<td><?php echo $data['name'];?></td>

															<td id="sub_status">
															<?php if($data['status']== '1'){ ?>
																<i class="fa fa-toggle-on" style='color: blue' onclick="change_status(<?php echo $data['id']; ?>,'0')"></i>
															<?php }else{?>
																<i class='fa fa-toggle-off' style='color: red' onclick="change_status(<?php echo $data['id']; ?>,'1')"></i>
															<?php }?>
															</td>
												 			
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<!-- edit Subject -->
																	<a href="#" onclick="editSubject(<?php echo $data['id'];?>)" data-bs-toggle="modal" data-bs-placement="top" data-bs-target="#kt_modal_edit_new">
																		<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size: 25px;">
																		</i>
																	</a>
																	<!-- delete Subject -->
																	<a href ="<?php echo ('delete_row/'.$data['id']); ?>">
																		<i class="fa fa-trash fa-fw" aria-hidden="true" style="font-size: 25px;">
																		</i>
																	</a>
																</div>
															</td>
														</tr>
														<?php } ?>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 9-->
        <!--begin::Modal - New Address-->
        <div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" id="add_sub">
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title--> 
							<h2>Add New Subject</h2>
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
						<div class="modal-body py-10 px-lg-17">
							<!--begin::Scroll-->
							<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
								<!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-12 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-semibold mb-2">Subject Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" name="name"/>
										<!--end::Input-->
									</div>
									<!--end::Col-->								
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button name = "submit" type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
								<span class="indicator-label">Add Subject</span>
							</button>
							<!--end::Button-->
						</div>
						<!--end::Modal footer-->
					</form>
					<!--end::Form-->
				</div>
                <!-- end::Modal content -->
			</div>
            <!-- end:model dialog -->
</div>
<!--end::Modal - New Address-->

<div class="modal fade" id="kt_modal_edit_new" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" id="editSubject" method="POST" id="kt_modal_new_address_form">
					<input type="hidden" name="edit_id" value="" id="edit_id"/>
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Edit Subject</h2>
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
						<div class="modal-body py-10 px-lg-17">
							<!--begin::Scroll-->
							<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
								<!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-12 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-semibold mb-2">Subject Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" name="name" id="subject_editname"/>
										<!--end::Input-->
									</div>
									<!--end::Col--> 
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
								<span class="indicator-label">Add New</span>
							</button>
							<!--end::Button-->
						</div>
						<!--end::Modal footer-->
					</form>
					<!--end::Form-->
				</div>
                <!-- end::Modal content -->
			</div>
            <!-- end:model dialog -->
</div>



