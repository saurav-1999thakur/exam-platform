<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2022&copy;</span>
									<a href="#" target="_blank" class="text-gray-800 text-hover-primary">Saurav Thakur</a>
								</div>
								<!--end::Copyright-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
	
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo base_url();?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url();?>assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="<?php echo base_url();?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/index.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/map.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="<?php echo base_url();?>assets/cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo base_url();?>assets/js/widgets.bundle.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/widgets.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
<script type="text/javascript">
	
	//subject section--=>
	// subject status change
	function change_status(id,sub_status){ 
			$.ajax({
				type:"POST", 
				url:"<?php echo base_url('Subject_controller/status_update');?>",
				data:{row_id:id,status_id:sub_status},
				success:function(){
					swal({title: "hurray!",text: "status changed successfully",icon: "success"}).then(function() {window.location ="<?php echo base_url('Subject_controller/subject')?>";});
				}
			});
	}

	//edit subject
	function editSubject(dataId){
        $.ajax({
        	type:"POST",
            url:"<?php echo base_url('Subject_controller/get_data');?>",
            data:{dataId:dataId},
            success:function(response){
                // console.log(text(JSON.stringify(response.id)));	
                var result = JSON.parse(response);
				// console.log(result.id);
				$('#edit_id').val(result.id);
                $("#subject_editname").val(result.name);
            }
        });
    }

	// add new subjects 
	$("#add_sub").submit(function(e){
		// alert("oops");
		e.preventDefault();
		$.ajax({
			type:"POST",
			url:"<?php echo base_url('Subject_controller/sub_insert');?>",
			data:$(this).serialize(),
			success:function(data){
						
				if(data=="success"){
                    swal({title: "Thankyou!",text: "Data Inserted! successfully",icon: "success"}).then(function() {window.location ="<?php echo base_url('Subject_controller/subject');?>";});
                }else{
                    swal({title: "sorry!",text: "Data Not Inserted!",icon: "error"}).then(function() {window.location ="<?php echo base_url('Subject_controller/subject');?>";});
                }   
			}
		});
	});


	//teacher section--=>
	//teacher status change
	function tea_change_status(id,tea_status){
		// alert("oops");
		$.ajax({
			type:'POST',
			url:"<?php echo base_url('Teacher_controller/status_change');?>",
			data:{row_id:id,status_id:tea_status},
			// alert(data);
			success:function(){
				swal({title: "hurray!",text: "status changed successfully",icon: "success"}).then(function() {window.location ="<?php echo base_url('Teacher_controller/teacher_list')?>";});
			}
		})
	}



	//student section--=>
	//student status change
	function stu_change_status(id,stu_status){
		$.ajax({
			type:"POST",
			url:"<?php echo base_url('Student_controller/status_change');?>",
			data:{row_id:id,status_id:stu_status},
			success:function(){
				swal({title: "hurray!",text: "status changed successfully",icon: "success"}).then(function() {window.location ="<?php echo base_url('Student_controller/student_list')?>";});
			}
		})
	}

	
</script>