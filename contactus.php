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

  <link rel="stylesheet" href="./css/drop-in.animation.css" />
  <link rel="stylesheet" href="./css/drop-down.animation.css" />

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="./assets/images/gt_logo.png" type="image/x-icon">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>Glory Tabernacle Ministry Ibadan</title>
</head>

<body>


  <div>
    <!-- Navbar -->
    <?php include('./reusables/navbar.php') ?>


    <div class="contact">
      <div class="contact-header">
        <div class="overlay"></div>
        <p class="ellu-p drop-in"> Contact Us</p>
      </div>

      <div class="abeg">
        <div class="container-xl">
          <div class="address">
            <h4>We are located at:</h4>
            <p>Bethel land, Glory Tabernacle Ministry, Ojurin Bodija, Ibadan</p>
          </div>


          <div class="contact-cta">
            <div class="contact-card">
              <div class="icon-wrapper">
                <img src="./assets/images/email.png" alt="" width="100%" />
              </div>
              <div class="contact-details">
                <h4>Email</h4>
                <div>
                  <p>support@email.com</p>
                </div>
              </div>
            </div>
            <div class="contact-card">
              <div class="icon-wrapper">
                <img src="./assets/images/phone.png" alt="" width="100%" />
              </div>
              <div class="contact-details">
                <h4>Call us</h4>
                <div>
                  <p>+234-818-074-6707</p>
                </div>
              </div>
            </div>

            <div class="contact-card">
              <div class="icon-wrapper">
                <img src="./assets/images/location-pin.png" alt="" width="100%" />
              </div>
              <div class="contact-details">
                <h4>Address</h4>
                <div>
                  <p>support@email.com</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>



      <div class="contact-form">
        <div class="container mx-auto">
          <div class="row gx-5">
            <div class="col-md-8 form-container">
              <div class="mb-5">
                <h3>Get in touch</h3>
                <p>You can fill the form and we will get back to you. </p>
              </div>

              <div class="footer-1">
                <div class="footer-text">
                  <form id="contact-form" role="form" method="post" enctype="text/plain" action="mailto:noahtochukwu10@gmail.com">
                    <div class="row gy-4 mb-4">
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label for="form_email">Email *</label> -->
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address*" required="required" data-error="Valid email is required.">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label for="form_need">Full Name *</label> -->
                          <input id="form_need" name="need" class="form-control" required="required" placeholder="Full Name*" data-error="Please enter your name.">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 mb-5">
                        <div class="form-group">
                          <!-- <label for="form_message">Message *</label> -->
                          <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="col-md-12">
                        <input type="submit" class="btn btn-warning submit-button  pt-2 btn-block
                            " value="Send Message">
                      </div>
                    </div>
                  </form>
                </div>
                <!-- <div class="social-links">
                  <i class="fa-brands fa-facebook-f"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-instagram"></i>
                  <i class="fa-brands fa-youtube"></i>
                </div> -->
              </div>
            </div>
            <!-- <div class="col-sm"></div> -->
            <div class="col-md-4">
              <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3956.2974929237753!2d3.9175446!3d7.4322955!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039ed51c6f2bf8f%3A0x2baa9ae9082a5ea0!2sGlory%20Tabernacle%20Ministry!5e0!3m2!1sen!2sng!4v1678534932864!5m2!1sen!2sng" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    .address h4 {

      font-family: Poppins;
      color: #353535;
      font-size: 45px;
      font-weight: 600;
    }

    .address p {

      font-family: Raleway;
      color: #5c5c5c;
      font-size: 20px;
      font-weight: 400;
    }

    .contact-cta {
      display: flex;
      gap: 32px;
      box-sizing: border-box;
      height: 100%;
      margin: 75px 0;
    }

    .contact-card {
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      border: 1px solid transparent;
      background-color: white;
      padding: 20px;
      display: flex;
      align-items: flex-start;
      gap: 24px;
      height: 100%;
      flex: 1;
    }

    .contact-card .icon-wrapper {
      width: 40px;
      height: 40px;
    }

    .contact-details h4 {
      font-family: Ubuntu;
      color: #5c5c5c;
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 0;
    }

    .contact-details p {

      color: #979797;
      margin-bottom: 0px !important;


    }

    .contact-form {
      width: 100%;
      background-color: #f9f9f9;
      /* padding: 100px 0; */
    }

    .abeg {
      color: #3d0052;
      padding: 53px;
      background-color: #fff;
    }

    .form-container {
      padding: 100px 100px 100px 0;
    }

    .form-container h3 {
      font-family: "Josefin Sans", sans-serif;
      font-size: 42px;
      margin-bottom: 5px;
    }

    .form-container p {
      font-family: "Raleway", sans-serif;
      font-size: 15px;
      color: #838383;
    }

    input,
    textarea {
      border: none !important;
      border-bottom: 1px solid #353535 !important;
      border-radius: 0 !important;
      background-color: transparent !important;
    }

    input::placeholder,
    textarea::placeholder {
      font-size: larger;
    }

    textarea {
      resize: none;
    }

    .submit-button {
      border: 1px solid transparent !important;
      border-radius: 30px !important;
      font-weight: 500;
      font-family: Poppins;
      color: #fff;
      padding: 10px 10px !important;
      background: linear-gradient(315deg, rgba(2, 0, 36, 1) 0%, rgba(109, 9, 121, 1) 35%, rgba(203, 42, 42, 1) 75%) !important;
      cursor: pointer;
      transition: all;
    }

    .submit-button:hover {
      opacity: 0.65;
      color: #fff;

    }

    .map {
      height: 100%;
      width: 100%;
    }

    .social-links i {
      font-size: 18px;
    }

    @media screen and (max-width:768px) {
      .address h4 {
        font-size: 28px;
      }

      .contact-cta {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin: 25px 0;
      }


      .address p {
        font-size: 15px;
      }

      .abeg {
        padding: 20px;
      }

      .form-container h3 {
        font-size: 28px;
      }
      
    .form-container {
      padding: 30px;
      margin: 20px 0;
    }
    .submit-button{
      width: 100%;
    }
    .map{
      height: 400px;
      margin-bottom: 40px;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;    }
    }
  </style>

  <!-- Footer -->
  <?php
  include('./reusables/footer.php')
  ?>
  </div>
</body>

</html>