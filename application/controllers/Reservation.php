<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Reservation extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function add(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
		  $this->load->view('admin/reservation-home');
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
		  if($_FILES['image']['name']!=''){
					$images=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/adminprofilepic/" . $_FILES['image']['name']);

					}else{
					$images='';
					}
	
	     $save_data=array(
	            'image'=>$images,
				'phone'=>isset($post['phone'])?$post['phone']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
	            //echo'<pre>';print_r($save_data);exit;
	            $save=$this->Header_model->save_reservation_details($save_data);	
			//echo'<pre>';print_r($save);exit;    
		      if(count($save)>0){
					$this->session->set_flashdata('success',"reservations details successfully added");	
					redirect('reservation/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('reservation/lists');
					}
	
	               }else{
		           $this->session->set_flashdata('error',"Please login and continue");
		          redirect('');  
	          }
	
  }	

	public function lists(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          $data['reservation_list']=$this->Header_model->get_reservation_list();	
		 //echo'<pre>';print_r($data);exit;  
		  $this->load->view('admin/reservation-list',$data);
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
		  $this->uri->segment(3);
		 $nav_id=base64_decode($this->uri->segment(3));
		
		 $data['edit_reservation']=$this->Header_model->edit_reservation_details($nav_id);
		 //echo'<pre>';print_r($data);exit;  
		  $this->load->view('admin/edit-reservation',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
	public function editpost(){
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();	
	    // echo'<pre>';print_r($post);exit;
	   $user_save=$this->Header_model->saver_user($post['r_h_id']);
					// echo'<pre>';print_r($user_save);exit;
					
					if($_FILES['image']['name']!=''){
					$cat=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/adminprofilepic/" . $_FILES['image']['name']);

					}else{
					$cat=$user_save['image'];
					}
					
					
	             $update_data=array(
				'image'=>$cat,
				'phone'=>isset($post['phone'])?$post['phone']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				 // echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_reservation_details($post['r_h_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','reservation details successfully updated');
							redirect('reservation/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('reservation/lists');
						}

						 }else{
						   $this->session->set_flashdata('error',"Please login and continue");
						  redirect('');  
					  }
	
   }
   
    public function status(){
	 if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');	
	             $r_h_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($r_h_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_reservation_details($r_h_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"reservation details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"reservation details successfully Activate.");
								}
								redirect('reservation/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('reservation/lists');
							}
						}
						else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
	
          }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }


}
   
   public function delete()
{

		if($this->session->userdata('restaurantdetails'))
		{
		$admindetails=$this->session->userdata('restaurantdetails');

			
					$r_h_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_reservation_details($r_h_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"reservation details successfully deleted.");
								
								 redirect('reservation/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('reservation/lists');
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	}
   
 public function brief(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
		  $this->load->view('admin/reservation');
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
	
	public function briefpost(){
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          $post=$this->input->post();	
	   //echo'<pre>';print_r($post);exit;
		  if($_FILES['banner']['name']!=''){
					$images=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$images='';
					}
	
	     $save_data=array(
	            'banner'=>$images,
				'title'=>isset($post['title'])?$post['title']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
	            //echo'<pre>';print_r($save_data);exit;
	            $save=$this->Header_model->save_reservation_brief_details($save_data);	
			//echo'<pre>';print_r($save);exit;    
		      if(count($save)>0){
					$this->session->set_flashdata('success',"reservations brief details successfully added");	
					redirect('reservation/brieflist');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('reservation/brieflist');
					}
	
	               }else{
		           $this->session->set_flashdata('error',"Please login and continue");
		          redirect('');  
	          }
	
  }	
	
	public function brieflist(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
           $data['reservation_brieflist']=$this->Header_model->get_reservation_brief_list();	
		 //echo'<pre>';print_r($data);exit;  
		 
		  $this->load->view('admin/reservation-brieflist',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
	
	 public function editbrief(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
		 $brief_id=base64_decode($this->uri->segment(3));
		
		 $data['edit_reservationbrief']=$this->Header_model->edit_reservationbrief_details($brief_id);
		 //echo'<pre>';print_r($data);exit;  
		  $this->load->view('admin/edit-reservationbrief',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
	
public function briefeditpost(){
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();	
	    //echo'<pre>';print_r($post);exit;
	  $edit_reservationbrief=$this->Header_model->edit_reservationbrief_details($post['r_b_id']);
					// echo'<pre>';print_r($user_save);exit;
					
					if($_FILES['banner']['name']!=''){
					
					$banners=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$banners=$edit_reservationbrief['banner'];
					}
					
					
	             $update_data=array(
				'banner'=>$banners,
				'title'=>isset($post['title'])?$post['title']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				  //echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_reservationbrief_details($post['r_b_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','reservation brief details successfully updated');
							redirect('reservation/brieflist');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('reservation/brieflist');
						}

						 }else{
						   $this->session->set_flashdata('error',"Please login and continue");
						  redirect('');  
					  }
	
   }	
	
	public function statusbrief(){
	 if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');	
	             $r_b_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($r_b_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_reservationbrief_details($r_b_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"reservations brief details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"reservations brief details successfully Activate.");
								}
								redirect('reservation/brieflist');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('reservation/brieflist');
							}
						}
						else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}	
	
	
          }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }


}
	  public function deletebrief()
{

		if($this->session->userdata('restaurantdetails'))
		{
		$admindetails=$this->session->userdata('restaurantdetails');

			
					$r_b_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_reservation_brief_details($r_b_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"reservation brief  details successfully deleted.");
								
								 redirect('reservation/brieflist');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('reservation/brieflist');
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	}
   
	
   
   
	
	
}	
	
?>	
	



