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
          
		 $data['reservation_time']=$this->Header_model->check_reservation_time_details();
		 //echo'<pre>';print_r($data);exit;
	      $this->load->view('reservation/reservation_time',$data);
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
		$check=$this->Header_model->check_reservation_time_details();
		if(count($check)>0){
			$save=$this->Header_model->update_reservation_time_data_details($save_data);
		}else{
			$save=$this->Header_model->save_reservation_time_details($save_data);
		}
		
		if(count($save)>0){
				$this->session->set_flashdata('success',"Reservation Time details successfully added");	
				redirect('reservationtime');
			}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('reservationtime');
			}
	
		}		
	
	
	}
   
  
   
   
   
   
	
	
 }	
	
?>	
	



