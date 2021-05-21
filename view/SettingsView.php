<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include_once 'Header.php';?>
    <link href="assets/calendar/fullcalendar.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/jquery-confirm/jquery-confirm.min.css">
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
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card" style="width: fit-content; padding-top: inherit;">
                            <img class="mx-auto" alt="Add User Male icon" src="https://img.icons8.com/ultraviolet/2x/add-user-male.png" style="height:100px;width:100px;">                      
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="addNewUser()" style="width: 150px">Agregar usuario</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: fit-content; padding-top: inherit;">
                            <img class="mx-auto" alt="Add User Male icon" src="https://img.icons8.com/ultraviolet/2x/edit-user-male.png" style="height:100px;width:100px;">                      
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="addNewUser()"  style="width: 150px">Editar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: fit-content; padding-top: inherit;">
                            <img class="mx-auto" alt="Add User Male icon" src="https://img.icons8.com/ultraviolet/2x/remove-user-male.png" style="height:100px;width:100px;">                      
                            <div class="card-body">
                                <button class="btn btn-danger" onclick="addNewUser()"  style="width: 150px">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
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
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/jquery-confirm/jquery-confirm.min.js"></script>

  
    <!--
       Bibliotecas para el calendario
    -->

    <script src="assets/js/lib/moment/moment.js"></script>
    <script src="assets/calendar/fullcalendar.min.js"></script>
    <script src="assets/calendar/es.js"></script>
    <script src="assets/calendar/fullcalendar-init.js"></script>


    <!--
       Bibliotecas para el menu lateral
    -->

    <script src="config/sidebar.js"></script>
    <script src="js/frame.js"></script>
    <script src="js/server.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/alerts.js"></script>
    

</body>
</html>
