
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-md-3 ">
				<h4 class="text-primary">Dishes</h4>
				<div class="progress blue" >
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value" >90%</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<h4 class="text-primary">Customers</h4>
				<div class="progress blue1">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">75%</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<h4 class="text-primary">Awards</h4>
				<div class="progress blue2">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">65%</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<h4 class="text-primary">Working Hours</h4>
				<div class="progress blue">
					<span class="progress-left">
						<span class="progress-bar"></span>
					</span>
					<span class="progress-right">
						<span class="progress-bar"></span>
					</span>
					<div class="progress-value">90%</div>
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
         { label: "Dishes", y: 90 },
         { label: "Customers", y: 75},
         { label: "Awards", y: 65 },                                    
         { label: "working Hours", y: 90 },
         
         ]
       }
       ]
     });

    chart.render();
  }
  </script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
