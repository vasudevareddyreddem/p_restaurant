<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session');
	    if($this->session->userdata('restaurantdetails'))
			{
			   $admindetails=$this->session->userdata('restaurantdetails');
			   
			   $this->load->view('admin/header');
			   $this->load->view('admin/sidebar');
			   $this->load->view('admin/footer');
			   
			}
	}


	public function index()
	{	
		if(!$this->session->userdata('restaurantdetails'))
		{
			$this->load->view('admin/login');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('');
		}
	}
		
	public function loginpost()
	{
		if(!$this->session->userdata('restaurantdetails'))
		{
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$login_deta=array('email'=>$post['email'],'password'=>md5($post['password']));
			$check_login=$this->User_model->login_details($login_deta);
			//echo '<pre>';print_r($check_login);exit;
				$this->load->helper('cookie');
			if(count($check_login)>0){
				$login_details=$this->User_model->get_admin_details($check_login['u_id']);
				//echo '<pre>';print_r($login_details);exit;
				$this->session->set_userdata('restaurantdetails',$login_details);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('loginerror',"Invalid Email Address or Password!");
				redirect('');
			}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('');
		}
	}
	
   public function forgot(){
	 if(!$this->session->userdata('restaurantdetails'))
		{	 
		 
	     $this->load->view('admin/forget-password');   
	      }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
	
public function forgotpost(){
		$post=$this->input->post();
		//echo'<pre>';print_r($post);exit;
		$check_email=$this->User_model->check_email_exits($post['email']);
		//echo'<pre>';print_r($check_email);exit;
			if(count($check_email)>0){
				
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->to($check_email['email']);
				$this->email->from('admin@pracha.com', 'pracha'); 
				$this->email->subject('Forgot Password'); 
				$body = "<b> Your Account login Password is </b> : ".$check_email['org_password'];
				$this->email->message($body);
				//echo'<pre>';print_r($body);exit;
				if ($this->email->send())
				{
					$this->session->set_flashdata('success',"Password sent to your registered email address. Please Check your registered email address");
					redirect('user');
				}else{
					$this->session->set_flashdata('error'," In Localhost mail  didn't sent");
					redirect('user');
				}
				

			}else{
				$this->session->set_flashdata('error','The email you entered is not a registered email. Please try again. ');
				redirect('user');	
			}
		
}	
	
	
	
		
}
	
	
	

	


