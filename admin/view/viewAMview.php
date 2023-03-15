<?php
    session_start();
     require_once "model/dashboardClass.php";
     require_once "model/selectClass.php";
    $admin = new dashboardClass();
    $select = new selectClass();
    $menu = $admin->Menu();
    $usermail = $admin->adminEmail();  
    
    require_once "model/audioMessage.php";
    $pd = new audioMessage();
    $message = $pd->viewAllAudioMessage();
?>    
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Glory Tabernacle Ministry | Administrator Console</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <link href="library/css/techive.css" rel="stylesheet" type="text/css" />
        <link href="library/css/fontawesome/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Macondo&family=Original+Surfer&family=Permanent+Marker&family=Roboto+Condensed:wght@300&family=Roboto+Flex:opsz,wght@8..144,100&family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="./library/img/gt_logo.png" type="image/x-icon">
    </head>
    <body class="bodyDashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 dashboardMenu">
                    <!--Menu Div-->
                    <div class="col-md-12 margbott">
                        <img src="./library/img/gt_logo.png" class="gtlogo" alt="Logo" />
                        <p class="logoText2">Glory Tabernacle Ministry</p>
                    </div>
                    <div class="col-md-12">
                        <?php if(isset($menu)){require_once $menu;}?>
                    </div>
                       
                </div>
                <!--body contents-->
                <div class="col-md-10 ">
                    <div class="content-fluid infodiv rowShadow">
                        <div class="row ">
                            <div class="col-md-6 dashtext">
                                View Audio Message
                            </div>
                            <div class="col-md-6 usermail">
                                <i class="fa-solid fa-circle-user ispace"></i><?php if(isset($usermail)){echo $usermail;}?>
                                <div class="dashboardmenudiv">
                                    <i class="glyphicon glyphicon-option-vertical dropbtn" onclick="myFunction()" ></i>
                                    <div id="myDropdown" class="dropdown-content">
                                        <?php require_once 'usermenu.php';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container vContainer">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $message; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--Div container-fluid-->
        
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