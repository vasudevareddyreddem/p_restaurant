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
		 		  //echo'<pre>';print_r($data['header_imgs']);exit;
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
			//echo '<pre>';print_r($data);exit; 
		 $this->load->view('html/about',$data);
		 $this->load->view('html/footer');   
	
  }
  public function reservation(){
		  $data['servies_brief']=$this->Frontend_model->servies_brief_list();
		 //echo'<pre>';print_r($data);exit;
	      $this->load->view('html/reservation',$data);
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
		 
		 
	      $this->load->view('html/contact',$data);
		  $this->load->view('html/footer');   
	   
   }
	
	
}	
	
?>	
	



