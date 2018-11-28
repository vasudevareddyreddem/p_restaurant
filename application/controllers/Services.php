<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Services extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function home(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
	      $this->load->view('admin/services-home');
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
	  'paragraph'=>isset($post['paragraph'][$key])?$post['paragraph'][$key]:'',
      'org_pic'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
     //echo '<pre>';print_r($add_data);
      $save=$this->Header_model->save_services_details($add_data);	
     }
	 
	 
      // here your insert query
     $cnt++;}	
	 
	// exit;
		      if(count($save)>0){
					$this->session->set_flashdata('success',"services details successfully added");	
					redirect('services/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('services/home');
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
           $data['services_list']=$this->Header_model->get_services_list();
		 //echo '<pre>';print_r($data);exit;
		 
		 
	      $this->load->view('admin/services-homelist',$data);
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
		 $services_id=base64_decode($this->uri->segment(3));
		 $data['edit_services']=$this->Header_model->edit_services_details($services_id);
		 //echo'<pre>';print_r($data);exit; 
	      $this->load->view('admin/edit-serviceshome',$data);
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
	    $edit_services=$this->Header_model->edit_services_details($post['s_id']);
	    //echo'<pre>';print_r($edit_services);exit;
	     
					if($_FILES['image']['name']!=''){
					
					$banners=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/adminprofilepic/" . $_FILES['image']['name']);

					}else{
					$banners=$edit_services['image'];
					}
					
	             $update_data=array(
	            'image'=>$banners,
				'name'=>isset($post['name'])?$post['name']:'',
				'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_services_details($post['s_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','services details successfully updated');
							redirect('services/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('services/lists');
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
	             $s_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($s_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_services_details($s_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"services details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"services details successfully Activate.");
								}
								redirect('services/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('services/lists');
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

			
					$s_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_services_details($s_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"services details successfully deleted.");
								
								 redirect('services/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('services/lists');
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
          
		 
	      $this->load->view('admin/services');
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
					$banners=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$banners='';
					}
          
		  $cnt=1;foreach ($_FILES['image']['tmp_name'] as $key => $val ) {
     if($_FILES["image"]["name"][$key]!=''){
      $profilepicrenam2[$cnt] = microtime().basename($_FILES["image"]["name"][$key]);
      $images[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
      move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/adminprofilepic/" . $images[$cnt]);
      $add_data=array(
	  'banner'=>$banners,
      'image'=>$images[$cnt],
	  'emp_id'=>isset($admindetails['u_id'])?$admindetails['u_id']:'',
      'title'=>isset($post['title'][$key])?$post['title'][$key]:'',
	  'paragraph'=>isset($post['paragraph'][$key])?$post['paragraph'][$key]:'',
      'org_pic'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
	  'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
     //echo '<pre>';print_r($add_data);
      $save=$this->Header_model->save_services_brief_details($add_data);
     }
	 
	 
      // here your insert query
     $cnt++;}	
	 
	// exit;
		  
		  
	 	
		      if(count($save)>0){
					$this->session->set_flashdata('success',"services brief  details successfully added");	
					redirect('services/brieflist');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('services/brief');
					}
	
	               }else{
		           $this->session->set_flashdata('error',"Please login and continue");
		          redirect('');  
	          }
	
  }		
	
	public function backup_briefpost(){
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();	
		//echo'<pre>';print_r($post);exit;
         if($_FILES['banner']['name']!=''){
					$banners=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$banners='';
					}
          
		  $cnt=1;foreach ($_FILES['image']['tmp_name'] as $key => $val ) {
     if($_FILES["image"]["name"][$key]!=''){
      $profilepicrenam2[$cnt] = microtime().basename($_FILES["image"]["name"][$key]);
      $images[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
      move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/adminprofilepic/" . $images[$cnt]);
      $add_data=array(
      'image'=>$images[$cnt],
	  'emp_id'=>isset($admindetails['u_id'])?$admindetails['u_id']:'',
      'title'=>isset($post['title'][$key])?$post['title'][$key]:'',
	  'paragraph'=>isset($post['paragraph'][$key])?$post['paragraph'][$key]:'',
      'org_pic'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
      );
     //echo '<pre>';print_r($add_data);
      $save=$this->Header_model->save_services_brief_list_details($add_data);	
     }
	 
	 
      // here your insert query
     $cnt++;}	
	 
	 //exit;
		  
		  
	 	$str_Names=implode(",", $_FILES["image"]["name"]);
	 $str=implode(",", $post['title']);
	 
	 $star=implode(",", $post['paragraph']);
	 
	 $save_data=array(
	 'banner'=>$banners,
	 'image'=>$str_Names,
     'title'=>$str,
	 'paragraph'=>$star,
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
// echo '<pre>';print_r($save_data);exit;
    $save=$this->Header_model->save_services_brief_details($save_data);
		 
		      if(count($save)>0){
					$this->session->set_flashdata('success',"services brief  details successfully added");	
					redirect('services/brieflist');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('services/brief');
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
          $data['servies_brief_list']=$this->Header_model->get_services_brief_list();
		 //echo '<pre>';print_r($data);exit;
	      $this->load->view('admin/services-list',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
	
public function briefedit(){
 if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
		 $servies=base64_decode($this->uri->segment(3));
		
		 $data['edit_servies_brief']=$this->Header_model->edit_servies_brief_details($servies);
		// echo'<pre>';print_r($data);exit; 
		 
	      $this->load->view('admin/edit-servicesbrief',$data);
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
	    $edit_servies_brief=$this->Header_model->edit_servies_brief_details($post['s_r_id']);
	    //echo'<pre>';print_r($edit_servies_brief);exit;
	     
					if($_FILES['image']['name']!=''){
					
					$banners=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/adminprofilepic/" . $_FILES['image']['name']);

					}else{
					$banners=$edit_servies_brief['image'];
					}
					
					
					if($_FILES['banner']['name']!=''){
					
					$images=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$images=$edit_servies_brief['banner'];
					}
					
					
	             $update_data=array(
	            'banner'=>$images,
				'image'=>$banners,
				'title'=>isset($post['title'])?$post['title']:'',
				'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_services_brief_details($post['s_r_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','services brief details successfully updated');
							redirect('services/brieflist');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('services/brieflist');
						}

						 }else{
						   $this->session->set_flashdata('error',"Please login and continue");
						  redirect('');  
					  }
	
   }	
   		
	public function briefstatus(){
	 if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');	
	             $s_r_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($s_r_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_services_brief_details($s_r_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"services brief details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"services  brief details successfully Activate.");
								}
								redirect('services/brieflist');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('services/brieflist');
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
	
 public function briefdelete()
{

		if($this->session->userdata('restaurantdetails'))
		{
		$admindetails=$this->session->userdata('restaurantdetails');

			
					$s_r_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_services_brief_details($s_r_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"services brief  details successfully deleted.");
								
								 redirect('services/brieflist');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('services/brieflist');
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	} 
		
	
	
 
   
	
	
}	
	
?>	
	



