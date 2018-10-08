<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	public function __construct(){
		
	}
	public function index(){
          $this->load_page('index');
	}

	public function auth(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run() == false){
			$this->load_page('index');
		} else {
			$data = $this->MY_Model->auth($username);
			if($data){
				if(password_verify($password,$data->password)){
					redirect(base_url('home'));
				} else {
					$msg['message'] = array('msg' => 'Invalid Password','type' => 'danger');
					$this->load_page('index',$msg);
				}
			} else {
				$msg['message'] = array('msg' => 'Invalid Username','type' => 'danger');
				$this->load_page('index',$msg);
			}
		}
	}

	public function register(){
          $this->load_page('register');
	}

	public function process_register(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$email = $this->input->post("email");
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required');
		if($this->form_validation->run() == false){
			$this->load_page('register');
		}else{
			$data = array(
				'username' => $username,
				'password' => password_hash($password,PASSWORD_DEFAULT),
				'email' => $email,
				'user_type' => 1,
				'user_status' => 1
			);
			$this->MY_Model->insert("users_tbl",$data);
		}
	}

}
