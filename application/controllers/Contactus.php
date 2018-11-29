<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Contactus extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();
			$this->load->library('user_agent');		
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
	  'iframe_address'=>isset($post['iframe_address'])?$post['iframe_address']:'',
	  'facebook_link'=>isset($post['facebook_link'])?$post['facebook_link']:'',
	  'twitter_link'=>isset($post['twitter_link'])?$post['twitter_link']:'',
	  'google_link'=>isset($post['google_link'])?$post['google_link']:'',
	  'pinterest_link'=>isset($post['pinterest_link'])?$post['pinterest_link']:'',
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

public  function contactpost(){
	$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$addcontact=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'phone'=>isset($post['phone'])?$post['phone']:'',
				'message'=>isset($post['message'])?$post['message']:'',
				'create_at'=>date('Y-m-d H:i:s'),
				);
				$save=$this->Header_model->save_contactus($addcontact);
				if(count($save)>0){
						$details=$this->Header_model->check_contact_details();
						$this->load->library('email');
						$this->load->library('email');
							$this->email->set_newline("\r\n");
							$this->email->set_mailtype("html");
						$this->email->from($post['email']);
						$this->email->to($details['email']);
						$this->email->subject('Contact us - Request');
						//$body = $this->load->view('email/contactus.php',$data,true);
						//$html = $this->load->view('email/orderconfirmation.php', $data, true); 

						$msg='Name:'.$post['name'].'<br> Email :'.$post['email'].'<br> Phone  number :'.$post['phone'].'<br> Message :'.$post['message'];
						$this->email->message($msg);
						//echo $body;exit;
						$this->email->send();
						
						//echo "test";exit;
						$this->session->set_flashdata('success',"Your message was successfully sent.");
						redirect($this->agent->referrer());
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect($this->agent->referrer());
			}
}
public  function subscribe(){
	$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$addcontact=array(
				'email'=>isset($post['email'])?$post['email']:'',
				'create_at'=>date('Y-m-d H:i:s'),
				);
				$check=$this->Header_model->check_email_subscribe($post['email']);
				if(count($check)>0){
					   $this->session->set_flashdata('error',"You are already subscribed ");
						redirect($this->agent->referrer());
					
				}else{
					$save=$this->Header_model->save_subscribe($addcontact);
					if(count($save)>0){
					
							$this->session->set_flashdata('success',"You have been successfully subscribed ");
							redirect($this->agent->referrer());
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect($this->agent->referrer());
					}
				}
}
	
   
   
	
	
}	
	
?>	
	



