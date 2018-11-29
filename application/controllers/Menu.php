<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Menu extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
		}
		
	
	public function homepage(){
    if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
          
		 
	      $this->load->view('admin/menu-home');
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
		//echo'<pre>';print_r($post);
		//echo'<pre>';print_r($_FILES);
        
          
		  $cnt=1;foreach ($_FILES['image']['tmp_name'] as $key => $val ) {
     if($_FILES["image"]["name"][$key]!=''){
      $profilepicrenam2[$cnt] = microtime().basename($_FILES["image"]["name"][$key]);
      $images[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
      move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/adminprofilepic/" . $images[$cnt]);
      $add_data=array(
      'title'=>isset($post['title'])?$post['title']:'',
      'image'=>$images[$cnt],
	  'emp_id'=>isset($admindetails['u_id'])?$admindetails['u_id']:'',
      'food_type'=>isset($post['food_type'][$key])?$post['food_type'][$key]:'',
	  'name'=>isset($post['name'][$key])?$post['name'][$key]:'',
	  'description'=>isset($post['description'][$key])?$post['description'][$key]:'',
	  'price'=>isset($post['price'][$key])?$post['price'][$key]:'',
      'org_pic'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
	   'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
	  
      );
    // echo '<pre>';print_r($add_data);
      $save=$this->Header_model->save_menu_list_details($add_data);	
     }
	 
	
	 
	 
      // here your insert query
     $cnt++;}
	 
		      if(count($save)>0){
					$this->session->set_flashdata('success',"menu  details successfully added");	
					redirect('menu/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('menu/homepage');
					}
	
	               }else{
		           $this->session->set_flashdata('error',"Please login and continue");
		          redirect('');  
	          }
	
  }	
  public function addpost_backup(){
	if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();	
		//echo'<pre>';print_r($_FILES);exit;
        
          $cnt=1;foreach ($_FILES['image']['tmp_name'] as $key => $val ) {
     if($_FILES["image"]["name"][$key]!=''){
      $profilepicrenam2[$cnt] = microtime().basename($_FILES["image"]["name"][$key]);
      $images[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
      move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/adminprofilepic/" . $images[$cnt]);
      $add_data=array(
      'image'=>$images[$cnt],
	  'emp_id'=>isset($admindetails['u_id'])?$admindetails['u_id']:'',
      'food_type'=>isset($post['food_type'][$key])?$post['food_type'][$key]:'',
	  'name'=>isset($post['name'][$key])?$post['name'][$key]:'',
	  'description'=>isset($post['description'][$key])?$post['description'][$key]:'',
	  'price'=>isset($post['price'][$key])?$post['price'][$key]:'',
      'org_pic'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
      );
     //echo '<pre>';print_r($add_data);
      $save=$this->Header_model->save_menu_list_details($add_data);	
     }
	 
	 
      // here your insert query
     $cnt++;}	
	 
	 //exit;
		  
		  
	 	$str_Names=implode(",", $_FILES["image"]["name"]);
	 $str=implode(",", $post['name']);
	 
	 $star=implode(",", $post['food_type']);
	  $sta=implode(",", $post['description']);
	   $st=implode(",", $post['price']);
	 
	 $save_data=array(
	 'title'=>isset($post['title'])?$post['title']:'',
	 'image'=>'',
     'name'=>$str,
	 'food_type'=>$star,
	 'description'=>$sta,
	 'price'=>$st,
      'status'=>1,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
      'created_by'=>$admindetails['u_id'],
      );
	//echo '<pre>';print_r($save_data);exit;
    $save=$this->Header_model->save_menu_details($save_data);
		 //echo '<pre>';print_r($save);exit;
		      if(count($save)>0){
					$this->session->set_flashdata('success',"menu  details successfully added");	
					redirect('menu/lists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('menu/homepage');
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
          $data['menu_list']=$this->Header_model->get_menu_list();
			//echo '<pre>';print_r($data);exit;
	      $this->load->view('admin/menu-list',$data);
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
		 $menu_id=base64_decode($this->uri->segment(3));
		 $data['edit_menu']=$this->Header_model->edit_menu_details($menu_id);
		 //echo'<pre>';print_r($data);exit; 
	      $this->load->view('admin/edit-menu',$data);
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
	    $edit_menu=$this->Header_model->edit_menu_details($post['m_d_id']);
	    //echo'<pre>';print_r($edit_menu);exit;
	     
					if($_FILES['image']['name']!=''){
					
					$banners=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/adminprofilepic/" . $_FILES['image']['name']);

					}else{
					$banners=$edit_menu['image'];
					}
					
	             $update_data=array(
	            'image'=>$banners,
				'title'=>isset($post['title'])?$post['title']:'',
				'food_type'=>isset($post['food_type'])?$post['food_type']:'',
				'name'=>isset($post['name'])?$post['name']:'',
				'description'=>isset($post['description'])?$post['description']:'',
				'price'=>isset($post['price'])?$post['price']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_menu_details($post['m_d_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','menu details successfully updated');
							redirect('menu/lists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('menu/lists');
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
	             $m_d_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($m_d_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_menu_details($m_d_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"menu details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"menu details successfully Activate.");
								}
								redirect('menu/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('menu/lists');
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

			
					$m_d_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_menu_details($m_d_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"menu details successfully deleted.");
								
								 redirect('menu/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('menu/lists');
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
          
		 
	      $this->load->view('admin/menu');
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
   
 public function addbriefpost(){
if($this->session->userdata('restaurantdetails'))
		{	
					 $admindetails=$this->session->userdata('restaurantdetails');
					 $post=$this->input->post();	
					//echo'<pre>';print_r($post);
					//echo'<pre>';print_r($_FILES);exit;
					if($_FILES['banner']['name']!=''){
					
					$banners = microtime().basename($_FILES["banner"]["name"]);
					$images= str_replace(" ", "", $banners);
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/menu_bar_brief/" . $images);

					}else{
					$images='';
					}
					
					
					
					$add=array(
					'banner'=>isset($images)?$images:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'menu_type'=>isset($post['menu_type'])?$post['menu_type']:'',
					'status'=>1,
					'created_at'=>date('Y-m-d H:i:s'),
					'updated_at'=>date('Y-m-d H:i:s'),
					'created_by'=>$admindetails['u_id'],
					);
					if($this->input->post('menu_type')=='Daily special'){
					
					$daily=$this->Header_model->get_daily_details();
					if($daily==0){
					$save=$this->Header_model->save_menu_brief_details($add);	
						
					}else{
					$add=array(
					'banner'=>isset($images)?$images:'',
					'title'=>isset($post['title'])?$post['title']:'',
					'menu_type'=>isset($post['menu_type'])?$post['menu_type']:'',
					'status'=>0,
					'created_at'=>date('Y-m-d H:i:s'),
					'updated_at'=>date('Y-m-d H:i:s'),
					'created_by'=>$admindetails['u_id'],
					);	
					$save=$this->Header_model->save_menu_brief_details($add);	
					}
					}else{
						$save=$this->Header_model->save_menu_brief_details($add);
					}
						
				
					if(count($save)>0){
						if($this->input->post('menu_type')=='Daily special'){
						if($daily==0){
							$status=1;
						}else{
							$status=0;
						}
						}else{
							$status=1;
							
						}
							$cnt=1;foreach ($_FILES['image']['tmp_name'] as $key => $val ) {
								   if($_FILES["image"]["name"][$key]!=''){
									   
										$profilepicrenam2[$cnt] = microtime().basename($_FILES["image"]["name"][$key]);
										  $subimages[$cnt]= str_replace(" ", "", $profilepicrenam2[$cnt]);
										  move_uploaded_file($_FILES['image']['tmp_name'][$key], "assets/menu_bar_brief/" . $subimages[$cnt]);
										  $add_data=array(
										  'menu_brief_id'=>isset($save)?$save:'',
										  'image'=>$subimages[$cnt],
										  'org_pic'=>isset($_FILES['image']['name'][$key])?$_FILES['image']['name'][$key]:'',
										  'food_type'=>isset($post['food_type'][$key])?$post['food_type'][$key]:'',
										  'name'=>isset($post['name'][$key])?$post['name'][$key]:'',
										  'description'=>isset($post['description'][$key])?$post['description'][$key]:'',
										  'price'=>isset($post['price'][$key])?$post['price'][$key]:'',
										  'status'=>$status,
										  'created_at'=>date('Y-m-d H:i:s'),
										  'updated_at'=>date('Y-m-d H:i:s'),
										  'created_by'=>$admindetails['u_id'],
										  );
										  $this->Header_model->save_menu_brief_all_details($add_data);	
									   
									   
								   }
							}
						
						
						
						   $this->session->set_flashdata('success',"menu brief  details successfully added");	
						   redirect('menu/brieflists');	
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('menu/brief');
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
          $data['menu_brief_list']=$this->Header_model->get_menu_brief_list();
		  //echo '<pre>';print_r($data);exit;
	      $this->load->view('admin/menu-brief-list',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}
 public function brieflistsview(){
if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
		 $menu_brief_id=base64_decode($this->uri->segment(3));
		 $data['brief_menu_id']=$this->uri->segment(3);
          $data['menu_all_brief_list']=$this->Header_model->get_menu_brief_all_details($menu_brief_id);
		  //echo '<pre>';print_r($data);exit;
	      $this->load->view('admin/menu_all_brief_list',$data);
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
		 $menu=base64_decode($this->uri->segment(3));
		
		 $data['edit_menu_brief']=$this->Header_model->edit_menu_brief_details($menu);
		//echo'<pre>';print_r($data);exit; 
		 
	      $this->load->view('admin/edit-menusbrief',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}	
 
 public function editbriefpost(){
if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();	
	    //echo'<pre>';print_r($post);exit;
	    $edit_menu_brief=$this->Header_model->edit_menu_brief_details($post['m_b_id']);
	    //echo'<pre>';print_r($edit_menu_brief);exit;
	     
					if($_FILES['banner']['name']!=''){
					
					$images=$_FILES['banner']['name'];
					move_uploaded_file($_FILES['banner']['tmp_name'], "assets/menu_bar_brief/" . $_FILES['banner']['name']);

					}else{
					$images=$edit_menu_brief['banner'];
					}
					
					
	             $update_data=array(
				'banner'=>$images,
				'title'=>isset($post['title'])?$post['title']:'',
				'menu_type'=>isset($post['menu_type'])?$post['menu_type']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_menu_brief_details($post['m_b_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','menu brief details successfully updated');
							redirect('menu/brieflists');
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('menu/brieflists');
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
	             $m_b_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($m_b_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_menu_brief_details($m_b_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"menu brief details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"menu  brief details successfully Activate.");
								}
								redirect('menu/brieflists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('menu/brieflists');
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

			
					$m_b_id=base64_decode($this->uri->segment(3));
					
					
							$delete_data=$this->Header_model->delete_menu_brief_details($m_b_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"menu brief  details successfully deleted.");
								
								 redirect('menu/brieflists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('menu/brieflists');
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	} 
	
public function allbriefedit(){
if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
		 $menu=base64_decode($this->uri->segment(3));
		 $data['brief_menu_id']=$this->uri->segment(4);
		 $data['edit_menu_all_brief']=$this->Header_model->edit_menu_all_brief_details($menu);
		//echo'<pre>';print_r($data);exit; 
		 
	      $this->load->view('admin/edit-menu-all-brief',$data);
	      $this->load->view('admin/footer');
	    
         }else{
		 $this->session->set_flashdata('error',"Please login and continue");
		 redirect('');  
	   }
}	

public function alleditbriefpost(){
if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');
	     $post=$this->input->post();	
	    //echo'<pre>';print_r($post);exit;
	    $edit_menu_all_brief=$this->Header_model->edit_menu_all_brief_details($post['m_b_a_d_id']);
	    //echo'<pre>';print_r($edit_menu_all_brief);exit;
	     
					if($_FILES['image']['name']!=''){
					
					$images=$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], "assets/menu_bar_brief/" . $_FILES['image']['name']);

					}else{
					$images=$edit_menu_all_brief['image'];
					}
					
					
	             $update_data=array(
				'image'=>$images,
				'food_type'=>isset($post['food_type'])?$post['food_type']:'',
				'name'=>isset($post['name'])?$post['name']:'',
				'description'=>isset($post['description'])?$post['description']:'',
				'price'=>isset($post['price'])?$post['price']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
				//echo'<pre>';print_r($update_data);exit;
				$update=$this->Header_model->update_menu_all_brief_details($post['m_b_a_d_id'],$update_data);
				//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
							$this->session->set_flashdata('success','menu  brief details successfully updated');
							redirect('menu/brieflistsview/'.$post['brief_menu_id']);
							
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('menu/brieflistsview/'.$post['brief_menu_id']);
						}

						 }else{
						   $this->session->set_flashdata('error',"Please login and continue");
						  redirect('');  
					  }
	
   }	
 
public function allbriefstatus(){
	 if($this->session->userdata('restaurantdetails'))
		{	
         $admindetails=$this->session->userdata('restaurantdetails');	
	             $m_b_a_d_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					$brief_menu_id=($this->uri->segment(5));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($m_b_a_d_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							//echo'<pre>';print_r($stusdetails);exit;
							$statusdata=$this->Header_model->update_menu_all_brief_details($m_b_a_d_id,$stusdetails);
							//echo'<pre>';print_r($statusdata);exit;
							//echo $this->db->last_query();exit;	
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"menu  brief details successfully Deactivate.");
								}else{
									$this->session->set_flashdata('success',"menu   brief details successfully Activate.");
								}
								redirect('menu/brieflistsview/'.$brief_menu_id);
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('menu/brieflistsview/'.$brief_menu_id);
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
 public function allbriefdelete()
{

		if($this->session->userdata('restaurantdetails'))
		{
		$admindetails=$this->session->userdata('restaurantdetails');

			
					$m_b_a_d_id=base64_decode($this->uri->segment(3));
					$brief_menu_id=($this->uri->segment(4));
					
					
							$delete_data=$this->Header_model->delete_menu_all_brief_details($m_b_a_d_id);
							if(count($delete_data)>0){
								$this->session->set_flashdata('success',"menu  brief  details successfully deleted.");
								
								redirect('menu/brieflistsview/'.$brief_menu_id);
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('menu/brieflistsview/'.$brief_menu_id);
							}
					
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		
		
	} 
	

	
   
   
	
	
}	
	
?>	
	



