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
	
	
 
   
   
	
	
}	
	
?>	
	



