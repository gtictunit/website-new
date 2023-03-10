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
  <link rel="stylesheet" href="./css/drop-in.animation.css" />
  <link rel="stylesheet" href="./css/drop-down.animation.css" />

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="shortcut icon" href="./assets/images/gt_logo.png" type="image/x-icon">

  <title>Glory Tabernacle Ministry Ibadan</title>
</head>

<body>
  <div>
    <?php include('./reusables/navbar.php') ?>
    <header>
      <div class="overlay"></div>
      <div class="hero">
        <h6 class="header-text drop-in">
          Welcome to<br />
          Glory Tabernacle Ministry
        </h6>
        <div class="header-description drop-in-2">
          <span>SALVATION</span>| <span>SANCTIFICATION</span>|
          <span>SERVICE</span>
        </div>
      </div>
      <a class="learn-more-btn">
        Learn more
        <i class="fa-solid fa-chevron-down animate__animated animate__pulse animate__infinite"></i>
      </a>
    </header>

    <section class="container-xl mx-auto">
      <div class="card-container" >
        <div class="card card-1" data-aos="fade-up"  data-aos-offset="-300" data-aos-duration="800" data-aos-easing="ease-in" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
          <h6>MOTTO</h6>
          <p>Jesus gave Himself for me, that He might redeem me from all iniquity, and purify me unto Himself a peculiar child, zealous of good works. </p>
        </div>
        <div class="card card-2" data-aos-delay="100" data-aos="fade-up"  data-aos-offset="-300" data-aos-duration="800" data-aos-easing="ease-in" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
          <h6>VISION</h6>
          <p>I will be a living model of genuine salvation, sanctification and service to God's glory.Enter to worship and depart to serve


        </div>
        <div class="card card-3" data-aos="fade-up"  data-aos-offset="-300" data-aos-duration="800" data-aos-easing="ease-in" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center" data-aos-delay="200">
          <h6>Service Times </h6>
          <p>Thursdays at 4:30pm.<br />
            Sundays at 9:00am
          </p>
          <h6>Our Location </h6>
          <p>We are located Bethel land, Railway-crossing, bodija-ojurin, Ibadan, Oyo state.
          </p>
        </div>
      </div>
    </section>

    <section class="container-xl welcome-section">
      <div class="welcome-image">
        <img src="./assets/images/crd-welcome.jpg" alt="" width="100%" />
      </div>
      <div class="welcome-text">
        <span>Welcome to</span>
        <h6>Glory Tabernacle Ministry</h6>
        <p>What a joy it is to introduce you to our church! You'll discover that our passion is to provide a place where people just like you can have a life-changing experience with God. At our doors are wide open to people from all backgrounds.</p>
      </div>
    </section>
    <?php include('./reusables/footer.php') ?>
  </div>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>