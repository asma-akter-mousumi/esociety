<div class="right_col" role="main" style="min-height: 800px">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
           
            <table class="table table-responsive">
                <tr>
                    <th>SI</th>
                    <th>Course Title</th>
                    <th>Question</th>
                    <th>Last Date</th>
                    <th>Action</th>
                </tr>
                <?php if(isset($get_all_course)){
                    $i=0;
     foreach ($get_all_course as $row){
         $i++;
  
?>
                <tr>
                    <td><?php echo isset($i)?$i:""; ?></td>
                     <td><?php echo isset($row['title'])?$row['title']:""; ?></td>
                      <td><?php echo isset($row['question'])?$row['question']:""; ?></td>
                       <td><?php echo isset($row['last_date'])?$row['last_date']:""; ?></td>
                       <td><a href=""><i class="fa fa-edit"></i></a>&nbsp;<a href=""><i class="fa fa-trash"></i></a> &nbsp;<a href="<?php echo site_url('question/add_question/'.$row['id'])?>"><i class="fa fa-plus"></i> Question</a></td>
                </tr>
                <?php  
                }
                }?>
            </table>

        </div>
    </div>

</div>
<!-- /page content -->





