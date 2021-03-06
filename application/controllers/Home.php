<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Frontend_model');
		$data['contactus']=$this->Frontend_model->contactus_list();
		$data['opening_hours']=$this->Frontend_model->contactus_details_list();
		$data['topheader']=$this->Frontend_model->topheader_details_list();
		$data['header_imgs']=$this->Frontend_model->get_header_img_details();
		//echo'<pre>';print_r($data);exit;
		$this->load->view('html/header',$data);
			
	}

	public function index(){

    $data['header_imgs']=$this->Frontend_model->get_header_img_details();
            $data['blog_list']=$this->Frontend_model->blog_details_list();
		 		 // echo'<pre>';print_r($data);exit;
          $data['gallery_list']=$this->Frontend_model->gallery_details_list();
		  $data['testmonial_list']=$this->Frontend_model->testmonial_details_list();
		  $data['chefs_list']=$this->Frontend_model->chefs_details_list();
		   $data['menu_list']=$this->Frontend_model->menu_item_details_list();
		   $data['servies_list']=$this->Frontend_model->servies_details_list();
		   $data['daily_special_list']=$this->Frontend_model->daily_special_list();
		   $reservation_times=$this->Frontend_model->get_reservation_times_list();
		 $data['contactus']=$this->Frontend_model->contactus_list();
		 $time_list=array("12:00 am","12:30 am","01:00 am","01:30 am","02:00 am","02:30 am","03:00 am","03:30 am","04:00 am","04:30 am","05:00 am","05:30 am","06:00 am","06:30 am","07:00 am","07:30 am","08:00 am","08:30 am","09:00 am","09:30 am","10:00 am","10:30 am","11:00 am","11:30 am","12:00 pm","12:30 pm","01:00 pm","01:30 pm","02:00 pm","02:30 pm","03:00 pm","03:30 pm","04:00 pm","04:30 pm","05:00 pm","05:30 pm","06:00 pm","06:30 pm","07:00 pm","07:30 pm","08:00 pm","08:30 pm","09:00 pm","09:30 pm","10:00 pm","10:30 pm","11:00 pm","11:30 pm");
			$start_date =$reservation_times['time_form'];
			$end_date = $reservation_times['time_to'];
			$interval = '60 mins';
			$format = '12';
			$startTime = strtotime($start_date); 
			$endTime   = strtotime($end_date);
			$returnTimeFormat = ($format == '12')?'h:i a':'G:i:s';

			$current   = time(); 
			$addTime   = strtotime('+'.$interval, $current); 
			$diff      = $addTime - $current;

			$times = array(); 
			while ($startTime < $endTime) { 
			$times[] = date($returnTimeFormat, $startTime); 
			$startTime += $diff; 
			} 
			$times[] = date($returnTimeFormat, $startTime);
			if(isset($times) && count($times)>0){
				$data['time_list']=$times;
			}else{
				$data['time_list']=array();
			}
	      $this->load->view('html/index',$data);
          $this->load->view('html/footer');
 
	    
         
}
	
