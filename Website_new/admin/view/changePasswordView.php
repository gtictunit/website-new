<?php
session_start();
    if(isset($_POST["submit"])){
        require_once "model/updateClass.php";
        $user = new updateClass();
        $res = $user->passwordChanged();
    }
?>    
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Children Church Management System</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="library/css/techive.css" rel="stylesheet" type="text/css" />
        <link href="library/css/fontawesome/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
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
                            <i class="fas fa-exchange ispace"></i></i>Change Password
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
                                        <div class="col-md-3 userAuthText">New Password</div>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control form-control-lg" placeholder="Enter New Password" name="npass">
                                        </div>
                                    </div>
                                    <div class="row userAuthInput">
                                        <div class="col-md-3 userAuthText">Confirm Password</div>
                                        <div class="col-md-9">
                                        <input type="password" class="form-control form-control-lg" placeholder="Password" name="cpass">
                                        </div>
                                    </div>
                                    <div class="row userAuthInput">
                                        <div class="col-md-3 userAuthText">&nbsp;</div>
                                        <div class="col-md-9">
                                        <input type="submit" value="Submit" class="btn btn-primary" name="submit"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 userAuthFooter">Children Church Management System<br>
                                <small>Design and Developed by GTICT Team<br>Copyright &copy;2022</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <script type="text/javascript" src="library/js/ccms.js"></script>
          
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                    content.style.display = "none";
                    } else {
                    content.style.display = "block";
                    }
                });
            }
        </script>
    </body>
</html>