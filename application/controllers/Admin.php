<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->chcksession();
        $this->load->model('Admin_model');
    }

    public function index() {

        $this->load->view('admin/login');
    }

    public function login() {

        $data = array(
            'username' => $this->input->post('name'),
            'password' => $this->input->post('password')
        );
        $admin_chk = $this->Admin_model->login($data);
        if (isset($admin_chk)) {
            foreach ($admin_chk as $user) {  
            $session_data = array(
                'username' => $user->name,
                'email' => $user->email,
                'logged_in' => TRUE
            );
              $this->session->set_userdata('logged_in', $session_data);
            }
          
        }
    }
    public function dashboard(){
        $this->load->view('admin/inc/header');   
          $this->load->view('admin/inc/menu');   
	 $this->load->view('admin/dashboard');   
         $this->load->view('admin/inc/footer');
    }

    public function chcksession() {
        if (isset($this->session->userdata['logged_in'])) {
            $this->dashboard();
        } else {
            $this->load->view('admin/login');
        }
    }

}
