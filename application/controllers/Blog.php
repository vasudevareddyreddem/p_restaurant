<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Blog extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function add(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
	      $this->load->view('admin/blog');
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
		
		$cnt=1;foreach ($_FILES['pic']['tmp_name'] as $key => $val ) {
     if($_FILES["pic"]["name"][$key]!=''){
      $profilepicrenam2[$cnt] = microtime().basename($_FILES["pic"]["name"][$key]);
      $images[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
      move_uploaded_file($_FILES['pic']['tmp_name'][$key], "assets/adminprofilepic/" . $images[$cnt]);
      $add_data=array(
      'pic'=>$images[$cnt],
      'date'=>isset($post['date'][$key])?$post['date'][$key]:'',
	  'procedure'=>isset($post['procedure'][$key])?$post['procedure'][$key]:'',
      'org_pic'=>isset($_FILES['pic']['name'][$key])?$_FILES['pic']['name'][$key]:'',
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
     //echo '<pre>';print_r($add_data);
      $save=$this->Header_model->save_blog_details($add_data);	
     }
	 
	 
      // here your insert query
     $cnt++;}	
	 
	 //exit;
		      if(count($save)>0){
					$this->session->set_flashdata('success',"blog details successfully added");	
					redirect('blog/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('blog/add');
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
          $data['blog_list']=$this->Header_model->get_blog_list();
		 // echo '<pre>';print_r($data);exit;
	      $this->load->view('admin/blog-list',$data);
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
		 $blog_id=base64_decode($this->uri->segment(3));
		 $data['edit_blog']=$this->Header_model->edit_blog_details($blog_id);
		 //echo'<pre>';print_r($data);exit; 
	      $this->load->view('admin/edit-blog',$data);
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
	    $edit_blog=$this->Header_model->edit_blog_details($post['b_id']);
	    //echo'<pre>';print_r($edit_blog);exit;
	     
					if($_FILES['pic']['name']!=''){
					
					$banners=$_FILES['pic']['name'];
					move_uploaded_file($_FILES['pic']['tmp_name'], "assets/adminprofilepic/" . $_FILES['pic']['name']);

					}else{
					$banners=$edit_blog['pic'];
					}
					
	             $update_data=array(
	            'pic'=>$banners,
				'date'=>isset($post['date'])?$post['date']:'',
				'procedure'=>isset($post['procedure'])?$post['procedure']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_blog_details($post['b_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','blog details successfully updated');
							redirect('blog/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('blog/lists');
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
	             $b_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($b_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_blog_details($b_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"blog details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"blog details successfully Activate.");
								}
								redirect('blog/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('blog/lists');
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

			
					$b_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_blog_details($b_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"blog details successfully deleted.");
								
								 redirect('blog/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('blog/lists');
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	} 
   
   
   
   
   
   
   
   
   
   
   
   
	
	
}	
	
?>	
	



