<div class="card">
    <div class="card-header">Luminosidad</div>
    <div class="card-body">
        Luz: <?php echo $light; ?><br>
    </div>

</div>
<div class="card">
    <div class="card-header">Humedad</div>
    <div class="card-body">
        Humedad: <?php echo $humidity; ?> <br>
    </div>
</div>

<div class="card">
    <div class="card-header bg-primary">Temperatura</div>
    <div class="card-body">

	Temperatura:<?php echo $temperature; ?> <br>

        <div class="flot-container">
            <div id="cpu-load" class="cpu-load"></div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">Presencia</div>
    <div class="card-body">
        Presencia:<?php echo $presence; ?> <br>
    </div>
</div>


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
