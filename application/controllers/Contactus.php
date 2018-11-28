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
          
		 
	      $this->load->view('admin/contactus');
	      $this->load->view('admin/footer');
	    
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
		//echo'<pre>';print_r($post);
		
	
	
	
		
		if($_FILES['banner']['name']!=''){
					$images=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$images='';
					}
					
		 $contact_delete=$this->Header_model->update_contact_data_details();				
		 $contact_data_delete=$this->Header_model->update_contact_data_data_details();				
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
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
	 //echo '<pre>';print_r($save_data);exit;
    $save=$this->Header_model->save_contactus_details($save_data);
		 //$aa=array_unique($post['day'],$post['time_from'],$post['time_to']);
	 
	// echo '<pre>';print_r($aa);exit;
		      if(count($save)>0){
				 if(isset($post['day']) && count($post['day'])>0){ 
				 $cnt=0;foreach($post['day'] as $list){ 
					  $add_data=array(
					  'contact_id'=>isset($save)?$save:'',
					  'day'=>$list,
					  'time_from'=>$post['time_from'][$cnt],
					  'time_to'=>$post['time_to'][$cnt],
					  'status'=>1,
					  'created_at'=>date('Y-m-d H:i:s'),
					  'updated_at'=>date('Y-m-d H:i:s'),
					  'created_by'=>$admindetails['u_id'],
					  );
	   //echo '<pre>';print_r($add_data);
    $this->Header_model->save_contact_data_details($add_data);	
					   

				        $cnt++;}
				 }
				 
				 
				 
				 //exit;
		 
	 
	  //echo '<pre>';print_r($save);exit;
		      if(count($save)>0){
					$this->session->set_flashdata('success',"contactus details successfully added");	
					redirect('contactus/index');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('contactus/index');
					}
	
	               }else{
		           $this->session->set_flashdata('error',"Please login and continue");
		          redirect('');  
	          }
	
  }		
	
	
	}	
   
 public function backup_addpost(){
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();	
		//echo'<pre>';print_r($post);exit;
		
	
	
	 $cnt=1;foreach($post['day'] as $key => $val) {
	  $add_data=array(
	  'emp_id'=>isset($admindetails['u_id'])?$admindetails['u_id']:'',
	  'day'=>$val,
	  'time_from'=>$post['time_from'][$key],
	  'time_to'=>$post['time_to'][$key],
	  );
	   //echo '<pre>';print_r($add_data);
      $save=$this->Header_model->save_contact_details($add_data);	

	 
	 
      // here your insert query
     $cnt++;}

	// exit;
	
	$str_Names=implode(",", $post['day']);
	
    $star=implode(",", $post['time_from']);  
	
	$str=implode(",", $post['time_to']);	
		
		if($_FILES['banner']['name']!=''){
					$images=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$images='';
					}
	 $save_data=array(
	 'banner'=>$images,
	  'email'=>isset($post['email'])?$post['email']:'',
	  'phone'=>isset($post['phone'])?$post['phone']:'',
	  'email_id'=>isset($post['email_id'])?$post['email_id']:'',
	  'address'=>isset($post['address'])?$post['address']:'',
	  'facebook_link'=>isset($post['facebook_link'])?$post['facebook_link']:'',
	  'twitter_link'=>isset($post['twitter_link'])?$post['twitter_link']:'',
	  'google_link'=>isset($post['google_link'])?$post['google_link']:'',
	  'day'=>$str_Names,
	  'time_from'=>$star,
	  'time_to'=>$str,
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
	 //echo '<pre>';print_r($save_data);exit;
    $save=$this->Header_model->save_contactus_details($save_data);
		 
		 
	 
	  //echo '<pre>';print_r($save);exit;
		      if(count($save)>0){
					$this->session->set_flashdata('success',"contactus details successfully added");	
					redirect('contactus/index');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('contactus/index');
					}
	
	               }else{
		           $this->session->set_flashdata('error',"Please login and continue");
		          redirect('');  
	          }
	
  }		
	
   
   
	
	
}	
	
?>	
	



