
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">Reservation Time
</h4>
			</div>
			<div class="col-xs-8 text-right m-b-30">
				<a href="nav.php" class="btn btn-primary pull-right rounded" >
					<i class="fa fa-plus"></i> Add Reservation Time

				</a>
			</div>
		</div>
		<form>
			<div class="row">
				<div class="col-md-12 bg-white">
					<div class="clearfix">&nbsp;</div>
					<?php if(isset($reser_time) && count($reser_time)>0){ ?>
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Time From </th>
									<th>Time Upto</th>
									<th>Differnce Time Hours</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($reser_time as $list){ ?>
								<tr>		
								<td><?php echo $list['time_form'];?></td>
								<td><?php echo $list['time_to'];?></td>
								<td><?php echo $list['time_differnce'];?></td>
								<td class="text-right">
							<a href="<?php echo base_url('reservationtime/edit/'.base64_encode($list['r_t_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
							<a href="<?php echo base_url('reservationtime/status/'.base64_encode($list['r_t_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
							<a href="<?php echo base_url('reservationtime/delete/'.base64_encode($list['r_t_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>
						
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