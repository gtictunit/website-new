<?php
session_start();
    if(isset($_POST["submit"])){
        require_once "model/userLogin.php";
        $user = new userLogin();
        $res = $user->login();
    }
?>    
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Glory Tabernacle Ministry | Administrator</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="library/css/techive.css" rel="stylesheet" type="text/css" />
        <link href="library/css/fontawesome/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./library/img/gt_logo.png" type="image/x-icon">
    </head>
    <body class="bodyIndex">
        <div class="container-fluid">
            <div class="row justify-content-md-center authenDiv">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <!--Authentication Inner Div-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 userAuthTitle">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;Admin Authentication
                            </div>
                        </div>
                        <div class="row userAuthBody">
                        
                        <div class="container-fluid">
                                <form class="form-group"  method = "Post">
                                    <div class="row">
                                        <div class="col-md-12 userAuthFailed">
                                            <?php if(isset($res)){echo $res;}?>
                                        </div>
                                    </div>
                                    <div class="row userAuthInput">
                                        <div class="col-md-2 userAuthText">Email</div>
                                        <div class="col-md-10">
                                            <input type="email" class="form-control form-control-lg" placeholder="Enter email" name="email">
                                        </div>
                                    </div>
                                    <div class="row userAuthInput">
                                        <div class="col-md-2 userAuthText">Password</div>
                                        <div class="col-md-10">
                                        <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                                        </div>
                                    </div>
                                    <div class="row userAuthInput">
                                        <div class="col-md-2 userAuthText">&nbsp;</div>
                                        <div class="col-md-10"><a href="forgot.php" class="userAuthForget">Forgot Password?</a></div>
                                    </div>
                                    <div class="row userAuthInput">
                                        <div class="col-md-2 userAuthText">&nbsp;</div>
                                        <div class="col-md-10">
                                        <input type="submit" value="Sign in" class="btn btn-primary" name="submit"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 userAuthFooter">Glory Tabernacle Ministry Ibadan<br>
                                <small>Design and Developed by GTICT Team<br>Copyright &copy;2023</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>
</html>