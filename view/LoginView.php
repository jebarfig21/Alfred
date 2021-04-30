
<!doctype html> <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]--> <!--[if IE 7]> <html class="no-js lt-ie9 
lt-ie8" lang=""> <![endif]--> <!--[if IE 8]> <html class="no-js lt-ie9" lang=""> <![endif]--> <!--[if gt IE 8]><!--> <html class="no-js" 
lang=""> <!--<![endif]--> 
<head>
 <?php include_once 'Header.php';?>
 <link rel="stylesheet" href="assets/css/Login.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">LogIn</h5>
                        <form class="form-signin">
                            <div class="form-label-group">
                                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                <label for="inputEmail">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" onclick=sendCredentials()>Ingresar</button>
                            <hr class="my-4">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>console.log(document.getElementById("inputEmail"))</script>    


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/jquery-confirm/jquery-confirm.min.js"></script>

<script src="js/Login.js"></script>
<script src="js/server.js"></script>
<script src="js/alerts.js"></script>





</body>
