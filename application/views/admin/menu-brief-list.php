
            <div class="page-wrapper">
                <div class="content container-fluid">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">menu brief</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="<?php echo base_url('menu/brief');?>" class="btn btn-primary pull-right rounded" ><i class="fa fa-plus"></i> Menu</a>
						
						</div>
					</div>
					<form>
					
					<div class="row">
						<div class="col-md-12 bg-white">
						<div class="clearfix">&nbsp;</div>
							<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th >Banner</th>
											<th>Title</th>
											<th >MenuType</th>
											
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php if(isset($menu_brief_list) && count($menu_brief_list)>0){ ?>
										<?php foreach($menu_brief_list as $list){?>
									
										<tr>
											<td >
											<img class="img-responsive" src="<?php echo base_url('assets/menu_bar_brief/'.$list['banner']);?>" alt="" style="height:50px;width:auto;">
											</td>
											<td><?php echo $list['title'];?></td>
											<td><?php echo $list['menu_type'];?></td>
											<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>

											<td class="text-right">
														<a href="<?php echo base_url('menu/briefedit/'.base64_encode($list['m_b_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
														<?php if($list['menu_type']=='Daily special'){ ?>
														<a href="<?php echo base_url('menu/dailyspecialbriefstatus/'.base64_encode($list['m_b_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
														<?php }else{ ?>
															<a href="<?php echo base_url('menu/briefstatus/'.base64_encode($list['m_b_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>

														<?php } ?>
														<a href="<?php echo base_url('menu/briefdelete/'.base64_encode($list['m_b_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>
														<a href="<?php echo base_url('menu/brieflistsview/'.base64_encode($list['m_b_id']));?>" data-toggle="tooltip"  title="View" class="btn btn-primary"><i class="fa fa-eye btn btn-primary"></i></a>
														</td>
											
										</tr>
										<?php }?>
										<?php }?>
									</tbody>
									
								</table>
							</div>
						</div>
					</div>
                </div>
				
			</div>
			

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


