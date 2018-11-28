<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 

{
	
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function login_details($data){
		$sql = "SELECT * FROM users WHERE (email='".$data['email']."' AND password='".$data['password']."' AND status=1)";
		return $this->db->query($sql)->row_array();	
	}
	public function get_admin_details($u_id){
		$this->db->select('users.u_id,users.email')->from('users');		
		$this->db->where('u_id', $u_id);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();	
	}
	
	
	/*profile*/
	public function get_all_admin_details($u_id){
	$this->db->select('users.*')->from('users');		
		$this->db->where('u_id', $u_id);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();	
	}
	public  function check_profile_email_exits($email){
		$this->db->select('users.u_id,empployee.email')->from('users');
		$this->db->where('email',$email);
		$this->db->where('status !=',2);
		return $this->db->get()->row_array();
	}
	public  function update_profile_details($u_id,$data){
		$this->db->where('u_id',$u_id);
    	return $this->db->update("users",$data);
	}
	public  function check_email_exits($email){
		$this->db->select('users.u_id,users.email')->from('users');		
		$this->db->where('email', $email);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();
	}
	
	
  }