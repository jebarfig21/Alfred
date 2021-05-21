<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include_once 'Header.php';?>
    <link href="assets/calendar/fullcalendar.css" rel="stylesheet" />
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

            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7f-sun"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count">21</span>&deg;C</div>
                                        <div class="stat-heading">Temperatura</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7f-lintern"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">460</span></div>
                                        <div class="stat-heading">Luminosidad</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7f-umbrella"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib"> 
                                        <div class="stat-text"><span class="count">20</span>%</div>
                                        <div class="stat-heading">Humedad</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7f-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div cl
ass="text-left dib"> 
                                        <div class="stat-text"><span class="count">10</span></div>
                                        <div class="stat-heading">Presencia</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Widgets End -->

            <!-- Calender Chart Weather  -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">  
                            <!-- <h4 class="box-title">Chandler</h4> -->
                            <div class="calender-cont widget-calender">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->
            <!-- Calender Chart Weather  End -->
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


</body>
</html>
