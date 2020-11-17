
<div id="carouselIndicators" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>        
	<li data-target="#carouselIndicators" data-slide-to="3"></li>

    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card">
    	        <h4 class="card-header text-white bg-dark">Luminosidad</h4>
    	        <div class="card-body bg-secondary">
        	    <?php echo $light; ?><br>
	 		<canvas id="myChart"></canvas>
    	        </div>
	    </div>
        </div>

    	<div class="carousel-item">
	    <div class="card">
    	        <h4 class="card-header text-white bg-dark">Humedad</h4>
    	        <div class="card-body bg-secondary">
        	    <?php echo $humidity; ?> 
		    <br>
    	        </div>
	    </div>
        </div>

        <div class="carousel-item">
            <div class="card">
                <h4 class="card-header text-white bg-dark ">Presencia</h4>
                <div class="card-body bg-secondary">
                    <?php echo $presence; ?>
		    <br>
                </div>
            </div>
        </div>

        <div class="carousel-item">
	    <div class="card">
    	        <h4 class="card-header text-white bg-dark">Temperatura</h4>
    	        <div class="card-body  bg-secondary">
		    <?php echo $temperature; ?> <br>
        	    <div class="flot-container">
            	        <div id="cpu-load" class="ml-4 cpu-load bg-light col-md-10"></div>
        	     </div>
    	        </div>
	    </div>
        </div>

   </div><!--carouselInner-->
   <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>

   <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>
</div><!--carouselIndicator-->
<script src="assets/js/chartjs.min.js"></script
<script src="assets/js/lib/flot-chart/excanvas.min.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.time.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.stack.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
<script src="assets/js/lib/flot-chart/curvedLines.js"></script>
<script src="assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/lib/flot-chart/flot-chart-init.js"></script>
<script src='js/charts/proof.js'></script>
