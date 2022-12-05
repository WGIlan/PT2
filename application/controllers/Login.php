<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
	public function index(){			
		$user_name = $this->input->post('userName');
		$password = $this->input->post('userPassword');
			if ($this->verifyUser($user_name, $password)){
				$user_detail = $this->home_model->getUserDetail($user_name);
				$session_data = array(
					'user_id' => $user_detail['user_id'],
					'user_name'	=> $user_detail['user_name'],
					'is_logged_in'	=> TRUE
				);
			$this->session->set_userdata($session_data);			
			}
			else{
				$this->session->set_flashdata('error_msg', 'User and Password does not match!');	
			}
			redirect('home/login');
		}	
	private function verifyUser($user_name, $password){
	  	$user_data = $this->home_model->checkUser($user_name, $password);
		return $user_data;
	}
	public function create(){
		$user_name = $this->input->post('user_name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->home_model->add($user_name,$email,$password);
		 $this->session->set_flashdata('success_msg', 'Você acabou de fazer o Cadastro.');
		 redirect('login');
		}
}
?>