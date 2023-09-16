									<!--begin::Tables Widget 9-->
                                    <div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Attendance List</span>
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
															<th class="min-w-200px">User ID</th>
															<th class="min-w-200px">Data</th>
															<th class="min-w-200px">Attendance Status</th>
															<th class="min-w-200px">Created At</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
													<?php foreach ($list as $data) {?>
														<tr>
															<!-- <td>1.</td>  -->
															<td><?php echo $data['user_id']?></td>
                                                            <td><?php echo $data['date']?></td>
                                                            <td><?php echo $data['attendance_status']?></td>
                                                            <td><?php echo $data['created_at']?></td>
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
