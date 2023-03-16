<?php
    require_once "model/pastorDesk.php";
    $pdesk = new pastorDesk();

    $title = $pdesk->viewPastorDeskHead();
    $body = $pdesk->viewPastorDeskBody()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Local css -->
  <link rel="stylesheet" href="./css/mainStyles.css" />
  <link rel="stylesheet" href="./css/drop-in.animation.css" />
  <link rel="stylesheet" href="./css/drop-down.animation.css" />
  <link rel="stylesheet" href="./css/ripple.css" />
  <link rel="stylesheet" href="./css/mainStyles.responsive.css" />
  <link rel="stylesheet" href="./css/missions.css" />


  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- SwiperJs -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <link rel="shortcut icon" href="./assets/images/gt_logo.png" type="image/x-icon">

  <title>Glory Tabernacle Ministry Ibadan</title>
</head>
<body>
    <div>
    <?php include('./reusables/navbar.php')?>
    <header class="m-header-1">
        <div class="m-overlay"></div>
        <div class="m-hero">
          <h6 class="m-header-text drop-in">
                 ...from the Pastor's Desk
          </h6>
        </div>
    </header><br>
    <div class="mission-words container">
        <div class="row">
            <div class="col-md-2">
                <img src="assets/images/GPdesk.png" class="pdeskImg"/>
            </div>
            <div class="col-md-10">
                <div class="mission-words-1">
                    <?php echo $title;?>
                    <br>
                    <?php echo $body;?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('./reusables/footer.php')?>
    </div>
</body>
</html>