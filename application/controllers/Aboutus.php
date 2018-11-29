<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Aboutus extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function add(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
	      $this->load->view('admin/aboutus');
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
				'title'=>isset($post['title'])?$post['title']:'',
				'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
	            //echo'<pre>';print_r($save_data);exit;
	            $save=$this->Header_model->save_aboutus_details($save_data);	
			//echo'<pre>';print_r($save);exit;    
		      if(count($save)>0){
					$this->session->set_flashdata('success',"aboutus details successfully added");	
					redirect('aboutus/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('aboutus/lists');
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
          $data['aboutus_list']=$this->Header_model->get_aboutus_list();	
		// echo'<pre>';print_r($data);exit;
	      $this->load->view('admin/aboutus-list',$data);
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
		 $aboutus=base64_decode($this->uri->segment(3));
		
		 $data['edit_aboutus']=$this->Header_model->edit_aboutus_details($aboutus);
		 //echo'<pre>';print_r($data);exit; 
		 
	      $this->load->view('admin/edit-about',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}	
	public function editpost()
	{
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();	
		 $edit_aboutus=$this->Header_model->edit_aboutus_details($post['a_id']);

	   //echo'<pre>';print_r($edit_aboutus);exit;
	
	     if($_FILES['image']['name']!=''){
					if($edit_aboutus['image']!=''){
						unlink('assets/adminprofilepic/'.$edit_aboutus['image']);
					}
					$images=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/adminprofilepic/" . $_FILES['image']['name']);

					}else{
					$images=$edit_aboutus['image'];
					}
	
	
	     $update_data=array(
	            'image'=>$images,
				'title'=>isset($post['title'])?$post['title']:'',
				'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
	            //echo'<pre>';print_r($save_data);exit;
	            $update=$this->Header_model->update_aboutus_details($post['a_id'],$update_data);	
			//echo'<pre>';print_r($update);exit;    
		      if(count($update)>0){
					$this->session->set_flashdata('success',"aboutus details successfully updated");	
					redirect('aboutus/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('aboutus/lists');
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
	             $a_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($a_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_aboutus_details($a_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"aboutus details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"aboutus details successfully Activate.");
								}
								redirect('aboutus/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('aboutus/lists');
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

			
					$a_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_aboutus_details($a_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"aboutus details successfully deleted.");
								
								 redirect('aboutus/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('aboutus/lists');
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
          
		 
	      $this->load->view('admin/aboutus-brief');
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
		
	 
	 //exit;
	
	
        
	 $save_data=array(
	 'banner'=>$images,
	  'title'=>isset($post['title'])?$post['title']:'',
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
	 //echo '<pre>';print_r($save_data);exit;
    $save=$this->Header_model->save_aboutus_brief_details($save_data);
		 
		 
	 $aa=array_unique($post['paragraph']);
	 
	  //echo '<pre>';print_r($aa);exit;
		      if(count($save)>0){
				 if(isset($aa) && count($aa)>0){ 
				 foreach($aa as $list){ 
					  $add_data=array(
					  'emp_id'=>isset($save)?$save:'',
					  'paragraph'=>$list,
					  'status'=>1,
					  'created_at'=>date('Y-m-d H:i:s'),
					  'updated_at'=>date('Y-m-d H:i:s'),
				      'created_by'=>$admindetails['u_id'],
					  );
					   //echo '<pre>';print_r($add_data);exit;
					  $this->Header_model->save_aboutus_brief_paragrap_details($add_data);	

					  // here your insert query
				       }
				 }
					$this->session->set_flashdata('success',"aboutus brief details successfully added");	
					redirect('aboutus/brieflists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('aboutus/brief');
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
					$images=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$images='';
					}
		
	 $cnt=1;foreach ($post['paragraph'] as  $val ) {
	  $add_data=array(
	  'emp_id'=>isset($admindetails['u_id'])?$admindetails['u_id']:'',
	  'paragraph'=>$val,
	  );
	   //echo '<pre>';print_r($add_data);
      $save=$this->Header_model->save_aboutus_brief_paragrap_details($add_data);	

	 
	 
      // here your insert query
     $cnt++;}
	 //exit;
	
	$str_Names=implode(",", $post['paragraph']);
        
	 $save_data=array(
	 'banner'=>$images,
	  'title'=>isset($post['title'])?$post['title']:'',
	  'paragraph'=>$str_Names,
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
	 //echo '<pre>';print_r($save_data);exit;
    $save=$this->Header_model->save_aboutus_brief_details($save_data);
		 
		 
	 
	  //echo '<pre>';print_r($save);exit;
		      if(count($save)>0){
					$this->session->set_flashdata('success',"aboutus brief details successfully added");	
					redirect('aboutus/brieflists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('aboutus/brief');
					}
	
	               }else{
		           $this->session->set_flashdata('error',"Please login and continue");
		          redirect('');  
	          }
	
  }		
	
public function brieflists(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
         $data['aboutus_brief_list']=$this->Header_model->get_aboutus_brief_list();	
		 //echo '<pre>';print_r($data);exit;
	      $this->load->view('admin/aboutusbrief-list',$data);
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
		 $aboutus=base64_decode($this->uri->segment(3));
		
		 $data['edit_aboutus_brief']=$this->Header_model->edit_aboutus_brief_details($aboutus);
		 //echo'<pre>';print_r($data);exit; 
		 
		 if(isset($edit_aboutus_brief) && count($edit_aboutus_brief)>0){
						foreach($edit_aboutus_brief as $list){
							$about=$list;
						}
					}else{
						$about='';
					}
		 
		 $data['edit_aboutus_brief']=$about;
		 
	      $this->load->view('admin/edit-aboutusbrief',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}	
  
 public function editbriefpost(){
	{
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();
		  //echo'<pre>';print_r($post);exit;
		 $edit_aboutus_brief=$this->Header_model->edit_aboutus_brief_details($post['a_b_id']);

	   //echo'<pre>';print_r($edit_aboutus_brief);exit;
	
	     if($_FILES['banner']['name']!=''){
					if($edit_aboutus_brief['banner']!=''){
						unlink('assets/adminprofilepic/'.$edit_aboutus_brief['banner']);
					}
					$images=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/adminprofilepic/" . $_FILES['banner']['name']);

					}else{
					$images=$edit_aboutus_brief['banner'];
					}
	
	
	     $update_data=array(
	            'banner'=>$images,
				'title'=>isset($post['title'])?$post['title']:'',
				'paragraph'=>isset($post['paragraph'])?$post['paragraph']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
	            //echo'<pre>';print_r($update_data);exit;
	            $update=$this->Header_model->update_aboutus_brief_details($post['a_b_id'],$update_data);	
			//echo'<pre>';print_r($update);exit;    
		      if(count($update)>0){
					$this->session->set_flashdata('success',"aboutus brief details successfully updated");	
					redirect('aboutus/brieflists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('aboutus/brieflists');
					}
	
	               }else{
		           $this->session->set_flashdata('error',"Please login and continue");
		          redirect('');  
	          }
	
  }	
 	
	
}	
	
public function briefstatus(){
	 if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');	
	             $a_b_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($a_b_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_aboutus_brief_details($a_b_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"aboutus brief details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"aboutus brief details successfully Activate.");
								}
								redirect('aboutus/brieflists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('aboutus/brieflists');
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

			
					$a_b_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_aboutus_brief_details($a_b_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"aboutus brief details successfully deleted.");
								
								 redirect('aboutus/brieflists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('aboutus/brieflists');
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
	



