<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Header extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function add(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
	      $this->load->view('admin/nav');
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
		
		 if($_FILES['favicon']['name']!=''){
					$favicons=$_FILES['favicon']['name'];
					move_uploaded_file($_FILES['favicon']['tmp_name'], "assets/adminprofilepic/" . $_FILES['favicon']['name']);

					}else{
					$favicons='';
					}
		
		 if($_FILES['logo']['name']!=''){
					$logos=$_FILES['logo']['name'];
					move_uploaded_file($_FILES['logo']['tmp_name'], "assets/adminprofilepic/" . $_FILES['logo']['name']);

					}else{
					$logos='';
					}
		 if($_FILES['banner']['name']!=''){
					$banners=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$banners='';
					}
	     $save_data=array(
	            'favicon'=>$favicons,
				'logo'=>$logos,
				'banner'=>$banners,
				'title'=>isset($post['title'])?$post['title']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
	           // echo'<pre>';print_r($save_data);exit;
	            $save=$this->Header_model->save_header_details($save_data);	
			//echo'<pre>';print_r($save);exit;    
		      if(count($save)>0){
					$this->session->set_flashdata('success',"Header details successfully added");	
					redirect('header/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('header/lists');
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
          $data['header_list']=$this->Header_model->get_header_list();	
		 //echo'<pre>';print_r($data);exit;   
	      $this->load->view('admin/nav-list',$data);
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
		
		 $data['edit_header']=$this->Header_model->edit_header_details($nav_id);
		 //echo'<pre>';print_r($data);exit; 
	      $this->load->view('admin/edit-nav',$data);
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
	    $edit_header=$this->Header_model->edit_header_details($post['h_id']);
	    //echo'<pre>';print_r($edit_header);exit;
	      if($_FILES['favicon']['name']!=''){
					if($edit_header['favicon']!=''){
						unlink('assets/adminprofilepic/'.$edit_header['favicon']);
					}
					$favicons=$_FILES['favicon']['name'];
					move_uploaded_file($_FILES['favicon']['tmp_name'], "assets/adminprofilepic/" . $_FILES['favicon']['name']);

					}else{
					$favicons=$edit_header['favicon'];
					}
					
					if($_FILES['logo']['name']!=''){
					if($edit_header['logo']!=''){
						unlink('assets/adminprofilepic/'.$edit_header['logo']);
					}
					$logos=$_FILES['logo']['name'];
					move_uploaded_file($_FILES['logo']['tmp_name'], "assets/adminprofilepic/" . $_FILES['logo']['name']);

					}else{
					$logos=$edit_header['logo'];
					}
					
					if($_FILES['banner']['name']!=''){
					if($edit_header['banner']!=''){
						unlink('assets/adminprofilepic/'.$edit_header['banner']);
					}
					$banners=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$banners=$edit_header['banner'];
					}
					
	             $update_data=array(
	            'favicon'=>$favicons,
				'logo'=>$logos,
				'banner'=>$banners,
				'title'=>isset($post['title'])?$post['title']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_header_details($post['h_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','Header details successfully updated');
							redirect('header/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('header/lists');
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
	             $h_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($h_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_header_details($h_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Header details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"Header details successfully Activate.");
								}
								redirect('header/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('header/lists');
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

			
					$h_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_header_details($h_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"Header details successfully deleted.");
								
								 redirect('header/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('header/lists');
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	}
   
   
   
   
   
   
   
	
	
}	
	
?>	
	



