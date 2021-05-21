<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include_once 'Header.php';?>
    <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.min.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">

</head>
<body>


    <!-- Left Panel --> 
        <?php include_once 'LeftPanel.php';?>
    <!-- Left Panel -->



    <!-- Right Panel --> 
    <div id="right-panel" class="right-panel">

        <!-- Header-->
            <?php include_once 'HeaderRightPanel.php';?>
        <!-- Header-->
        
    <div class="content pb-0">

            <!-- Content  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Cuartos Registrados
                        </div>
                        <div class="card-body">
                            <div id="responsive-card">
                                <table id="table" class="table table-striped table-bordered display nowrap">
                                    <thead>
                                        <tr>
                                            <th>Cuarto</th>
                                            <th>Nodos</th>
                                            <th>Consultar</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
 				   	                    <?php foreach ($rooms as $row) :?>
                                	        <tr>
                                	            <td align = "center"><?=$row->Room ?></td>
                                	            <td align = "center"><?=$row->numNodes ?></td>-->

                                	            <td align = "center">
						                            <button class="btn btn-success" onclick="reviewRoom('<?= $row->Room?>')">
                                			            <span class="fa fa-search"></span>
						                            </button>
					                            </td>

                                	            <td align = "center">
						                            <button class="btn btn-primary" onclick="updateRoom('<?= $row->Room?>')">
                                			            <span class="fa fa-cogs"></span>
						                            </button>
					                            </td>

					                            <td align = "center">
						                            <button class="btn btn-danger" onclick="eraseRoom('<?= $row->Room?>')">
                                			            <span class="fa fa-minus-circle"></span>
						                            </button>
					                            </td>
                                            </tr>

 				                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .content -->

        <div class="clearfix"></div>

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
    <script src="js/RoomList.js"></script>


</body>
</html>
