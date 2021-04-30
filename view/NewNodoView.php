<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.min.css">
    <?php include_once 'Header.php';?>
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


        <div class="content pb-0">

            <!-- Modulo de Nodo Nuevo  -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <h4 class="card-header text-white bg-dark">Agrega un Nodo nuevo</h4>
                        <div class="card-body">
				            <form>
					            <div class="form-group">
                              			<label id="lblSel" for="sel1">Selecciona Cuarto:</label>
						                <label id="lblInp" for"sel2" style="display:none">Agrega Cuarto:</label>
                              			<select class="form-control" id="comboRoom" placeholder = "Selecciona un cuarto" onchange="loadNodes()">
			            			        <?php echo $comboRoom ?>
                              			</select>

                              			<input id="inputRoom" style="display:none" type="text" class="form-control" placeholder="Escribe el nuevo cuarto" aria-describedby="nodeLabel" id="nodeName">
						                    <label for="myCheck" class="text-muted">Crear un cuarto nuevo:</label> 
						                <input type="checkbox" id="myCheck" onclick="swtichAgregaSelecciona()">

			      		        </div>

					            <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Escribe el alias del nodo" aria-describedby="nodeLabel" id="nodeName">
                                </div>

                    		    <div class="buttons float-right"><!--Debo de modificar este boton para que agregue el nodo-->
                           		    <button class="btn btn-md btn-success" id="saveRoom"><span class="fa fa-check"></span> Guardar</button>
                    		    </div>
				            </form>
                        </div> <!--"card-body"-->
                    </div> <!--"card"-->
                </div><!--"col"-->
		<!--Fin del modulo de Nuevo Nodo -->

		<!--Modulo de Nodos en el cuarto seleccionado -->
                <div class="col-sm-6">
                    <div class="card">
                        <h4 class="card-header text-white bg-dark">Nodos del cuarto</h4>
                        <div class="card-body">
                            <div class="table-responsive"></div>
                            <table id="nodesList" class="table-striped" width="100%">
                            </table>
                        </div>
                    </div>
                </div>
		<!--Fin Modulo de Nodos en el cuarto seleccionado -->

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

    <script src="js/alerts.js"></script>
    <script src="js/server.js"></script>
    <script src="config/sidebar.js"></script>
    <script src="js/frame.js"></script>
    <script src="js/NewNodo.js"></script>

</body>
</html>
