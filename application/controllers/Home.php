<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//$this->load->model('user_model');
	}
	public function index(){		
		$this->load->view('home');		
	}
public function login(){		
		$this->load->view('login');		
	}
public function logOut(){
		$session_items = array('user_name', 'email', 'is_logged_in');
		$this->session->unset_userdata($session_items);
		redirect('home/login');
	}
}
?>