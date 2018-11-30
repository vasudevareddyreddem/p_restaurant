<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_model extends CI_Model 

{
	
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function aboutus_details_list(){
	$this->db->select('aboutus_brief.*')->from('aboutus_brief');
    $this->db->where('aboutus_brief.status',1);
	return $this->db->get()->row_array();
	}
	
	public function aboutus_home_details_list(){
	$this->db->select('aboutus.*')->from('aboutus');
    $this->db->where('aboutus.status',1);
	return $this->db->get()->row_array();
	}
	public function contactus_list(){
     $this->db->select('contactus.*')->from('contactus');
    $this->db->where('contactus.status',1);
	return $this->db->get()->row_array();
	}
	
	
	public function contactus_details_list(){
     $this->db->select('contactus.*')->from('contactus');
    $this->db->where('contactus.status',1);
	 return $this->db->get()->row_array();
	 
	}
	
	
	
	
	
	
	
	
	
	
	public function blog_details_list(){
	 $this->db->select('blog.*')->from('blog');
    $this->db->where('blog.status',1);
	return $this->db->get()->result_array();
	}
	
	public function gallery_details_list(){
	$this->db->select('gallery.*')->from('gallery');
    $this->db->where('gallery.status',1);
	return $this->db->get()->result_array();
	}
	public function testmonial_details_list(){
	$this->db->select('testimonial.*')->from('testimonial');
    $this->db->where('testimonial.status',1);
	return $this->db->get()->result_array();
	}
	public function chefs_details_list(){
	$this->db->select('chefs.*')->from('chefs');
    $this->db->where('chefs.status',1);
	return $this->db->get()->result_array();
	}
	public function menu_details_list(){
	$this->db->select('menu_data.*')->from('menu_data');
    $this->db->where('menu_data.status',1);
	return $this->db->get()->result_array();
	}
	public function servies_details_list(){
	$this->db->select('services.*')->from('services');
    $this->db->where('services.status',1);
	return $this->db->get()->result_array();
	}
	
	
	public function servies_brief_list(){
	$this->db->select('services_brief.*')->from('services_brief');
    $this->db->where('services_brief.status',1);
	return $this->db->get()->result_array();
	}
	public function daily_special_list(){
	 $this->db->select('menu_brief.*')->from('menu_brief');
     $this->db->where('menu_brief.menu_type','Daily special');
     $this->db->where('menu_brief.status',1);
	 $return=$this->db->get()->row_array();
	 //echo '<pre>';print_r($return);exit;
	 $Item_list=$this->daily_special_item_list($return['m_b_id']);
	 $data=$return;
	 if(count($Item_list)>0){
	 $data['item_list']=isset($Item_list)?$Item_list:'';
	 }
	 
	 if(!empty($data)){
		 return $data;
	 }
	}
	public function daily_special_item_list($id){
	 $this->db->select('menu_brief_all_details.*')->from('menu_brief_all_details');
     $this->db->where('menu_brief_all_details.menu_brief_id',$id);
     $this->db->where('menu_brief_all_details.status',1);
	 return $this->db->get()->result_array();
	
	
	}
	
	public function get_aboutus_brief_list(){
	$this->db->select('aboutus_brief.*')->from('aboutus_brief');
	$this->db->where('aboutus_brief.status', 1);
	 $return=$this->db->get()->result_array();
  foreach($return as $list){
   $lists=$this->get_aboutus_data_list($list['a_b_id']);
   //echo '<pre>';print_r($lists);exit;
   $data[$list['a_b_id']]=$list;
   $data[$list['a_b_id']]['aboutus_list']=$lists;
   
  }
  
  if(!empty($data)){
   
   return $data;
   
  }
 }
	public function get_aboutus_data_list($emp_id){
	 $this->db->select('aboutus_paragrap.*')->from('aboutus_paragrap');
     $this->db->where('aboutus_paragrap.emp_id',$emp_id);
     $this->db->where('aboutus_paragrap.status',1);
	 return $this->db->get()->result_array();
	
	}
	
	public function menu_special_list(){
	$this->db->select('menu_brief.*')->from('menu_brief');
	 $this->db->where('menu_brief.menu_type','Menu');
     $this->db->where('menu_brief.status',1);
	 $return=$this->db->get()->result_array();
  foreach($return as $list){
   $lists=$this->get_menu_data_list($list['m_b_id']);
   //echo '<pre>';print_r($lists);exit;
   $data[$list['m_b_id']]=$list;
   $data[$list['m_b_id']]['menus_list']=$lists;
   
  }
  
  if(!empty($data)){
   
   return $data;
   
  }
 }
	public function get_menu_data_list($menu_brief_id){
	$this->db->select('menu_brief_all_details.*')->from('menu_brief_all_details');
     $this->db->where('menu_brief_all_details.menu_brief_id',$menu_brief_id);
     $this->db->where('menu_brief_all_details.status',1);
	 return $this->db->get()->result_array();
	
	}
	public function topheader_details_list(){
	$this->db->select('topheader.*')->from('topheader');
    $this->db->where('topheader.status',1);
	return $this->db->get()->row_array();
	}
	
	/* menu order list purpose*/
	public function menu_item_details_list(){
	$this->db->select('menu_brief_all_details.food_type,menu_brief_all_details.m_b_a_d_id')->from('menu_brief');
	$this->db->join('menu_brief_all_details', 'menu_brief_all_details.menu_brief_id = menu_brief.m_b_id', 'left');
	$this->db->where('menu_brief.menu_type','Menu');
	$this->db->group_by('menu_brief_all_details.food_type');
    $this->db->where('menu_brief.status',1);
	$return=$this->db->get()->result_array();
	foreach($return as $list){
		$item_list=$this->get_menu_item_list($list['food_type']);
		$img_list=$this->get_menu_images_list($list['food_type']);
		$data[$list['m_b_a_d_id']]=$list;
		$data[$list['m_b_a_d_id']]['food_img_list']=isset($img_list)?$img_list:'';
		$data[$list['m_b_a_d_id']]['item_list']=isset($item_list)?$item_list:'';
	}
		if(!empty($data)){
			return $data;
		}
	}
	
	public  function get_menu_item_list($food_type){
		$this->db->select('image,org_pic,food_type,name,description,price')->from('menu_brief_all_details');
		$this->db->where('menu_brief_all_details.food_type',$food_type);
		$this->db->where('menu_brief_all_details.status',1);
		return $this->db->get()->result_array();
	}
	public  function get_menu_images_list($food_type){
		$this->db->select('image,org_pic')->from('menu_brief_all_details');
		$this->db->where('menu_brief_all_details.food_type',$food_type);
		$this->db->where('menu_brief_all_details.status',1);
		return $this->db->get()->result_array();
	}
	
	public function get_header_img_details(){
	 $this->db->select('header.*')->from('header');
	 $this->db->where('status',1);
	 return $this->db->get()->row_array();	
	}
	
	public function get_chefs_count_list(){
	$this->db->select('Count(chefs.c_id) as chief_total_count')->from('chefs');
	$this->db->where('chefs.status ',1);	
	return $this->db->get()->row_array();
	}
	public function get_food_type_count_list(){
	$this->db->select('Count(menu_brief_all_details.food_type) as food_total_count')->from('menu_brief_all_details');
	$this->db->group_by('menu_brief_all_details.food_type');
	$this->db->where('menu_brief_all_details.status ',1);	
	return $this->db->get()->row_array();
	}
	
	/* for  resevation */
	public  function save_reservation_table($data){
		$this->db->insert('reservation_user_list',$data);
		return $this->db->insert_id();
	}
	public  function check_contact_details(){
		$this->db->select('*')->from('contactus');
	    return $this->db->get()->row_array();
	}
	
	public  function get_reservation_times_list(){
		$this->db->select('*')->from('reservation_time');
	    return $this->db->get()->row_array();
	}
	
	
	
	
	
  }