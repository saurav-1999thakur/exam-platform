
<!-- add new portfolio... -->
  <!-- begin::Tables --> 
  <div class="card mb-5 mb-xl-8">
    <!--begin::Body-->
    <div class="card-body py-3">
        <form action="<?php echo base_url('Paper_controller/insert');?>" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
              <!-- <input type="text" id="form6Example3" name="teacher_department" class="form-control" /> -->
                    <label class="form-label" for="form6Example3">Subject</label>
                    <select name="subject" class="form-control">
                        <option>Select Subject</option>
                        <?php 
                        foreach($query as $subject){
                            echo "<option value='".$subject['id']."'>".$subject['name']."</option>";
                        }?>
                    </select>
                    </div>
                </div>
                <div class="col">
                    <label class="form-label" for="form6Example1">Date</label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label" for="form6Example1">Expiry Date</label>
                    <input type="date" name="expirydate" id="expirydate" class="form-control">
                </div>
            </div>
         
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >Question 1</label>
                <textarea name="question1" id="question1" cols="30" rows="4"></textarea>
                </div>
            </div>
            <div class="col">
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
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >Question 2</label>
                <textarea name="question2" id="question2" cols="30" rows="4"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >option</label>
                <textarea name="option2" id="option2" cols="30" rows="4"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label">correct ans2</label>
                <select name="correct_ans2" class="form-control">
                        <option>Select ans</option>
                        <option value="opt1">opt1</option>
                        <option value="opt2">opt2</option>
                        <option value="opt3">opt3</option>
                        <option value="opt4">opt4</option>
                </select>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >Question 3</label>
                <textarea name="question3" id="question3" cols="30" rows="4"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >option</label>
                <textarea name="option3" id="option3" cols="30" rows="4"></textarea>
                </div> 
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label">correct ans3</label>
                <select name="correct_ans3" class="form-control">
                        <option>Select ans</option>
                        <option value="opt1">opt1</option>
                        <option value="opt2">opt2</option>
                        <option value="opt3">opt3</option>
                        <option value="opt4">opt4</option>
                </select>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >Question 4</label>
                <textarea name="question4" id="question4" cols="30" rows="4"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >option</label>
                <textarea name="option4" id="option4" cols="30" rows="4"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label">correct ans4</label>
                <select name="correct_ans4" class="form-control">
                        <option>Select ans</option>
                        <option value="opt1">opt1</option>
                        <option value="opt2">opt2</option>
                        <option value="opt3">opt3</option>
                        <option value="opt4">opt4</option>
                </select>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >Question 5</label>
                <textarea name="question5" id="question5" cols="30" rows="4"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label" >option</label>
                <textarea name="option5" id="option5" cols="30" rows="4"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                <label class="form-label">correct ans5</label>
                <select name="correct_ans5" class="form-control">
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