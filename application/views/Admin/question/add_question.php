<div class="right_col" role="main" style="min-height: 800px">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
          
            <form action="<?php echo site_url('question/insert_question')?>" method="post">
                <div class="form-group">
                    <label>Question  title</label>
                    <input type="text" name="question_title" placeholder="Enter Your Question Title" class="form-control" >
                    <input type="hidden" name="course_id" value="<?php echo isset($course_id)?$course_id:"" ?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Question  Body</label>
                    <textarea rows="10" cols="15" name="question_body" class="form-control" >
                    </textarea>
                </div>
                  <div class="form-group">
                    <label>Question</label>
                    <input type="text" name="question_name" placeholder="Enter Your Question " class="form-control" >
                </div>
                <div class="form-group">
                    <label>Option 1</label>
                    <input type="text" name="option[]" placeholder="Enter Your option 1" class="form-control" >
                </div>
               <div class="form-group">
                    <label>Option 2</label>
                    <input type="text" name="option[]" placeholder="Enter Your option 2" class="form-control" >
                </div>
                 <div class="form-group">
                    <label>Option 3</label>
                    <input type="text" name="option[]" placeholder="Enter Your option 3" class="form-control" >
                </div> 
                <div class="form-group">
                    <label>Option  4</label>
                    <input type="text" name="option[]" placeholder="Enter Your option 4" class="form-control" >
                </div>
                 <div class="form-group">
                    <label>Right Answer</label>
                    <select name="right_ans" class="form-control">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                </select>
                </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                    <option value="0">Active</option>
                    <option value="1">Inactive</option>
                  
                </select>
                </div>
                 <div class="form-group">
                     <input type="submit" value="Add Course" class="btn btn-success"/>
                </div>
            </form> 

        </div>
    </div>

</div>
<!-- /page content -->




