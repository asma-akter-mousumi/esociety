<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public $name;
        public $email;
        public $password;
        public $label;
      
        public function get_last_ten_entries()
        {
                $query = $this->db->get('admin', 10);
                return $query->result();
        }

        public function insert_entry()
        {
               
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
        public function login($data){
            
            $name   =  $data['username']; // please read the below note
             $password  = md5($data['password']);
             $array = array('name' => $name,'password' => $password);
             $query = $this->db->where($array)->get('admin');
             return $query->result();
        }

        public function index()
	{
		$this->load->view('welcome_message');
	}
}
