
<link rel="stylesheet" href="assets/css/charts/chartjsStyles.css">
<link rel="stylesheet" type="text/css" href="assets/css/lib/dateTimePicker/jquery.datetimepicker.min.css">
<div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
    <?php foreach ($mediciones as $tipo => $medicion):?>
        <?php $index = array_search($tipo, array_keys($mediciones));?>
        <?php if($index==0):?>
            <li data-target="#carouselIndicators" data-slide-to=<?=strval($index)?> class="active"></li>
        <?php else: ?>
            <li data-target="#carouselIndicators" data-slide-to=<?=strval($index)?>> </li>
        <?php endif?>
    <?php endforeach?>
    </ol>

	<div class="carousel-inner">
	    <?php foreach ($mediciones as $tipo => $medicion):?>
	        <?php if(array_search($tipo, array_keys($mediciones))==0):?>
	            <div class="carousel-item active"> 
	        <?php else: ?>
	            <div class="carousel-item">
	        <?php endif?>

    		<div class="card">
        		<h4 class="card-header text-white bg-dark"><?= ucfirst($tipo)?></h4>
    			<div class="card-body bg-secondary">
    				<p class = "h6 text-white"> Actual : <?= end($medicion)->value;?></p>
					<br>
    				<div id=<?=$tipo."chartArea"?> class="chartWrapper">
					    <div class="chartAreaWrapper">
  				            <div class="chartAreaWrapper2">
      					        <canvas id= <?="chart".$tipo?> height="300" width="1200"></canvas>
  				            </div>
  			            </div>
  			            <canvas id=<?= $tipo."axis-Test"?> height="300" width="0"></canvas>
		            </div><!--chartArea-->
		            <br>

			        <div id=<?=$tipo."datesContainer"?> class="container">
  			            <div class="row">
    				        <div class="col-sm">
         				        <div class="input-group">
  						            <div class="input-group-prepend">
    							        <span class="input-group-text fa fa-calendar"></span>
  						            </div>
						            <input type="text" class="form-control DTpicker DTfrom" id=<?=$tipo."DTpicker1"?>></input>
					            </div>
    				        </div>

    				        <div class="col-sm">
		   			            <div class="input-group">
  						            <div class="input-group-prepend">
    							        <span class="input-group-text fa fa-calendar"></span>
  						            </div>
						            <input type="text" class="form-control DTpicker DTto" id=<?=$tipo."DTpicker2"?>></input>
    		  			        </div>
    			    	    </div>
  			            </div>
		            </div><!--datesContainer-->
	            </div>
	        </div>
        </div><!--card-->
        <?php endforeach;?>
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

<script src="assets/js/chartjs.min.js"></script>
<script src="assets/js/lib/date-time/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript">var mediciones = <?= json_encode($mediciones) ?>; </script>
<script src='js/charts/grafica.js'></script>

<script src='js/reviewNode.js'></script>
<script src='js/dateTime/dateTimePicker.js'></script>

