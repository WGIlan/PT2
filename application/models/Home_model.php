<?php 
class Home_model extends CI_Model {
		public function __construct(){
          parent::__construct();
        }
	public function checkUser($user_name, $password){
			$this->db->select('count(id) as count');
			$this->db->where('user_name', $user_name);
			$this->db->where('password', $password);
			$query = $this->db->get('users')->result();
			if ($query[0]->count > 0)
				return true;
			else
				return false;
		}
		public function getUserDetail($user_name){
			$result = $this->db->select('*')->from('users')->where('user_name', $user_name)->get()->result();
			return array(
				'user_id' => $result[0]->id,
				'user_name' => $result[0]->user_name
			);
		}
		public function add($user_name,$email,$password){
			$data = array(
			'user_name'=>$user_name,
			'email'=>$email,
			'password'=>$password,
			);
			$this->db->insert('users',$data);
		}
}