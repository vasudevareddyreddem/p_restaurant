
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">About Us</h4>
			</div>
			<div class="col-xs-8 text-right m-b-30">
				<a href="<?php echo base_url('aboutus/brief'); ?>" class="btn btn-primary pull-right rounded" >
					<i class="fa fa-plus"></i> Add About Us
				</a>
			</div>
		</div>
		<form>
			<div class="row">
				<div class="col-md-12 bg-white">
					<div class="clearfix">&nbsp;</div>
					<?php if(isset($aboutus_brief_list) && count($aboutus_brief_list)>0){ ?>

					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th style="width:10%;">Image</th>
									<th>Title</th>
									<th>Paragraph</th>
									<th>Status</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($aboutus_brief_list as $list){?>
								<tr>
									<td>
										<img class="img-responsive" src="<?php echo base_url('assets/adminprofilepic/'.$list['banner']);?>"  alt="" style="height:50px;width:auto;">
										</td>
										<td><?php echo $list['title'];?> </td>
										<td>
												<?php foreach($list['aboutus_list'] as $li){ ?>
												<?php echo $li['paragraph'].'<br>'; ?>
												<?php } ?>
												</td>
										
									
										
										<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
										<td class="text-right">
												<a href="<?php echo base_url('aboutus/briefedit/'.base64_encode($list['a_b_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
											<a href="<?php echo base_url('aboutus/briefstatus/'.base64_encode($list['a_b_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
		                                    <a href="<?php echo base_url('aboutus/briefdelete/'.base64_encode($list['a_b_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>
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