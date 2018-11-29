<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_header_details($data){
	$this->db->insert('header',$data);
	return $this->db->insert_id();	
	}	
	public function get_header_list(){
	$this->db->select('header.*')->from('header');
	$this->db->where('header.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_header_details($h_id){
	$this->db->select('header.*')->from('header');
		$this->db->where('h_id',$h_id);
		return $this->db->get()->row_array();	
	}	
   public function update_header_details($h_id,$data){
	$this->db->where('h_id',$h_id);
   return $this->db->update("header",$data);
	}
	
	public function delete_header_details($h_id){
	 $this->db->where('h_id',$h_id);
		return $this->db->delete('header');
	}
	
	/* top header */
	
	public function save_topheader_details($data){
	$this->db->insert('topheader',$data);
	return $this->db->insert_id();	
	}
	public function get_topheader_list(){
	$this->db->select('topheader.*')->from('topheader');
	$this->db->where('topheader.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_topheader_details($t_h_id){
	$this->db->select('topheader.*')->from('topheader');
		$this->db->where('t_h_id',$t_h_id);
		return $this->db->get()->row_array();	
	}	
	public function update_topheader_details($t_h_id,$data){
	$this->db->where('t_h_id',$t_h_id);
   return $this->db->update("topheader",$data);
	}
	public function delete_topheader_details($t_h_id){
	 $this->db->where('t_h_id',$t_h_id);
	return $this->db->delete('topheader');
	}
	/* about us */
	public function save_aboutus_details($data){
	$this->db->insert('aboutus',$data);
	return $this->db->insert_id();	
	}
	public function get_aboutus_list(){
	$this->db->select('aboutus.*')->from('aboutus');
	$this->db->where('aboutus.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_aboutus_details($a_id){
	$this->db->select('aboutus.*')->from('aboutus');
	$this->db->where('a_id',$a_id);
	return $this->db->get()->row_array();	
	}	
	public function update_aboutus_details($a_id,$data){
	$this->db->where('a_id',$a_id);
   return $this->db->update("aboutus",$data);
	}
	public function delete_aboutus_details($a_id){
	$this->db->where('a_id',$a_id);
	return $this->db->delete('aboutus');
	}
	
	
	/* reservations */
	public function save_reservation_details($data){
	$this->db->insert('reservation_home',$data);
	return $this->db->insert_id();	
	}
	public function get_reservation_list(){
	$this->db->select('reservation_home.*')->from('reservation_home');
	$this->db->where('reservation_home.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_reservation_details($r_h_id){
	$this->db->select('reservation_home.*')->from('reservation_home');
	$this->db->where('r_h_id',$r_h_id);
	return $this->db->get()->row_array();	
	}	
	public function update_reservation_details($r_h_id,$data){
	$this->db->where('r_h_id',$r_h_id);
   return $this->db->update("reservation_home",$data);
	}
	public function delete_reservation_details($r_h_id){
	$this->db->where('r_h_id',$r_h_id);
	return $this->db->delete('reservation_home');
	}
	  public function saver_user($r_h_id){
	$this->db->select('*')->from('reservation_home');
		$this->db->where('r_h_id',$r_h_id);
		return $this->db->get()->row_array();	  
    }
	
	/* resrvation brief*/
	public function save_reservation_brief_details($data){
	$this->db->insert('reservation_brief',$data);
	return $this->db->insert_id();	
	}
	public function get_reservation_brief_list(){
	$this->db->select('reservation_brief.*')->from('reservation_brief');
	$this->db->where('reservation_brief.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_reservationbrief_details($r_b_id){
	$this->db->select('reservation_brief.*')->from('reservation_brief');
	$this->db->where('r_b_id',$r_b_id);
	return $this->db->get()->row_array();	  
    }
	public function update_reservationbrief_details($r_b_id,$data){
	$this->db->where('r_b_id',$r_b_id);
    return $this->db->update("reservation_brief",$data);
	}
	public function delete_reservation_brief_details($r_b_id){
	$this->db->where('r_b_id',$r_b_id);
	return $this->db->delete('reservation_brief');
	}
	
	/* gallery*/
	
	public function save_gallery_details($data){
	$this->db->insert('gallery',$data);
	return $this->db->insert_id();	
	}
	public function get_gallery_list(){
	$this->db->select('gallery.*')->from('gallery');
	$this->db->where('gallery.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_gallery_details($g_id){
	$this->db->select('gallery.*')->from('gallery');
	$this->db->where('g_id',$g_id);
	return $this->db->get()->row_array();	
	}	
	public function update_gallery_details($g_id,$data){
	$this->db->where('g_id',$g_id);
    return $this->db->update("gallery",$data);
	}
	public function delete_gallery_details($g_id){
	$this->db->where('g_id',$g_id);
	return $this->db->delete('gallery');
	}
	/* blog */
	public function save_blog_details($data){
	$this->db->insert('blog',$data);
	return $this->db->insert_id();	
	}
	public function get_blog_list(){
	$this->db->select('blog.*')->from('blog');
	$this->db->where('blog.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_blog_details($b_id){
	$this->db->select('blog.*')->from('blog');
	$this->db->where('b_id',$b_id);
	return $this->db->get()->row_array();	
	}	
	public function update_blog_details($b_id,$data){
	$this->db->where('b_id',$b_id);
    return $this->db->update("blog",$data);
	}
	public function delete_blog_details($b_id){
	$this->db->where('b_id',$b_id);
	return $this->db->delete('blog');
	}
	/* chefs*/
	public function save_chefs_details($data){
	$this->db->insert('chefs',$data);
	return $this->db->insert_id();	
	}
	public function get_chefs_list(){
	$this->db->select('chefs.*')->from('chefs');
	$this->db->where('chefs.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_chefs_details($c_id){
	$this->db->select('chefs.*')->from('chefs');
	$this->db->where('c_id',$c_id);
	return $this->db->get()->row_array();	
	}
	public function update_chefs_details($c_id,$data){
	$this->db->where('c_id',$c_id);
    return $this->db->update("chefs",$data);
	}
	public function delete_chefs_details($c_id){
	$this->db->where('c_id',$c_id);
	return $this->db->delete('chefs');
	}
	
	
	/*testimonial*/
	
	public function save_testimonial_details($data){
	$this->db->insert('testimonial',$data);
	return $this->db->insert_id();	
	}
	public function get_testimonial_list(){
	$this->db->select('testimonial.*')->from('testimonial');
	$this->db->where('testimonial.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_testimonial_details($t_id){
	$this->db->select('testimonial.*')->from('testimonial');
	$this->db->where('t_id',$t_id);
	return $this->db->get()->row_array();	
	}
	public function update_testimonial_details($t_id,$data){
	$this->db->where('t_id',$t_id);
    return $this->db->update("testimonial",$data);
	}
	public function delete_testimonial_details($t_id){
	$this->db->where('t_id',$t_id);
	return $this->db->delete('testimonial');
	}
	/* serves*/
	public function save_services_details($data){
	$this->db->insert('services',$data);
	return $this->db->insert_id();	
	}
	public function get_services_list(){
	$this->db->select('services.*')->from('services');
	$this->db->where('services.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_services_details($s_id){
	$this->db->select('services.*')->from('services');
	$this->db->where('s_id',$s_id);
	return $this->db->get()->row_array();	
	}
	public function update_services_details($s_id,$data){
	$this->db->where('s_id',$s_id);
    return $this->db->update("services",$data);
	}
	public function delete_services_details($s_id){
	$this->db->where('s_id',$s_id);
	return $this->db->delete('services');
	}
	
	
	
	public function save_aboutus_brief_details($data){
	$this->db->insert('aboutus_brief',$data);
	return $this->db->insert_id();	
	}
	public function get_aboutus_brief_list(){
	$this->db->select('aboutus_brief.*')->from('aboutus_brief');
	$this->db->where('aboutus_brief.status !=', 2);
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
	
	
	
	public function save_aboutus_brief_paragrap_details($data){
	$this->db->insert('aboutus_paragrap',$data);
	return $this->db->insert_id();	
	}
	public function edit_aboutus_brief_details($a_b_id){
	$this->db->select('aboutus_brief.*')->from('aboutus_brief');
	$this->db->where('a_b_id',$a_b_id);
	return $this->db->get()->row_array();	
	}
	public function update_aboutus_brief_details($a_b_id,$data){
	$this->db->where('a_b_id',$a_b_id);
    return $this->db->update("aboutus_brief",$data);
	}
	public function delete_aboutus_brief_details($a_b_id){
	$this->db->where('a_b_id',$a_b_id);
	return $this->db->delete('aboutus_brief');
	}
	
	/* servies brief*/
	public function save_services_brief_list_details($data){
	$this->db->insert('servies_brief_banner',$data);
	return $this->db->insert_id();	
	}
	public function save_services_brief_details($data){
	$this->db->insert('services_brief',$data);
	return $this->db->insert_id();	
	}		
	public function get_services_brief_list(){
	$this->db->select('services_brief.*')->from('services_brief');
	$this->db->where('services_brief.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_servies_brief_details($s_r_id){
	$this->db->select('services_brief.*')->from('services_brief');
	$this->db->where('s_r_id',$s_r_id);
	return $this->db->get()->row_array();	
	}
	public function update_services_brief_details($s_r_id,$data){
	$this->db->where('s_r_id',$s_r_id);
    return $this->db->update("services_brief",$data);
	}
	public function delete_services_brief_details($s_r_id){
	$this->db->where('s_r_id',$s_r_id);
	return $this->db->delete('services_brief');
	}
	/* menu */
	public function save_menu_list_details($data){
	$this->db->insert('menu_data',$data);
	return $this->db->insert_id();	
	}
	public function save_menu_details($data){
	$this->db->insert('menu',$data);
	return $this->db->insert_id();	
	}
	public function get_menu_list(){
	$this->db->select('menu_data.*')->from('menu_data');
	$this->db->where('menu_data.status !=', 2);
	return $this->db->get()->result_array();	
	}
	public function edit_menu_details($m_d_id){
	$this->db->select('menu_data.*')->from('menu_data');
	$this->db->where('m_d_id',$m_d_id);
	return $this->db->get()->row_array();	
	}
	public function update_menu_details($m_d_id,$data){
	$this->db->where('m_d_id',$m_d_id);
    return $this->db->update("menu_data",$data);
	}
	public function delete_menu_details($m_d_id){
	$this->db->where('m_d_id',$m_d_id);
	return $this->db->delete('menu_data');
	}
	
	/* Contact Us */
	public function save_contact_data_details($data){
	$this->db->insert('contact_data',$data);
	return $this->db->insert_id();	
	}
	public function save_contactus_details($data){
	$this->db->insert('contactus',$data);
	return $this->db->insert_id();	
	}
	public function update_contact_data_details(){
		$this->db->set('status',2);
		$this->db->update("contactus");
	}
	public function update_contact_data_data_details(){
	$this->db->set('status',2);
    $this->db->update("contact_data");
	}
	
	
	/*   menu brief */
	public function save_menu_brief_all_details($data){
	$this->db->insert('menu_brief_all_details',$data);
	return $this->db->insert_id();	
	}
	
	
	
	
	
	
	public function save_menu_brief_details($data){
	$this->db->insert('menu_brief',$data);
	return $this->db->insert_id();	
	}
	public function get_menu_brief_list(){
	$this->db->select('menu_brief.*')->from('menu_brief');
	$this->db->where('menu_brief.status !=', 2);
	return $this->db->get()->result_array();
	
	}
	
	public  function get_menu_brief_all_details($menu_brief_id){
	$this->db->select('*')->from('menu_brief_all_details');
	$this->db->where('menu_brief_all_details.menu_brief_id ', $menu_brief_id);
	$this->db->where('menu_brief_all_details.status !=', 2);
	 return $this->db->get()->result_array();
	}	
	public function edit_menu_brief_details($m_b_id){
	$this->db->select('menu_brief.*')->from('menu_brief');
	$this->db->where('m_b_id',$m_b_id);
	return $this->db->get()->row_array();	
	}
	public function update_menu_brief_details($m_b_id,$data){
	$this->db->where('m_b_id',$m_b_id);
    return $this->db->update("menu_brief",$data);
	}
	public function delete_menu_brief_details($m_b_id){
	$this->db->where('m_b_id',$m_b_id);
	return $this->db->delete('menu_brief');
	}
	
	
	public function edit_menu_all_brief_details($m_b_a_d_id){
	$this->db->select('menu_brief_all_details.*')->from('menu_brief_all_details');
	$this->db->where('m_b_a_d_id',$m_b_a_d_id);
	return $this->db->get()->row_array();	
	}
	public function update_menu_all_brief_details($m_b_a_d_id,$data){
	$this->db->where('m_b_a_d_id',$m_b_a_d_id);
    return $this->db->update("menu_brief_all_details",$data);
	}
	public function delete_menu_all_brief_details($m_b_a_d_id){
	$this->db->where('m_b_a_d_id',$m_b_a_d_id);
	return $this->db->delete('menu_brief_all_details');
	}
	
	
	
	
	public function get_daily_details(){
	$this->db->select('menu_brief.*')->from('menu_brief');
	$this->db->where('menu_type','Daily special');
	$this->db->where('status',1);
	return $this->db->get()->row_array()?1:0;	
	}
	/* daily special menu */
	public  function check_special_menu_active_ornot(){
	 $this->db->select('menu_brief.*')->from('menu_brief');
	 $this->db->where('menu_type','Daily special');
	 $this->db->where('status',1);
	 return $this->db->get()->row_array();	
	}
	
	
	
	
	
	
	
	
  }
	
	
	
