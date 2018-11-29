<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Topheader extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function add(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
	      $this->load->view('admin/topheader');
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
	   // echo'<pre>';print_r($post);exit;
	
	     $save_data=array(
	            'address'=>isset($post['address'])?$post['address']:'',
				'phone_number'=>isset($post['phone_number'])?$post['phone_number']:'',
				'facebook_link'=>isset($post['facebook_link'])?$post['facebook_link']:'',
				'twitter_link'=>isset($post['twitter_link'])?$post['twitter_link']:'',
				'google_link'=>isset($post['google_link'])?$post['google_link']:'',
				'pinterest_link'=>isset($post['pinterest_link'])?$post['pinterest_link']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				 if($this->input->post()){
					
					$daily=$this->Header_model->get_top_details();
					if($daily==0){
					$save=$this->Header_model->save_topheader_details($save_data);	
						
					}else{
				 $save_data=array(
	            'address'=>isset($post['address'])?$post['address']:'',
				'phone_number'=>isset($post['phone_number'])?$post['phone_number']:'',
				'facebook_link'=>isset($post['facebook_link'])?$post['facebook_link']:'',
				'twitter_link'=>isset($post['twitter_link'])?$post['twitter_link']:'',
				'google_link'=>isset($post['google_link'])?$post['google_link']:'',
				'pinterest_link'=>isset($post['pinterest_link'])?$post['pinterest_link']:'',
				'status'=>0,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				 $save=$this->Header_model->save_topheader_details($save_data);	
					}
				}else{
				 $save=$this->Header_model->save_topheader_details($save_data);	
					}
				
	            //echo'<pre>';print_r($save_data);exit;
	            $save=$this->Header_model->save_topheader_details($save_data);	
			//echo'<pre>';print_r($save);exit;    
		      if(count($save)>0){
					$this->session->set_flashdata('success',"Top Header details successfully added");	
					redirect('topheader/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('topheader/lists');
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
          $data['topheader_list']=$this->Header_model->get_topheader_list();	
		 //echo'<pre>';print_r($data);exit;   
	      $this->load->view('admin/topheader-list',$data);
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
		 $topheader_id=base64_decode($this->uri->segment(3));
		
		 $data['edit_topheader']=$this->Header_model->edit_topheader_details($topheader_id);
		 //echo'<pre>';print_r($data);exit; 
	      $this->load->view('admin/edit-topheader',$data);
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
	
	     $update_data=array(
	            'address'=>isset($post['address'])?$post['address']:'',
				'phone_number'=>isset($post['phone_number'])?$post['phone_number']:'',
				'facebook_link'=>isset($post['facebook_link'])?$post['facebook_link']:'',
				'twitter_link'=>isset($post['twitter_link'])?$post['twitter_link']:'',
				'google_link'=>isset($post['google_link'])?$post['google_link']:'',
				'pinterest_link'=>isset($post['pinterest_link'])?$post['pinterest_link']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
	            //echo'<pre>';print_r($update_data);exit;
	            $upadate=$this->Header_model->update_topheader_details($post['t_h_id'],$update_data);	
		       //echo'<pre>';print_r($upadate);exit;    
		      if(count($upadate)>0){
					$this->session->set_flashdata('success',"Top Header details successfully updated");	
					redirect('topheader/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('topheader/lists');
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
	             $t_h_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($t_h_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_topheader_details($t_h_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Top Header details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Top Header details successfully Activate.");
								}
								redirect('topheader/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('topheader/lists');
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

			
					$t_h_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_topheader_details($t_h_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"Top Header details successfully deleted.");
								
								 redirect('topheader/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('topheader/lists');
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	} 
	
	
	
	
   
 
   
   
	
	
}	
	
?>	
	



