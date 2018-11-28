<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Testimonial extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function add(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
	      $this->load->view('admin/testimonial');
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
		
		$cnt=1;foreach ($_FILES['image']['tmp_name'] as $key => $val ) {
     if($_FILES["image"]["name"][$key]!=''){
      $profilepicrenam2[$cnt] = microtime().basename($_FILES["image"]["name"][$key]);
      $images[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
      move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/adminprofilepic/" . $images[$cnt]);
      $add_data=array(
      'image'=>$images[$cnt],
      'name'=>isset($post['name'][$key])?$post['name'][$key]:'',
	  'designation'=>isset($post['designation'][$key])?$post['designation'][$key]:'',
	  'paragraph'=>isset($post['paragraph'][$key])?$post['paragraph'][$key]:'',
      'org_pic'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
     //echo '<pre>';print_r($add_data);
      $save=$this->Header_model->save_testimonial_details($add_data);	
     }
	 
	 
      // here your insert query
     $cnt++;}	
	 
	 //exit;
		      if(count($save)>0){
					$this->session->set_flashdata('success',"testimonial details successfully added");	
					redirect('testimonial/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('testimonial/add');
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
           $data['testimonial_list']=$this->Header_model->get_testimonial_list();
		 //echo '<pre>';print_r($data);exit;
		 
	      $this->load->view('admin/testimonial-list',$data);
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
		 $testimonial_id=base64_decode($this->uri->segment(3));
		 $data['edit_testimonial']=$this->Header_model->edit_testimonial_details($testimonial_id);
		 //echo'<pre>';print_r($data);exit; 
	      $this->load->view('admin/edit-testimonial',$data);
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
	    //echo'<pre>';print_r($post);exit;
	    $edit_testimonial=$this->Header_model->edit_testimonial_details($post['t_id']);
	    //echo'<pre>';print_r($edit_testimonial);exit;
	     
					if($_FILES['image']['name']!=''){
					
					$banners=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/adminprofilepic/" . $_FILES['image']['name']);

					}else{
					$banners=$edit_testimonial['image'];
					}
					
	             $update_data=array(
	            'image'=>$banners,
				'name'=>isset($post['name'])?$post['name']:'',
				'designation'=>isset($post['designation'])?$post['designation']:'',
				'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_testimonial_details($post['t_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','testimonial details successfully updated');
							redirect('testimonial/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('testimonial/lists');
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
	             $t_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($t_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_testimonial_details($t_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"testimonial details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"testimonial details successfully Activate.");
								}
								redirect('testimonial/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('testimonial/lists');
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

			
					$t_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_testimonial_details($t_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"testimonial details successfully deleted.");
								
								 redirect('testimonial/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('testimonial/lists');
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	} 
   
  
 
   
   
	
	
}	
	
?>	
	



