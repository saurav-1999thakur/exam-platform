
<!-- add new portfolio... -->
  <!-- begin::Tables --> 
  <div class="card mb-5 mb-xl-8">
    <!--begin::Body-->
    <div class="card-body py-3">
        <form action="<?php echo base_url('Paper_controller/update_paper');?>" method="POST">
        <input type="hidden" name ="edit_id" value="<?php echo $editData['id'];?>">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
              <!-- <input type="text" id="form6Example3" name="teacher_department" class="form-control" /> -->
                    <label class="form-label" for="form6Example3">Subject</label>
                    <select name="subject" class="form-control">
                        <option>Select Subject</option>
                        <?php 
                        foreach($query as $subject){ ?>
                            <option value="<?php echo $subject['id'];?>" <?php if($subject['id']==$editData['subject_id']){ echo 'selected';}else{echo "";}?>><?php echo $subject['name']; ?></option>
                      <?php  }?>
                    </select>
                    </div>
                </div>
                <div class="col">
                    <label class="form-label" for="form6Example1">Date</label>
                    <input type="date" name="date" id="newdate" class="form-control" value="<?php echo $editData['date'];?>">
                </div>
                <div class="col">
                    <label class="form-label" for="form6Example1">Expiry Date</label>
                    <input type="date" name="expirydate" id="expirydate" class="form-control" value="<?php echo $editData['expiry'];?>">
                </div>
            </div>
         
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >Question</label>
                <textarea name="question" id="question" cols="30" rows="4"><?php echo $editData['question'];?></textarea>
                </div> 
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >option</label>
                <textarea name="option" id="option" cols="30" rows="4"><?php echo $editData['ans_1'].','.$editData['ans_2'].','.$editData['ans_3'].','.$editData['ans_4'];?></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label">correct ans1</label>
                <select name="correct_ans" class="form-control">
                        <option>Select ans</option>
                        <option value="opt1">opt1</option>
                        <option value="opt2">opt2</option>
                        <option value="opt3">opt3</option>
                        <option value="opt4">opt4</option>
                </select>
                </div>
            </div>
        </div>
        
        <!-- Message input -->
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Add</button>
      </form>
    </div>
    <!-- end:body -->
  </div>
  <!-- end::table -->