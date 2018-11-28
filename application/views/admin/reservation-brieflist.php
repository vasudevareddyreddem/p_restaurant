
            <div class="page-wrapper">
                <div class="content container-fluid">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Reservation</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="<?php echo base_url('reservation/brief');?>" class="btn btn-primary pull-right rounded" ><i class="fa fa-plus"></i> Add Reservation</a>
						
						</div>
					</div>
					<form>
					
					<div class="row">
						<div class="col-md-12 bg-white">
						<div class="clearfix">&nbsp;</div>
						<?php if(isset($reservation_brieflist) && count($reservation_brieflist)>0){ ?>
		
							<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width:30%;">Banner</th>
											<th>Title</th>
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										
									<?php foreach($reservation_brieflist as $list){?>
									
										<tr>
											<td>
												<img class="img-responsive" src="<?php echo base_url('assets/adminprofilepic/'.$list['banner']);?>" alt="" style="height:50px;width:auto;">
											</td>
											
											<td><?php echo $list['title'];?></td>
											<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
											<td class="text-right">
												<a href="<?php echo base_url('reservation/editbrief/'.base64_encode($list['r_b_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
											<a href="<?php echo base_url('reservation/statusbrief/'.base64_encode($list['r_b_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
		                                    <a href="<?php echo base_url('reservation/deletebrief/'.base64_encode($list['r_b_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>
											</td>
										</tr>
									<?php }?>
									</tbody>
								</table>
							</div>
						<?php }else{ ?>
                               <div> No data available</div>
                                    <?php }?>	
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



