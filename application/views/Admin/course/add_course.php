<div class="right_col" role="main" style="min-height: 800px">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="well"><?php echo $this->session->flashdata('msg');?></div>
            <form action="<?php echo site_url('course/add_course')?>" method="post">
                <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" name="course_name" placeholder="Enter Your Course name" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Question</label>
                    <select class="form-control" name="question">
                        <option>Question 1</option>
                        <option>Question 2</option>
                        <option>Question 3</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                      
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



