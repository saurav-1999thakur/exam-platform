
									<!--begin::Tables Widget 9-->
                                    <div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Teachers List</span>
												<!-- <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span> -->
											</h3> 
											<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add new">
												<a href="<?php echo base_url('Teacher_controller/add_new_teacher');?>" class="btn btn-sm btn-light btn-active-primary" data-bs-target="#kt_modal_invite_friends">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
														<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Add New Teacher</a>
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
															<th class="min-w-50px">User ID</th>
															<th class="min-w-150px">Name</th>
															<th class="min-w-150px">Contact</th>
															<th class="min-w-200px">Email</th>
															<th class="min-w-200px">Teacher Address</th>
															<th class="min-w-200px">Teacher image</th>
															<th class="min-w-100px">Teacher Subject</th>
															<th class="min-w-50px">Status</th>
															<th class="min-w-100px text-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
													<?php foreach ($list as $data) {?>
														<tr>
															<!-- <td>1.</td> -->
															<td><?php echo $data['user_id']?></td> 
                                                            <td><?php echo $data['name']?></td>
                                                            <td><?php echo $data['contact']?></td>
                                                            <td><?php echo $data['email']?></td>
															<td><?php echo $data['teacher_address']?></td>
															<td><img src="<?php echo base_url('assets/image/teachers/'.$data['teacher_img'])?>" width="100" height="100" ></td>
															<td><?php echo $data['subject_name']?></td> 
															
															
															<td id="tea_status"> 
															<?php if($data['status']== '1'){ ?>
																<i class="fa fa-toggle-on" style='color: blue' onclick="tea_change_status(<?php echo $data['id']; ?>,'0')"></i>
															<?php }else{?> 
																<i class='fa fa-toggle-off' style='color: red' onclick="tea_change_status(<?php echo $data['id']; ?>,'1')"></i>
															<?php }?>
															</td> 
															
															<td>
																<!-- edit list  for database -->
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="<?php echo ('edit_teacher_records/'.$data['id']);?>">
																		<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size: 25px;">
																		</i> 
																	</a> 
																<!-- delete list for database -->
																	<a href="<?php echo ('remove_teacher/'.$data['id']); ?>">
																		<i class="fa fa-trash fa-fw" aria-hidden="true" style="font-size: 25px;">
																		</i>
																	</a>   
																</div>
															</td> 
														</tr>
													<?php }?>
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
