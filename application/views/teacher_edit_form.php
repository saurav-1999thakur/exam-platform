
<!-- add new portfolio... --> 
  <!-- begin::Tables --> 
  <div class="card mb-5 mb-xl-8">
    <!--begin::Body--> 
    <div class="card-body py-3">
      <form action="<?php echo base_url('Teacher_controller/update_teacher_data');?>" method="POST" enctype="multipart/form-data" >
      <input type="hidden" name="edit_id" value="<?php echo $query['id'];?>">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example1" name="name" class="form-control" value="<?php echo $query['name'];?>"/>
              <label class="form-label" for="form6Example1">Name</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="number" id="form6Example2" name="contact" class="form-control" value="<?php echo $query['contact'];?>"/>
              <label class="form-label" for="form6Example2">Contact</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="email" id="form6Example2" name="email" class="form-control" value="<?php echo $query['email'];?>"/>
              <label class="form-label" for="form6Example2">Email</label>
            </div>
          </div>
          <div class="form-outline mb-4">
            <textarea class="form-control" id="form6Example7" rows="4" name="teacher_address"><?php echo $query['teacher_address'];?></textarea>
            <label class="form-label" for="form6Example7">Teacher Address</label>
          </div>
        </div>
        <div class="form-outline mb-4">
          <input type="file" id="form6Example3" name="teacher_img" class="form-control" />
          <img src="<?php echo base_url('assets/image/teachers/'.$query['teacher_img']);?>" width="100" height="100">
          <label class="form-label" for="form6Example3">Tecaher Image</label> 
        </div>
        <div class="form-outline mb-4">
          <!-- <input type="text" id="form6Example3" name="teacher_subject" class="form-control" value="<?php echo $query['teacher_subject'];?>"/> -->
          <label class="form-label" for="form6Example3">Subject</label>
          <select name="teacher_subject" class="form-control">
            <option>Select Subject</option>
          <?php
          
          foreach($subject as $subject){?>
            <option value="<?php echo $subject['id']; ?>" <?php if($query['teacher_subject']==$subject['id']){echo "selected";}?>><?php echo $subject['name']; ?></option>
         <?php } ?>
        </select>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Add</button>
      </form>
    </div>
    <!-- end:body -->
  </div>
  <!-- end::table -->