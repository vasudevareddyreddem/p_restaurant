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
	
	
	/* dashboard */
	
	public function get_hot_dishes_count_list(){
	$this->db->select('Count(gallery.g_id) as dishes_count')->from('gallery');
	$this->db->where('gallery.status ',1);	
	return $this->db->get()->row_array();
	}
	public function get_chefs_count_list(){
	$this->db->select('Count(chefs.c_id) as chief_total_count')->from('chefs');
	$this->db->where('chefs.status ',1);	
	return $this->db->get()->row_array();
	}
	public function get_food_items_count_list(){
	$this->db->select('Count(menu_brief_all_details.name) as items_count')->from('menu_brief_all_details');
	$this->db->where('menu_brief_all_details.status ',1);	
	return $this->db->get()->row_array();
	}
	public function get_testmals_count_list(){
	$this->db->select('Count(testimonial.t_id) as test_count')->from('testimonial');
	$this->db->where('testimonial.status ',1);	
	return $this->db->get()->row_array();
	}
	
	
	
  }