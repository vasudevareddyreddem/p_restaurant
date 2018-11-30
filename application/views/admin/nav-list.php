
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">Nav</h4>
			</div>
			<div class="col-xs-8 text-right m-b-30">
				<a href="<?php echo base_url('header/add'); ?>" class="btn btn-primary pull-right rounded" >
					<i class="fa fa-plus"></i> Add Nav
				</a>
			</div>
		</div>
		<form>
			<div class="row">
				<div class="col-md-12 bg-white">
					<div class="clearfix">&nbsp;</div>
					<?php if(isset($header_list) && count($header_list)>0){ ?>

					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th style="width:30%;">favicon</th>
									<th>Logo</th>
									<th>Banner</th>
									<th>Title</th>
									<th>Tag Lines</th>
									<th>Status</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($header_list as $list){?>
								<tr>
								   <td><img class="img-responsive" src="<?php echo base_url('assets/headerpic/'.$list['favicon']);?>" alt="" style="height:50px;width:auto;"></td>
									
										<td>
											<img class="img-responsive" src="<?php echo base_url('assets/headerpic/'.$list['logo']);?>" style="height:50px;width:auto;">
											</td>
											<td>
												<img class="img-responsive" src="<?php echo base_url('assets/headerpic/'.$list['banner']);?>" alt="" style="height:50px;width:auto;">
												</td>
												<td><?php echo $list['title'];?></td>
												<td><?php echo $list['tag_line'];?></td>
												<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
												<td class="text-right">
											<a href="<?php echo base_url('header/edit/'.base64_encode($list['h_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
											<a href="<?php echo base_url('header/status/'.base64_encode($list['h_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
		                                    <a href="<?php echo base_url('header/delete/'.base64_encode($list['h_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>

													
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