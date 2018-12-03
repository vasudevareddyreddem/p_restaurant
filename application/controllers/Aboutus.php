<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/In_frontend.php');


class Aboutus extends In_frontend {

	
	public function __construct() 
	{
		parent::__construct();	
		
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
		$save_data=array(
		'title'=>isset($post['title'])?$post['title']:'',
		'status'=>1,
		'created_at'=>date('Y-m-d H:i:s'),
		'updated_at'=>date('Y-m-d H:i:s'),
		'created_by'=>$admindetails['u_id'],
      );
	 //echo '<pre>';print_r($save_data);exit;
    $save=$this->Header_model->save_aboutus_brief_details($save_data);
	if(count($save)>0){
				if(isset($post['paragraph']) && count($post['paragraph'])>0){
					foreach($post['paragraph'] as $list){ 
						  $add_data=array(
						  'a_b_id'=>isset($save)?$save:'',
						  'paragraph'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['u_id'],
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $this->Header_model->save_aboutus_brief_paragrap_details($add_data);	

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
			$update_data=array(
				'title'=>isset($post['title'])?$post['title']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($admindetails['u_id'])?$admindetails['u_id']:''
				 );
	            //echo'<pre>';print_r($update_data);exit;
	            $update=$this->Header_model->update_aboutus_brief_details($post['a_b_id'],$update_data);	
			//echo'<pre>';print_r($update);exit;    
		      if(count($update)>0){
				  $details=$this->Header_model->get_edit_about_list($post['a_b_id']);
				  if(count( $details)>0){
					  foreach($details as $lis){
						 $this->Header_model->delete_aboutus_brief_praragraph_details($lis['a_p_id']); 
					  }
					}
					if(isset($post['paragraph']) && count($post['paragraph'])>0){
					foreach($post['paragraph'] as $list){ 
						  $add_data=array(
						  'a_b_id'=>isset($post['a_b_id'])?$post['a_b_id']:'',
						  'paragraph'=>$list,
						  'status'=>1,
						  'created_at'=>date('Y-m-d H:i:s'),
						  'updated_at'=>date('Y-m-d H:i:s'),
						  'created_by'=>$admindetails['u_id'],
						  );
						   //echo '<pre>';print_r($add_data);exit;
						  $this->Header_model->save_aboutus_brief_paragrap_details($add_data);	

				       }
					}
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

public  function remove_pragraph(){
	$post=$this->input->post();
					
		$delete_data=$this->Header_model->delete_aboutus_brief_praragraph_details($post['p_id']);
		//echo $this->db->last_query();exit;
		if(count($delete_data)>0){
			$data['msg']=1;
			echo json_encode($data);exit;
		}else{
			$data['msg']=0;
			echo json_encode($data);exit;
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
					
					if($a_b_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->Header_model->update_aboutus_brief_details($a_b_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"aboutus brief details successfully deleted.");
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
	
	
	
	
}
	



