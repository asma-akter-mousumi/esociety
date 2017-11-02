<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

  public function __construct() {
        parent::__construct();
        $this->load->model('Question_model');
    }
	public function index()
	{
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/menu');
        $this->load->view('admin/question/question_list');
        $this->load->view('admin/inc/footer');
	}
        public function add_question($course_id){
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/menu');
        $data['course_id']=$course_id;
        $this->load->view('admin/question/add_question',$data);
        $this->load->view('admin/inc/footer');  
        }

        public function insert_question(){
            
            $question_insert = $this->Question_model->add_question($_POST);
        if ($question_insert) {
          
            $this->session->set_flashdata('msg', 'Insert Successfully');
            redirect('question');
        } else {
            $this->session->set_flashdata('msg', 'Error Occured');
        } 
        }
          public function question_list(){
        $data['get_all_question']=$this->Question_model->get_all_question();
         $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/menu');
         $this->load->view('admin/question/question_list',$data);
        $this->load->view('admin/inc/footer');
       
    }
    public function delete_question($id){
     $msg=$this->Question_model->delete_question($id);
     if ($msg) {
          
            $this->session->set_flashdata('msg', 'Deleted Successfully');
            redirect('question');
        } else {
            $this->session->set_flashdata('msg', 'Error Occured');
        } 
    }
}
