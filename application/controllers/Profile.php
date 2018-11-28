<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');

class Profile extends In_frontend {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->library('session');
		
	}
	public function index()
	{


		if($this->session->userdata('restaurantdetails'))
		{
			$admindetails=$this->session->userdata('restaurantdetails');
	       $data['userdetails']=$this->User_model->get_all_admin_details($admindetails['u_id']);
		 //echo'<pre>';print_r($data);exit;
	
	            $this->load->view('admin/profile',$data);
				$this->load->view('admin/footer');

				
		}else{
			 $this->session->set_flashdata('error','Please login to continue');
			 redirect('');
		}
	}
	public function edit()
	{
		if($this->session->userdata('restaurantdetails'))
		{
			$admindetails=$this->session->userdata('restaurantdetails');
			 $data['userdetails']=$this->User_model->get_all_admin_details($admindetails['u_id']);
		 //echo'<pre>';print_r($data);exit;
			
				$this->load->view('admin/edit-profile',$data);
				$this->load->view('admin/footer');
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
		
		
	}
	
	public function editpost()
	{
		if($this->session->userdata('restaurantdetails'))
		{
			$admindetails=$this->session->userdata('restaurantdetails');
		$userdetails=$this->User_model->get_all_admin_details($admindetails['u_id']);
		 //echo'<pre>';print_r($userdetails);exit;
			$post=$this->input->post();
			//echo'<pre>';print_r($post);exit;
			
			
			
			
			if($_FILES['profile_pic']['name']!=''){
					$cat=$_FILES['profile_pic']['name'];
					move_uploaded_file($_FILES['profile_pic']['tmp_name'], "assets/adminprofilepic/" . $_FILES['profile_pic']['name']);

					}else{
					$cat=$userdetails['profile_pic'];
					}
          $updatedetails=array(
					'name'=>isset($post['name'])?$post['name']:'',
					'email'=>isset($post['email'])?$post['email']:'',
					'gender'=>isset($post['gender'])?$post['gender']:'',
					'current_address'=>isset($post['current_address'])?$post['current_address']:'',
					'premenent_address'=>isset($post['premenent_address'])?$post['premenent_address']:'',
					'profile_pic'=>$cat,
					);
					//echo'<pre>';print_r($updatedetails);exit;
           $profile_update=$this->User_model->update_profile_details($admindetails['u_id'],$updatedetails);
				//echo'<pre>';print_r($profile_update);exit;
			if(count($profile_update)>0){
				$this->session->set_flashdata('success','Profile details successfully updated');
				redirect('profile');
				
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('profile/edit');
			}
		       
		    }else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		}
	
}	
	
	

}
	
	
	
	

	


