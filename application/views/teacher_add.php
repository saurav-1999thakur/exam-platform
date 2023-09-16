
<!-- add new portfolio... -->
  <!-- begin::Tables --> 
  <div class="card mb-5 mb-xl-8">
    <!--begin::Body-->
    <div class="card-body py-3">
      <form action="<?php echo base_url('Teacher_controller/insert_teacher');?>" method="POST" enctype="multipart/form-data" >
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
          <div class="form-outline mb-4">
            <textarea class="form-control" id="form6Example7" rows="4" name="teacher_address"></textarea>
            <label class="form-label" for="form6Example7">Teacher Address</label>
          </div>
        </div>  
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="file" id="form6Example3" name="teacher_img" class="form-control" />
          <label class="form-label" for="form6Example3">Teacher Image</label>
        </div>
        <div class="form-outline mb-4"> 
          <!-- <input type="text" id="form6Example3" name="teacher_department" class="form-control" /> -->
          <label class="form-label" for="form6Example3">Teacher Subject</label>
          <select name="teacher_department" class="form-control">
            <option>Select Subject</option>
          <?php
          foreach($query as $subject){ 
            echo "<option value='".$subject['id']."'>".$subject['name']."</option>";
          }
          ?></select>
        
        </div>
        <!-- Message input -->
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Add</button>
      </form>
    </div>
    <!-- end:body -->
  </div>
  <!-- end::table -->