public function aboutus(){
	 $data['aboutus_brief_list']=$this->Frontend_model->get_aboutus_brief_list();
		 //echo '<pre>';print_r($data);exit;
		 $data['chefs_count']=$this->Frontend_model->get_chefs_count_list();	
		 $data['hot_dishes']=$this->Frontend_model->get_hot_dishes_count_list();
		 $data['food_items']=$this->Frontend_model->get_food_items_count_list();
		 $data['testimal_count']=$this->Frontend_model->get_testmals_count_list();
		 $reservation_times=$this->Frontend_model->get_reservation_times_list();
		 $data['contactus']=$this->Frontend_model->contactus_list();
			//echo '<pre>';print_r($data);exit; 
		 $this->load->view('html/about',$data);
		 $this->load->view('html/footer');   
	
  }
  public function reservation(){
		  $data['servies_brief']=$this->Frontend_model->servies_brief_list();
		 //echo'<pre>';print_r($data);exit;
		  $reservation_times=$this->Frontend_model->get_reservation_times_list();
		   //echo'<pre>';print_r($reservation_times);exit;
		 $time_list=array("12:00 am","12:30 am","01:00 am","01:30 am","02:00 am","02:30 am","03:00 am","03:30 am","04:00 am","04:30 am","05:00 am","05:30 am","06:00 am","06:30 am","07:00 am","07:30 am","08:00 am","08:30 am","09:00 am","09:30 am","10:00 am","10:30 am","11:00 am","11:30 am","12:00 pm","12:30 pm","01:00 pm","01:30 pm","02:00 pm","02:30 pm","03:00 pm","03:30 pm","04:00 pm","04:30 pm","05:00 pm","05:30 pm","06:00 pm","06:30 pm","07:00 pm","07:30 pm","08:00 pm","08:30 pm","09:00 pm","09:30 pm","10:00 pm","10:30 pm","11:00 pm","11:30 pm");
			 //echo'<pre>';print_r($time_list);exit;
			$start_date =$reservation_times['time_form'];
			$end_date = $reservation_times['time_to'];
			$interval = '60 mins';
			$format = '12';
			$startTime = strtotime($start_date); 
			$endTime   = strtotime($end_date);
			$returnTimeFormat = ($format == '12')?'h:i a':'G:i:s';
			$current   = time(); 
			$addTime   = strtotime('+'.$interval, $current); 
			$diff      = $addTime - $current;

			$times = array(); 
			while ($startTime < $endTime) { 
			$times[] = date($returnTimeFormat, $startTime); 
			$startTime += $diff; 
			} 
			$times[] = date($returnTimeFormat, $startTime);
			if(isset($times) && count($times)>0){
				$data['time_list']=$times;
			}else{
				$data['time_list']=array();
			}

	      $this->load->view('html/reservation-home',$data);
		  $this->load->view('html/footer');   
	    
  }
   public function menu(){
	   $data['daily_special_list']=$this->Frontend_model->daily_special_list(); 
		$data['menu_list']=$this->Frontend_model->menu_item_details_list(); 
	    $this->load->view('html/menu',$data);
		  $this->load->view('html/footer');  
	   
   }
   public function contact(){
	   
	  $data['contactus']=$this->Frontend_model->contactus_details_list();
		// echo'<pre>';print_r($data);exit;
		 
		 
	      $this->load->view('html/contact-home',$data);
		  $this->load->view('html/footer');   
	   
   }
	
	public  function reservation_post(){
		$post=$this->input->post();
	// echo'<pre>';print_r($post);exit;
		$add=array(
		'name'=>isset($post['name'])?$post['name']:'',
		'email'=>isset($post['email'])?$post['email']:'',
		'phone'=>isset($post['phone'])?$post['phone']:'',
		'people'=>isset($post['people'])?$post['people']:'',
		'date'=>isset($post['date'])?$post['date']:'',
		'time'=>isset($post['time'])?$post['time']:'',
		'created_at'=>date('y-m-d H:i:s'),
		);
		 //echo'<pre>';print_r($add);exit;
		$save=$this->Frontend_model->save_reservation_table($add);
		// echo'<pre>';print_r($save);exit;
		if(count($save)>0){
						$details=$this->Frontend_model->check_contact_details();
						 //echo'<pre>';print_r($add);exit;
						$this->load->library('email');
						$this->email->set_newline("\r\n");
						$this->email->set_mailtype("html");
						$this->email->from($post['email']);
						$this->email->to($details['email']);
						$this->email->subject('Reservation - Request');
						$msg='Name:'.$post['name'].'<br> Email :'.$post['email'].'<br> Phone  number :'.$post['phone'].'<br> Date and Time :'.$post['date'].' '.$post['time'].'<br> peoples :'.$post['people'];
						$this->email->message($msg);
						//echo'<pre>';print_r($msg);exit;
						$this->email->send();
						$this->session->set_flashdata('success',"Your Reservation Request was successfully sent");
							redirect($this->agent->referrer());
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect($this->agent->referrer());
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
				$save=$this->Frontend_model->save_contactus($addcontact);
				if(count($save)>0){
						$details=$this->Frontend_model->check_contact_details();
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
						//echo $msg;exit;
						$this->email->send();
						
						//echo "test";exit;
						
				        $this->session->set_flashdata('success',"Your message was successfully sent ");
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
				
				$check=$this->Frontend_model->check_email_subscribe($post['email']);
				if(count($check)>0){
					   $this->session->set_flashdata('error',"You are already subscribed ");
						redirect($this->agent->referrer());
					
				}else{
					$save=$this->Frontend_model->save_subscribe($addcontact);
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
	



