<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alfred's Home</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.min.css">
     <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">

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
        <header id="header" class="header">  
            <div class="top-left">
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="./"><img src="images/logo.jpg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> 
                </div> 
            </div>
        </header><!-- /header -->
        <!-- Header-->


    <div class="content pb-0">

            <!-- Content  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Nodos Registrados
                        </div>
                        <div class="card-body">
                            <div id="responsive-card">
                                <table id="table" class="table table-striped table-bordered display nowrap">
                                    <thead>
                                        <tr>
                                            <th>Cuarto</th>
                                            <th>Nodo</th>
                                            <th>Consultar</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $tableContent;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .content -->


        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nuevo Nodo</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon fa fa-book" id="nodeLabel"></span>
                        <input type="text" class="form-control" placeholder="Alias" aria-describedby="nodeLabel" id="nodeName">
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="addNode" class="btn btn-md btn-primary float-right" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus-circle"></span> Agregar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

            </div>
        </div>



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
    <script src="js/ListNodes.js"></script>


</body>
</html>
