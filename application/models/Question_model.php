<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Question_model extends CI_Model {

    public $title;
    public $course_id;
    public $question_body;
    public $make_date;
    public $make_by;
    public $right_ans;
    public $status;

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function add_question($data) {

        $this->course_id = $data['course_id'];
        $this->title = $data['question_title']; // please read the below note     
        $this->question_body = $data['question_body'];
        $this->question_name = $data['question_name'];
        $this->make_by = $_SESSION['logged_in']['username'];
        $this->make_date = time();
        $this->right_ans = $data['right_ans'];
        $this->status = $data['status'];
        $this->db->insert('question', $this);

        if ($this->db->insert_id()) {
            $q_id = $this->db->insert_id();

            for ($i = 0; $i <= 3; $i++) {

                $data1 = array(
                    'title' => $data['option'][$i],
                    'question_id' => $q_id,
                    'make_date' => time(),
                    'make_by' => $_SESSION['logged_in']['username'],
                    'update_date' => time(),
                    'status' => $data['status']);
                $this->db->insert('multiple_question', $data1);
            }
        }
        return $this->db->insert_id();
    }

    public function get_all_question() {
        $query = $this->db->get('question');
        return $query->result_array();
    }

    public function delete_question($id) {
        $this->db->delete('question', array('id' => $id));
        return true;
    }

}
