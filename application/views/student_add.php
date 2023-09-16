
<!-- add new portfolio... -->
  <!-- begin::Tables --> 
  <div class="card mb-5 mb-xl-8">
    <!--begin::Body-->
    <div class="card-body py-3">
      <form action="<?php echo base_url('Student_controller/insert_student');?>" method="POST" enctype="multipart/form-data" >
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example1" name="name" class="form-control" />
              <label class="form-label" for="form6Example1">Name</label>
              <span style="color:red"><?php echo form_error('name'); ?></span>
            </div>
          </div>
          <div class="col"> 
            <div class="form-outline">
              <input type="number" id="form6Example2" name="contact" class="form-control" />
              <label class="form-label" for="form6Example2">Contact</label>
              <span style="color:red"><?php echo form_error('contact'); ?></span>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="email" id="form6Example2" name="email" class="form-control" />
              <label class="form-label" for="form6Example2">Email</label>
              <span style="color:red"><?php echo form_error('email'); ?></span>
            </div>
          </div>
        </div>
          <div class="form-outline">
            <textarea class="form-control" id="form6Example7" rows="4" name="student_address"></textarea>
            <label class="form-label" for="form6Example7">Student Address</label>
          </div>
        <div class="form-outline">
          <input type="file" id="form6Example3" name="student_img" class="form-control" /> 
          <label class="form-label" for="form6Example3">Student Image</label>
        </div>
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <!-- <input type="text" id="form6Example3" name="teacher_department" class="form-control" /> -->
              <label class="form-label" for="form6Example3">Subject</label>
              <select name="student_subjects" class="form-control">
                <option>Select Subject</option>
              <?php 
              foreach($query as $subject){ 
                echo "<option value='".$subject['id']."'>".$subject['name']."</option>";
              }
              ?></select>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="form6Example1">Teacher Name</label>
              <select name="teacher_id" class="form-control">
                <option>Select teacher</option>
              <?php
              foreach($queTea as $teacher){ 
                echo "<option value='".$teacher['user_id']."'>".$teacher['name']."(".$teacher['user_id'].")</option>";
              }
              ?></select>
            </div>
          </div>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Add</button>
      </form>
    </div>
    <!-- end:body -->
  </div>
  <!-- end::table -->

