
<!-- add new portfolio... -->
  <!-- begin::Tables --> 
  <div class="card mb-5 mb-xl-8">
    <!--begin::Body-->
    <div class="card-body py-3">
        <form action="<?php echo base_url('Paper_controller/exam_submit');?>" method="POST">
        <input type="hidden" name="question_set_id" value="<?php echo $static_data['qustion_set_id']; ?>" />
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
              <!-- <input type="text" id="form6Example3" name="teacher_department" class="form-control" /> -->
                    <label class="form-label" for="form6Example3">Subject:</label>
                    <h3><?php echo $static_data['subject_id'];?></h3>
                    </div>
                </div>
                <div class="col">
                    <label class="form-label" for="form6Example1">Date:</label>
                    <h3><?php echo $static_data['date'];?></h3>                    
                </div>
                <div class="col">
                    <label class="form-label" for="form6Example1">Expiry Date:</label>
                    <h3><?php echo $static_data['expiry_date'];?></h3>
                </div>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Questions</th>
                    <th scope="col">Options</th>
                    <th scope="col">Answer</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $i=1; 
                foreach ($dynamic_data as $dd ){?>
                   <tr>
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $dd['question'];?></td>
                        <td>
                            <ol class="form-outline">
                            <li>Options  : <?php echo $dd['ans_1'];?> </li>
                            <li>Options : <?php echo $dd['ans_2'];?> </li>
                            <li>Options : <?php echo $dd['ans_3'];?> </li>
                            <li>Options  : <?php echo $dd['ans_4'];?> </li>
                        </ol>
                        </td>
                        <td>
                            <select name="<?php echo 'answer_'.$i;?>" class="form-control">
                                <option>Select ans</option>
                                <option value="<?php echo 'opt1_'.$dd['id'];?>">opt1</option>
                                <option value="<?php echo 'opt2_'.$dd['id'];?>">opt2</option>
                                <option value="<?php echo 'opt3_'.$dd['id'];?>">opt3</option>
                                <option value="<?php echo 'opt4_'.$dd['id'];?>">opt4</option>
                            </select>
                        </td>
                        <?php $i++;?>
                   </tr>
                    <?php } ?>
                </tbody>
            </table>
           
            <!-- <div class="col">
                <div class="form-outline">
                <label class="form-label" >Question 1</label>
                <textarea name="question1" id="question1" cols="30" rows="4"></textarea>
                </div>
            </div> -->
            <!-- <div class="col">
                <div class="form-outline">
                <label class="form-label" >option</label>
                <textarea name="option1" id="option1" cols="30" rows="4"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label">correct ans1</label>
                <select name="correct_ans1" class="form-control">
                        <option>Select ans</option>
                        <option value="opt1">opt1</option>
                        <option value="opt2">opt2</option>
                        <option value="opt3">opt3</option>
                        <option value="opt4">opt4</option>
                </select>
                </div>
            </div> -->
       
        <!-- Message input -->
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
      </form>
    </div>
    <!-- end:body -->
  </div>
  <!-- end::table -->