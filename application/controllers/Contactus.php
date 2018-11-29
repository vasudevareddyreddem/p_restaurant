<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Contactus extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function index(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 $data['contact_details']=$this->Header_model->check_contact_details();
	      $this->load->view('admin/contactus',$data);
	      $this->load->view('admin/footer');
	    //echo '<pre>';print_r($data);exit;
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
	
	public function addpost(){
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();
		 $details=$this->Header_model->check_contact_details();
		if($_FILES['banner']['name']!=''){
					$images=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/contactus/" . $_FILES['banner']['name']);

					}else{
					$images=$details['banner'];
					}
					
	 $save_data=array(
	 'banner'=>$images,
	  'email'=>isset($post['email'])?$post['email']:'',
	  'phone'=>isset($post['phone'])?$post['phone']:'',
	  'email_id'=>isset($post['email_id'])?$post['email_id']:'',
	  'address'=>isset($post['address'])?$post['address']:'',
	  'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
	  'facebook_link'=>isset($post['facebook_link'])?$post['facebook_link']:'',
	  'twitter_link'=>isset($post['twitter_link'])?$post['twitter_link']:'',
	  'google_link'=>isset($post['google_link'])?$post['google_link']:'',
	  'Mondaytime_from'=>isset($post['Mondaytime_from'])?$post['Mondaytime_from']:'',
	  'Mondaytime_to'=>isset($post['Mondaytime_to'])?$post['Mondaytime_to']:'',
	  'Tuesdaytime_from'=>isset($post['Tuesdaytime_from'])?$post['Tuesdaytime_from']:'',
	  'Tuesdaytime_to'=>isset($post['Tuesdaytime_to'])?$post['Tuesdaytime_to']:'',
	  'Wednesdaytime_from'=>isset($post['Wednesdaytime_from'])?$post['Wednesdaytime_from']:'',
	  'Wednesdaytime_to'=>isset($post['Wednesdaytime_to'])?$post['Wednesdaytime_to']:'',
	  'Thursdaytime_from'=>isset($post['Thursdaytime_from'])?$post['Thursdaytime_from']:'',
	  'Thursdaytime_to'=>isset($post['Thursdaytime_to'])?$post['Thursdaytime_to']:'',
	  'Fridaytime_from'=>isset($post['Fridaytime_from'])?$post['Fridaytime_from']:'',
	  'Fridaytime_to'=>isset($post['Fridaytime_to'])?$post['Fridaytime_to']:'',
	  'Saturdaytime_from'=>isset($post['Saturdaytime_from'])?$post['Saturdaytime_from']:'',
	  'Saturdaytime_to'=>isset($post['Saturdaytime_to'])?$post['Saturdaytime_to']:'',
	  'Sundaytime_from'=>isset($post['Sundaytime_from'])?$post['Sundaytime_from']:'',
	  'Sundaytime_to'=>isset($post['Sundaytime_to'])?$post['Sundaytime_to']:'',
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
	 //echo '<pre>';print_r($save_data);exit;
		$check=$this->Header_model->check_contact_details();
		if(count($check)>0){
			$save=$this->Header_model->update_contact_data_details($save_data);
		}else{
			$save=$this->Header_model->save_contactus_details($save_data);
		}
		
		if(count($save)>0){
				$this->session->set_flashdata('success',"contactus details successfully added");	
				redirect('contactus/index');
			           }else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('contactus/index');
					}
	
		}		
	
	
	}	
   
	
	
   
   
	
	
}	
	
?>	
	



