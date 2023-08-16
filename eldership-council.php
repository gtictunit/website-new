<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eldership Council</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Local css -->
  <link rel="stylesheet" href="./css/mainStyles.css" />
  <link rel="stylesheet" href="./css/menu-bar.css" />
  <link rel="stylesheet" href="./css/mainStyles.responsive.css" />
  <link rel="stylesheet" href="./css/drop-in.animation.css" />
  <link rel="stylesheet" href="./css/drop-down.animation.css" />
  <link rel="stylesheet" href="./css/ripple.css" />
  <link rel="stylesheet" href="./css/missions.css" />
  <link rel="stylesheet" href="./css/Chistory.css" />



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

  <!-- <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script> -->
</head>


<body>
  <div>
    <div>
      <!-- <header class="main-header"> -->
      <?php include('./reusables/navbar.php') ?>

      <header class="history-header-1">
        <div class="history-overlay"></div>
        <div class="hero">
          <h4 class="history-header-text drop-in">
            Eldership Council
          </h4>
        </div>
      </header>
    </div>
  </div>
  <div class="content">
    <div
      class="container-xl justify-content-center justify-content-around d-flex flex-column flex-md-row px-0 mx-auto pb-4"
      style="gap:48px; margin-bottom:100px;">
      <!-- 1 -->
      <div type="button" class="btn border-0 image-overly pastor-card" data-bs-toggle="modal" data-bs-target="#GPM">
        <img src="./assets/images/eldership/gp.png" width="100%" height="90%"
          style="border-radius:12px; object-fit:cover; object-position:top;" alt="">
        <div class="overlay-text text-start mt-3">
          <p class="name">Pastor Gabriel Akinbola</p>
          <p class="eldership-post">General Pastor</p>
        </div>
      </div>
      <!-- modal -->
      <div class="modal modal-lg p-1" id="GPM">
        <div class="modal-dialog modal-dialog-centered p-1">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-bottom-0">
              <h4 class="modal-title"></h4>
              <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-wrap">
              <span class="pb-1"><img id="avatar" src="avatar.png" alt="" /></span>
              <h4 class="modal-title">Pastor Gabriel Akinbola</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit.Dignissimos illum cum possimus natus sit deserunt, on
                ipsa dolorum numquam iste id in voluptate nobis doloremque
                distinctio nemo quod nihil tempora.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div type="button" class="btn border-0 image-overly pastor-card" data-bs-toggle="modal" data-bs-target="#GPM">
        <img src="./assets/images/eldership/ap.png" width="100%" height="90%"
          style="border-radius:12px; object-fit:cover; object-position:top;" alt="">
        <div class="overlay-text text-start mt-3">
          <p class="name">Pastor Joseph Emmanuel</p>
          <p class="eldership-post">Assistant Pastor</p>
        </div>
      </div>
      <!-- modal -->
      <div class="modal modal-lg p-1" id="AGP">
        <div class="modal-dialog modal-dialog-centered p-1">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-bottom-0">
              <h4 class="modal-title"></h4>
              <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-wrap">
              <span class="pb-1"><img id="avatar" src="avatar.png" alt="" /></span>
              <h4 class="modal-title">Pastor Joseph Emmanuel</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit.Dignissimos illum cum possimus natus sit deserunt, on
                ipsa dolorum numquam iste id in voluptate nobis doloremque
                distinctio nemo quod nihil tempora.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 2nd row -->
    <div class="container-xl eldership-row">
      <!-- 1 -->
      <div type="button" class="btn border-0 elder-card" data-bs-toggle="modal" data-bs-target="#EDO">
        <img src="./assets/images/eldership/elder_alao.png" width="100%" height="85%"
          style="border-radius:12px; object-fit:cover; object-position:top;" alt="">
        <p class="elder-name">Elder Daniel Oshafi</p>
      </div>
      <!-- modal -->
      <div class="modal modal-lg p-1" id="EDO">
        <div class="modal-dialog modal-dialog-centered p-1">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-bottom-0">
              <h4 class="modal-title"></h4>
              <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-wrap">
              <span class="pb-1"><img id="avatar" src="avatar.png" alt="" /></span>
              <h4 class="modal-title">Elder Daniel Oshafi</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit.Dignissimos illum cum possimus natus sit deserunt, on
                ipsa dolorum numquam iste id in voluptate nobis doloremque
                distinctio nemo quod nihil tempora.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div type="button" class="btn border-0 elder-card" data-bs-toggle="modal" data-bs-target="#EJA">
        <img src="./assets/images/eldership/elder_alao.png" width="100%" height="85%"
          style="border-radius:12px; object-fit:cover; object-position:top;" alt="">
        <p class="elder-name">Elder Johnson Adewumi</p>
      </div>
      <!-- modal -->
      <div class="modal modal-lg p-1" id="EJA">
        <div class="modal-dialog modal-dialog-centered p-1">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-bottom-0">
              <h4 class="modal-title"></h4>
              <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-wrap">
              <span class="pb-1"><img id="avatar" src="avatar.png" alt="" /></span>
              <h4 class="modal-title">Elder Johnson Adewumi</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit.Dignissimos illum cum possimus natus sit deserunt, on
                ipsa dolorum numquam iste id in voluptate nobis doloremque
                distinctio nemo quod nihil tempora.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div type="button" class="btn border-0 elder-card" data-bs-toggle="modal" data-bs-target="#EJU">
        <img src="./assets/images/eldership/elder_alao.png" width="100%" height="85%"
          style="border-radius:12px; object-fit:cover; object-position:top;" alt="">
        <p class="elder-name">Elder Joseph Uponi</p>
      </div>
      <!-- modal -->
      <div class="modal modal-lg p-1" id="EJU">
        <div class="modal-dialog modal-dialog-centered p-1">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-bottom-0">
              <h4 class="modal-title"></h4>
              <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-wrap">
              <span class="pb-1"><img id="avatar" src="avatar.png" alt="" /></span>
              <h4 class="modal-title">Elder Joseph Uponi</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit.Dignissimos illum cum possimus natus sit deserunt, on
                ipsa dolorum numquam iste id in voluptate nobis doloremque
                distinctio nemo quod nihil tempora.
              </p>
            </div>
          </div>
        </div>
      </div>


      <!-- 1 -->
      <div type="button" class="btn border-0  elder-card" data-bs-toggle="modal" data-bs-target="#ESA">
        <img src="./assets/images/eldership/elder_alao.png" width="100%" height="85%"
          style="border-radius:12px; object-fit:cover; object-position:top;" alt="">
        <p class="elder-name">Elder Samuel Agbokeye</p>
      </div>
      <!-- modal -->
      <div class="modal modal-lg p-1" id="ESA">
        <div class="modal-dialog modal-dialog-centered p-1">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-bottom-0">
              <h4 class="modal-title"></h4>
              <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-wrap">
              <span class="pb-1"><img id="avatar" src="avatar.png" alt="" /></span>
              <h4 class="modal-title">Elder Samuel Agbokeye</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit.Dignissimos illum cum possimus natus sit deserunt, on
                ipsa dolorum numquam iste id in voluptate nobis doloremque
                distinctio nemo quod nihil tempora.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div type="button" class="btn border-0 elder-card" data-bs-toggle="modal" data-bs-target="#EYA">
        <img src="./assets/images/eldership/elder_alao.png" width="100%" height="85%"
          style="border-radius:12px; object-fit:cover; object-position:top;" alt="">
        <p class="elder-name">Elder Yemi Alao</p>
      </div>
      <!-- modal -->
      <div class="modal modal-lg p-1" id="EYA">
        <div class="modal-dialog modal-dialog-centered p-1">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-bottom-0">
              <h4 class="modal-title"></h4>
              <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-wrap">
              <span class="pb-1"><img id="avatar" src="avatar.png" alt="" /></span>
              <h4 class="modal-title">Elder Yemi Alao</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit.Dignissimos illum cum possimus natus sit deserunt, on
                ipsa dolorum numquam iste id in voluptate nobis doloremque
                distinctio nemo quod nihil tempora.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <?php include('./reusables/footer.php') ?>

  <style>
    .content {
      margin: 100px 0;
    }

    .eldership-row {
      flex-direction: row;
      align-items: center;
      justify-content: center;
      gap: 28px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: 1fr;
      padding: 100px 0 !important;
    }

    .pastor-card {
      width: 100%;
      height: 650px;
      border-radius: 12px;
      padding: 0 !important;
    }

    .pastor-card img {
      box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;

    }

    .elder-card {
      width: 100%;
      height: 450px;
      border-radius: 12px;
      padding: 0 !important;
    }

    .elder-card img {
      box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    }

    .name {
      color: #150200;
      font-size: 36px;
      font-weight: bold;
      font-family: 'Josefin Sans';
      margin: 0;
    }

    .elder-name {
      color: #150200;
      font-size: 21px;
      font-weight: bold;
      font-family: 'Josefin Sans';
      margin-top: 16px;
      text-align: left;
      border-bottom: 3px solid darkorange;
      width: fit-content;
    }

    .eldership-post {
      color: #777777;
      font-size: 21px;
      font-weight: 600;
      font-family: 'Raleway';
      margin: 0;
      border-bottom: 3px solid darkorange;
      width: fit-content;
    }

    @media screen and (max-width:768px) {
      .content {
        margin: 50px 0;
        padding: 0 16px;
      }

      .eldership-row {
        gap: 20px;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        padding: 0px 0 !important;
      }

      .pastor-card {
        height: 500px;
        margin-bottom: 32px;
      }

      .elder-card {
        height: 400px;
        margin-bottom: 24px;
      }

      .name {
        font-size: 24px;
      }

      .elder-name {
        font-size: 17px;
      }

      .eldership-post {
        font-size: 16px;
      }
    }
  </style>

</body>

</html>