<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

    public $title;
    public $question;
    public $status;
    public $last_date;
    public $make_date;
    public $make_by;

    public function get_last_ten_entries() {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    public function add_course($data) {
   
        $this->title = $data['course_name']; // please read the below note
        $this->question = $data['question'];
        $this->last_date = time();
        $this->make_date = time();
        $this->make_by = $_SESSION['logged_in']['username'];
        $this->status = $data['status'];
        $this->db->insert('course', $this);
        return $this->db->insert_id();
    }

    public function update_entry() {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    public function index() {
        $this->load->view('welcome_message');
    }
    public function get_all_course(){
        $query = $this->db->get('course');
        return $query->result_array();
    }

}
