
            <div class="page-wrapper">
                <div class="content container-fluid">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Testimonial</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="<?php echo base_url('testimonial/add'); ?>" class="btn btn-primary pull-right rounded" ><i class="fa fa-plus"></i> Add Testimonial</a>
						
						</div>
					</div>
					<form>
					
					<div class="row">
						<div class="col-md-12 bg-white">
						<div class="clearfix">&nbsp;</div>
						<?php if(isset($testimonial_list) && count($testimonial_list)>0){ ?>

							<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th >Testimonial No</th>
											<th>Image</th>
											<th>Name</th>
											<th>Designation</th>
											<th>Paragraph</th>
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $cnt=1; foreach($testimonial_list as $list){?>
									
										<tr>
											<td><?php echo $cnt; ?></td>
											
											<td><img class="img-responsive" src="<?php echo base_url('assets/adminprofilepic/'.$list['image']);?>" alt="" style="height:50px;width:auto;"></td>
											<td><?php  echo $list['name'];?></td>
											<td><?php  echo $list['designation'];?></td>
										
											<td><?php  echo $list['paragraph'];?></td>
											<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
											<td class="text-right">
											<a href="<?php echo base_url('testimonial/edit/'.base64_encode($list['t_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
											<a href="<?php echo base_url('testimonial/status/'.base64_encode($list['t_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
		                                    <a href="<?php echo base_url('testimonial/delete/'.base64_encode($list['t_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>
												</td>
										</tr>
									<?php $cnt++;} ?>
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


