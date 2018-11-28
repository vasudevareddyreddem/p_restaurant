<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model 

{
	
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function get_adminpassword_details($u_id){
		$this->db->select('users.u_id,users.password')->from('users');
		$this->db->where('u_id', $u_id);
		$this->db->where('status', 1);
		return $this->db->get()->row_array();	
	}
	public function update_admin_details($u_id,$data){
		$this->db->where('u_id',$u_id);
    	return $this->db->update("users",$data);
	}
	
  }