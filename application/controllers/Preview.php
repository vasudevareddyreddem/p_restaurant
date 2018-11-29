<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Preview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Frontend_model');
		$this->load->library('session');
	    if($this->session->userdata('restaurantdetails'))
			{
			   $admindetails=$this->session->userdata('restaurantdetails');
			   $data['contactus']=$this->Frontend_model->contactus_list($admindetails);
			  $data['topheader']=$this->Frontend_model->topheader_details_list($admindetails);
             $data['opening_hours']=$this->Frontend_model->contactus_details_list($admindetails);
			             $data['header_imgs']=$this->Frontend_model->get_header_img_details();


		        //echo'<pre>';print_r($data);exit;
			   $this->load->view('html/header',$data);

			   
			}
	}

	
	public function index(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
            $data['header_imgs']=$this->Frontend_model->get_header_img_details();
            $data['blog_list']=$this->Frontend_model->blog_details_list();
		 		  //echo'<pre>';print_r($data);exit;
          $data['gallery_list']=$this->Frontend_model->gallery_details_list();
		  $data['testmonial_list']=$this->Frontend_model->testmonial_details_list();
		  $data['chefs_list']=$this->Frontend_model->chefs_details_list();
		   $data['menu_list']=$this->Frontend_model->menu_item_details_list();
		   $data['servies_list']=$this->Frontend_model->servies_details_list();
		   $data['daily_special_list']=$this->Frontend_model->daily_special_list();
			//echo'<pre>';print_r($data['header_imgs']);exit;
	      $this->load->view('admin/preview-index',$data);
          $this->load->view('html/footer');
 
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
	
	
	
	
   public function aboutus(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
           
		 $data['aboutus_brief_list']=$this->Frontend_model->get_aboutus_brief_list();	
		//echo '<pre>';print_r($data);exit; 
		 
	     $this->load->view('html/about',$data);
		$this->load->view('html/footer');   

         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
   
   
 public function menu(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
         $data['daily_special_list']=$this->Frontend_model->daily_special_list(); 
		 $data['menu_special']=$this->Frontend_model->menu_special_list();
		 
		 
	      $this->load->view('html/menu',$data);
		  $this->load->view('html/footer');   

         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
     
   
   
   public function reservation(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          $data['servies_brief']=$this->Frontend_model->servies_brief_list();
		 //echo'<pre>';print_r($data);exit;
	      $this->load->view('html/reservation',$data);
		  $this->load->view('html/footer');   

         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
     
   
  public function contact(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          //echo'<pre>';print_r($admindetails);exit;
		  $data['contactus']=$this->Frontend_model->contactus_details_list($admindetails);
		// echo'<pre>';print_r($data);exit;
		 
		 
	      $this->load->view('html/contact',$data);
		  $this->load->view('html/footer');   

         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
} 
   
   
	
	
}	
	
?>	
	



