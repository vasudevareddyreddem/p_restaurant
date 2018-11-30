<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');

class Dashboard extends In_frontend {

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
	          $data['hot_dishes']=$this->Dashboard_model->get_hot_dishes_count_list();
			   $data['chefs_count']=$this->Dashboard_model->get_chefs_count_list();
			   $data['food_items']=$this->Dashboard_model->get_food_items_count_list();
		      $data['testimal_count']=$this->Dashboard_model->get_testmals_count_list();
			   //echo '<pre>';print_r($data);exit;
	            $this->load->view('admin/index',$data);
				$this->load->view('admin/footer');
				
		   }else{
			 $this->session->set_flashdata('error','Please login to continue');
			 redirect('');
		}
	}
	public function changepassword()
	{
		if($this->session->userdata('restaurantdetails'))
		{
			$admindetails=$this->session->userdata('restaurantdetails');
				$this->load->view('admin/changepassword');
				$this->load->view('admin/footer');
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function changepasswordpost(){
	 
		if($this->session->userdata('restaurantdetails'))
		{
			$admindetails=$this->session->userdata('restaurantdetails');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$admin_details = $this->Dashboard_model->get_adminpassword_details($admindetails['u_id']);
			
			if($admin_details['password']== md5($post['oldpassword'])){
				if(md5($post['password'])==md5($post['confirmpassword'])){
						$updateuserdata=array(
						'password'=>md5($post['confirmpassword']),
						'org_password'=>$post['confirmpassword'],
						'updated_at'=>date('Y-m-d H:i:s'),
						);
						//echo '<pre>';print_r($updateuserdata);exit;
						$upddateuser = $this->Dashboard_model->update_admin_details($admindetails['u_id'],$updateuserdata);
						//echo '<pre>';print_r($upddateuser);exit;
						if(count($upddateuser)>0){
							$this->session->set_flashdata('success',"password successfully updated");
							redirect('dashboard/changepassword');
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('dashboard/changepassword');
						}
					
				}else{
					$this->session->set_flashdata('error',"Password and Confirm password are not matched");
					redirect('dashboard/changepassword');
				}
				
			}else{
				$this->session->set_flashdata('error',"Old password are not matched");
				redirect('dashboard/changepassword');
			}
				
			
		}else{
			 $this->session->set_flashdata('error','Please login to continue');
			 redirect('');
		} 
	 
	}
	
	
	
	
	public function logout()
	{
	if($this->session->userdata('restaurantdetails'))
		{
			$admindetails=$this->session->userdata('restaurantdetails');
			$this->session->unset_userdata($restaurantdetails);
			$this->session->unset_userdata('restaurantdetails');
			$this->session->sess_destroy('restaurantdetails');
			$this->session->unset_userdata('restaurantdetails');
			redirect('');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('');
		} 
	}

	
		
}
	
	
	

	


