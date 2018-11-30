<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Frontend_model');
			   $data['contactus']=$this->Frontend_model->contactus_list();
			    $data['opening_hours']=$this->Frontend_model->contactus_details_list();
				$data['topheader']=$this->Frontend_model->topheader_details_list();

		      //echo'<pre>';print_r($data);exit;
			   $this->load->view('html/header',$data);
			
	}

	public function index(){
          $data['blog_list']=$this->Frontend_model->blog_details_list();
		 		  //echo'<pre>';print_r($data);exit;
          $data['gallery_list']=$this->Frontend_model->gallery_details_list();
		  $data['testmonial_list']=$this->Frontend_model->testmonial_details_list();
		  $data['chefs_list']=$this->Frontend_model->chefs_details_list();
		   $data['menu_list']=$this->Frontend_model->menu_details_list();
		   $data['servies_list']=$this->Frontend_model->servies_details_list();
		   $data['daily_special_list']=$this->Frontend_model->daily_special_list();
		   $data['menu_special']=$this->Frontend_model->menu_special_list();
		   
		 //echo'<pre>';print_r($data['menu_special']);exit;
	      $this->load->view('html/index',$data);
          $this->load->view('html/footer');
 
	    
         
}
	

  
   
   
	
	
}	
	
?>	
	



