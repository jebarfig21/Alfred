<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include_once 'Header.php';?>
    <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.min.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/sensores.css">
</head>
<body>

    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default"> 
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav" id="SideBar">
                    <li class="active" id="main-option">
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel --> 
    <!-- Left Panel -->



    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once 'HeaderRightPanel.php';?>
        <!-- Header-->
	<!--Start body right panel-->
		<div>
			<p class="h1 h1 pl-4 pt-3 "><?=ucfirst($nodos[0]->tipo);?></p>
       		 </div>

 		<hr/>
    		<div class="row">

		<?php foreach($nodos as $nodo):?>
		<div class="cards_item col-lg-4 col-md-6">
      			<div class="card rounded shadow rounded ml-3 mr-3">
				<div class="card-header my_card_header">
    					<p class = "card_header_text"><?=$nodo->Alias;?></p>
  				</div>
        			<div class="card_content">
          				<h2 class="card_title"><?=$nodo->tipo;?></h2>
          				<p class="valueData count">	<?=$nodo->value;?></p>
          				<p class="roomText"><?=$nodo->Room?></p>
          				<p class="dateText"><?=$nodo->date?></p>	
					<button class="btn card_btn">Read More</button>
        			</div>
      			</div>
    		</div>
    
		<?php endforeach?>
		</div><!--row-->
    	

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row" id="footer">
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/jquery-confirm/jquery-confirm.min.js"></script>

    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/jquery-confirm/jquery-confirm.min.js"></script>




    <script src="js/alerts.js"></script>
    <script src="js/server.js"></script>
    <script src="config/sidebar.js"></script>
    <script src="js/frame.js"></script>
    <script src="js/ListNodes.js"></script>


</body>
</html>
