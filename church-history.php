<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Local css -->
  <link rel="stylesheet" href="./css/mainStyles.css" />
  <link rel="stylesheet" href="./css/mainStyles.responsive.css" />
  <link rel="stylesheet" href="./css/drop-in.animation.css" />
  <link rel="stylesheet" href="./css/drop-down.animation.css" />
  <link rel="stylesheet" href="./css/ripple.css" />

  <!-- Carousel -->
  <!-- <link rel="stylesheet" type="text/css" href="./vendor/carousel/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="./vendor/carousel/css/style1.css" />
  <script type="text/javascript" src="./vendor/carousel/js/modernizr.custom.86080.js"></script> -->




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
    <?php include('./reusables/navbar.php') ?>
    <div class="container-fluid row pt-4 d-flex">
        <div class="col-6 d-flex">
            <div class="d-flex">
               <div class="card IC1 rounded-5 border-0"><img src="avatar.png" class="card-img rounded-4" alt=""></div>
               <div class="card IC2 rounded-5 border-0"><img src="avatar.png" class="card-img rounded-4" alt=""></div>              
               <div class="card IC3 rounded-5 border-0"><img src="avatar.png" class="card-img rounded-4" alt=""></div>            </div>
        </div>
        <div class="col-sm-6">
            <h1 class="display-4 fw-bold text-black UPP">Uniting people with purpose</h1>
            <p class="p text-secondary-emphasis">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                         Aliquam accusamus, quae tempore molestias autem cupiditate
                         corrupti illum laudantium, ipsum laboriosam odio, ipsam ratione
                         quisquam commodi! A officiis voluptates ut sapiente!</p>
            <p class="p text-secondary-emphasis">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                         Aliquam accusamus, quae tempore molestias autem cupiditate
                         corrupti illum laudantium, ipsum laboriosam odio, ipsam ratione
                         quisquam commodi! A officiis voluptates ut sapiente!</p> 
            <button type="button" class="btn btn-primary btnb rounded-3">Learn more</button>             
        </div>
    </div>

    <style>
        body{
            font-family: "Josefin sans", sans-serif;
        }
        .IC1, .IC2, .IC3{
            width: 190px;
            height: 417px;
            margin-right: 25px;
        }
        .card-img{
            height: 100%;
        }
        .IC1{
            margin-top: 100px;
        }
        .IC2{
            margin-top: 55px;
        }
        .IC3{
            margin-top: 15px;
        }
        .UPP{
            margin-left: 115px;
            margin-top: 15px;
            margin-bottom: 20px;
        }
        .p{
            line-height: 30px;
            margin-left: 115px;
        }
        .btnb{
            margin-left: 115px;
            padding-left: 30px; 
            padding-right: 30px;
            padding-top: 8px;
            padding-bottom: 8px;
            margin-top: 15px;
        }
    </style>
    <?php include('./reusables/footer.php') ?>
</body>
</html>
