
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-md-3 ">
				<h4 class="text-primary">Hot Dishes</h4>
				<div class="progress blue" >
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value" ><?php echo isset($hot_dishes['dishes_count'])?$hot_dishes['dishes_count']:'';?></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<h4 class="text-primary">Chefs</h4>
				<div class="progress blue1">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value"><?php echo isset($chefs_count['chief_total_count'])?$chefs_count['chief_total_count']:'';?></div>
				</div>
			</div>
			<div class="col-md-3 ">
				<h4 class="text-primary">Food items</h4>
				<div class="progress blue2">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value"><?php echo isset($food_items['items_count'])?$food_items['items_count']:'';?></div>
				</div>
			</div>
			<div class="col-md-3 ">
				<h4 class="text-primary">Testimonial</h4>
				<div class="progress blue">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value"><?php echo isset($testimal_count['test_count'])?$testimal_count['test_count']:'';?></div>
				</div>
			</div>
		</div>
		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
	</div>
</div>
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {

      title:{
        text: ""              
      },
      data: [//array of dataSeries              
        { //dataSeries object

         type: "column",
         dataPoints: [
         { label: "Hot Dishes", y: <?php echo isset($hot_dishes['dishes_count'])?$hot_dishes['dishes_count']:'';?> },
         { label: "Chefs", y: <?php echo isset($chefs_count['chief_total_count'])?$chefs_count['chief_total_count']:'';?> },
         { label: "Food items", y: <?php echo isset($food_items['items_count'])?$food_items['items_count']:'';?> },                                    
         { label: "Testimonial", y: <?php echo isset($testimal_count['test_count'])?$testimal_count['test_count']:'';?> },
         
         ]
       }
       ]
     });

    chart.render();
  }
  </script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
