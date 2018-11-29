<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Reservationtime extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function index(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
	      $this->load->view('reservation/reservation_table');
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
		//echo'<pre>';print_r($post);exit;
		$save_data=array(
		'time_form'=>isset($post['time_form'])?$post['time_form']:'',
		'time_to'=>isset($post['time_to'])?$post['time_to']:'',
		'time_differnce'=>isset($post['time_differnce'])?$post['time_differnce']:'',
		'status'=>1,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
        'created_by'=>$admindetails['u_id'],
          );
		 //echo'<pre>';print_r($save_data);exit; 
		$save=$this->Header_model->save_reservation_time_details($save_data);
		if(count($save)>0){
				$this->session->set_flashdata('success',"Reservation Time details successfully added");	
				redirect('reservationtime');
			}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('reservationtime');
			}
	
		}		
	
	
	}
   
   public function lists(){
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          $data['reser_time']=$this->Header_model->get_reservation_time_list();
		 //echo'<pre>';print_r($data);exit; 
	      $this->load->view('reservation/reservation_table_list',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
    }
   public function edit(){
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
         $time_id=base64_decode($this->uri->segment(3));
		
		 $data['edit_reser_time']=$this->Header_model->edit_reservation_time_details($time_id);
		 //echo'<pre>';print_r($data);exit; 

		 
	      $this->load->view('reservation/edit_reservation_time',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
    }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
	
	
}	
	
?>	
	



