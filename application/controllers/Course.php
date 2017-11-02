<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Course_model');
    }

    public function index() {
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/menu');
        $this->load->view('admin/course/add_course');
        $this->load->view('admin/inc/footer');
    }

    public function add_course() {

        $course_insert = $this->Course_model->add_course($_POST);
        if ($course_insert) {
          
            $this->session->set_flashdata('msg', 'Insert Successfully');
            redirect('course');
        } else {
            $this->session->set_flashdata('msg', 'Error Occured');
        }
    }
    public function course_list(){
        $data['get_all_course']=$this->Course_model->get_all_course();
            $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/menu');
         $this->load->view('admin/course/course_list',$data);
        $this->load->view('admin/inc/footer');
       
    }

}
