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

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="./assets/images/gt_logo.png" type="image/x-icon">

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
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <h3 class="fontie">Get in touch with us</h3>
              <p>You can reach out to us via this section</p>
              <div class="footer-1">
                <div class="footer-text">
                  <form id="contact-form" role="form" method="post" enctype="text/plain"
                    action="mailto:noahtochukwu10@gmail.com">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_email">Email *</label>
                          <input id="form_email" type="email" name="email" class="form-control"
                            placeholder="Please enter your email *" required="required"
                            data-error="Valid email is required.">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_need">Full Name *</label>
                          <input id="form_need" name="need" class="form-control" required="required"
                            placeholder="Your Name" data-error="Please enter your name.">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="form_message">Message *</label>
                          <textarea id="form_message" name="message" class="form-control"
                            placeholder="Write your message here." rows="4" required="required"
                            data-error="Please, leave us a message."></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="col-md-12">
                        <input type="submit" class="btn btn-warning btn-send  pt-2 btn-block
                            " value="Send Message">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="social-links">
                  <i class="fa-brands fa-facebook-f"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-instagram"></i>
                  <i class="fa-brands fa-youtube"></i>
                </div>
              </div>
            </div>
            <div class="col-sm">

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3956.2974929237753!2d3.9175446!3d7.4322955!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039ed51c6f2bf8f%3A0x2baa9ae9082a5ea0!2sGlory%20Tabernacle%20Ministry!5e0!3m2!1sen!2sng!4v1678534932864!5m2!1sen!2sng"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

          </div>
        </div>
      </div>

    </div>




    <!-- Footer -->
    <?php
    // include('./reusables/footer.php') 
    ?>
  </div>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="/">Glory Tabernacle Ministry</a>
  </div>
</body>

</html>