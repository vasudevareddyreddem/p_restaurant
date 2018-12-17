<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class In_frontend extends CI_Controller {

	
	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('User_model');
		$this->load->model('Dashboard_model');
	    $this->load->model('Header_model');
			if($this->session->userdata('restaurantdetails'))
			{
				$admindetails=$this->session->userdata('restaurantdetails');
			 $data['userdetails']=$this->User_model->get_all_admin_details($admindetails['u_id']);
		 //echo'<pre>';print_r($data);exit;
	
				//echo '<pre>';print_r($data);exit;
				$this->load->view('admin/header',$data);
				$this->load->view('admin/sidebar');

			}
	}
	
	
}
