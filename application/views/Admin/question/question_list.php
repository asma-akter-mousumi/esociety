<div class="right_col" role="main" style="min-height: 800px">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <span style="color: red;font-size: 18px;"><?php echo $this->session->flashdata('msg') ?></span>
            <table class="table table-responsive">
                <tr>
                    <th>SI</th>
                    <th>Question Title</th>
                    <th>Course</th>
                    <th>Last Date</th>
                    <th>Action</th>
                </tr>
                <?php
                if (isset($get_all_question)) {
                    $i = 0;
                    foreach ($get_all_question as $row) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo isset($i) ? $i : ""; ?></td>
                            <td><?php echo isset($row['title']) ? $row['title'] : ""; ?></td>
                            <td><?php echo isset($row['course_id']) ? $row['course_id'] : ""; ?></td>
                            <td><?php echo isset($row['make_date']) ? $row['make_date'] : ""; ?></td>
                            <td><a href=""><i class="fa fa-edit"></i></a>&nbsp;<a href="<?php echo site_url('question/delete_question/' . $row['id']) ?>" onclick="return confirm('Are your Sure To delete')"><i class="fa fa-trash"></i></a> &nbsp;</td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>

        </div>
    </div>

</div>
<!-- /page content -->





