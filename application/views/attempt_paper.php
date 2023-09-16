
									<!--begin::Tables Widget 9-->
                                    <div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Question Paper</span>
												<!-- <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span> -->
											</h3>
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
															<th class="min-w-100px">Subject id</th>
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
																<td><?php echo $data['subject_id']?></td>
																<td><?php echo $data['date']?></td>
																<td><?php echo $data['expiry']?></td>
																<td>
																	<div class="d-flex justify-content-end flex-shrink-0">
																		<a href="<?php echo base_url('Paper_controller/question_paper/').$data['question_set_id'];?>" class="btn btn-sm btn-light btn-active-primary" data-bs-target="#kt_modal_invite_friends">Attempt Paper
																			<!-- <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size: 25px;">
																			</i>  -->
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
