
									<!--begin::Tables Widget 9-->
                                    <div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Question Paper</span>
												<!-- <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span> -->
											</h3>
											<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add new">
												<a href="<?php echo base_url('Paper_controller/add_paper');?>" class="btn btn-sm btn-light btn-active-primary" data-bs-target="#kt_modal_invite_friends">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
														<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Add Paper</a>
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
															<th class="min-w-50px">Question_set_id</th>
															<th class="min-w-50px">Question</th>
															<th class="min-w-50px">Ans1</th>
															<th class="min-w-50px">Ans2</th>
															<th class="min-w-50px">Ans3</th>
															<th class="min-w-50px">Ans4</th>
															<th class="min-w-50px">Correct Answer</th>
															<th class="min-w-100px">Subject id</th>
															<th class="min-w-100px">Subject Name</th>
															<th class="min-w-50px">Status</th>
															<th class="min-w-100px">Date</th>
															<th class="min-w-100px">Expiry Date</th>
															<th class="min-w-100px text-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<?php foreach ($list as $data) {?> 
															<tr>
																<td><?php echo $data['question_set_id']?></td>
																<td><?php echo $data['question']?></td>
																<td><?php echo $data['ans_1']?></td>
																<td><?php echo $data['ans_2']?></td>
																<td><?php echo $data['ans_3']?></td>
																<td><?php echo $data['ans_4']?></td>
																<td><?php echo $data['correct_ans']?></td>
																<td><?php echo $data['subject_id']?></td>
																<td><?php echo $data['subject_name']?></td>
																<td><i class="fa fa-toggle-on" style='color: blue'></i></td>
																<td><?php echo $data['date']?></td>
																<td><?php echo $data['expiry']?></td>
																<td>
																	<div class="d-flex justify-content-end flex-shrink-0">
																		<a href="<?php echo ('edit_paper_set/'.$data['id']);?>">
																			<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size: 25px;">
																			</i> 
																		</a>
																		<!-- delete list for database -->
																		<a href="<?php echo ('remove_paper/'.$data['id']);?>">
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
