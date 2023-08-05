<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eldership Council</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="./css/drop-in.animation.css" />
  <link rel="stylesheet" href="./css/drop-down.animation.css" />
  <link rel="stylesheet" href="./css/ripple.css" />
  <!-- <link rel="stylesheet" href="./css/accrodion.css" /> -->
  <link rel="stylesheet" href="./css/mainStyles.responsive.css" />
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
  <div>
  <div>
    <header class="main-header">
      <?php include('./reusables/navbar.php') ?>
  
 

      <header class="history-header-1">
      <div class="history-overlay"></div>
      <div class="hero">
        <h4 class="history-header-text drop-in">
        Our Eldership Council
        </h4>
      </div>
    </header>
  </div>
  </div>

  <body>
    <!-- General pastor+ 
         Assistant pastor+
       3 Elder Joseph Uponi +
       2 Elder Johnson Adewumi +
       1 Elder Daniel Oshafi +
       4 Elder Samuel Agbokeye +
       5 Elder Yemi Alao +
        Elder Adebayo Oke -
        Elder Tokunbo Bamgbose -
        Elder Adeolu Adedapo-
    -->
    <!-- <div class="container">
      <h1 class="display-3 text-center  fw-bold" id="EC"></h1>
    </div> -->

    <div class=" justify-content-center justify-content-around d-flex flex-row px-0 mx-auto pb-4  mt-0">
      
          <!-- 1 -->
          <div
            type="button"
            class="btn border-0 w-50 image-overlay"
            data-bs-toggle="modal"
            data-bs-target="#GPM"
          >
          <img src="./avatar.png" class="ps-5 " style="width: 42rem; height: 40rem" alt="">
          <div class="overlay-text text-start" style="margin-left: 2rem">
          <p class="h4">General Pastor</p>
          <p class="h2">Pastor Gabriel Akinbola</p>
          </div>
          </div>
<!-- modal -->
`     <div class="modal modal-lg p-1" id="GPM">
          <div class="modal-dialog modal-dialog-centered p-1">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header border-bottom-0">
                <h4 class="modal-title"></h4>
                <button
                  type="button"
                  class="btn-close "
                  data-bs-dismiss="modal"
                ></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body text-wrap">
                <span class="pb-1"
                  ><img id="avatar" src="avatar.png" alt=""
                /></span>
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
          <div
            type="button"
            class="btn border-0 w-50 image-overlay"
            data-bs-toggle="modal"
            data-bs-target="#AGP"
          >
          <img src="./avatar.png" class="pe-5" style="width: 42rem; height: 40rem" alt="">
          <div class="overlay-text text-start">
          <p class="h4">Assistant General Pastor</p>
          <p class="h2">Pastor Joseph Emmanuel</p>
          </div>
          </div>
<!-- modal -->
`     <div class="modal modal-lg p-1" id="AGP">
          <div class="modal-dialog modal-dialog-centered p-1">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header border-bottom-0">
                <h4 class="modal-title"></h4>
                <button
                  type="button"
                  class="btn-close "
                  data-bs-dismiss="modal"
                ></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body text-wrap">
                <span class="pb-1"
                  ><img id="avatar" src="avatar.png" alt=""
                /></span>
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
    <div class="container justify-content-center justify-content-around  d-flex flex-row px-3   GPAP mt-0">
      
          <!-- 1 -->
          <div
            type="button"
            class="btn border-0 image-overlay"
            data-bs-toggle="modal"
            data-bs-target="#EDO"
          >
          <img src="./avatar.png" class="px-1" style="width: 27rem; height:40rem;" alt="">
          <div class="overlay-text text-start ms-4">
          <p class="h3">Elder Daniel Oshafi</p>
          </div>
          </div>
<!-- modal -->
`     <div class="modal modal-lg p-1" id="EDO">
          <div class="modal-dialog modal-dialog-centered p-1">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header border-bottom-0">
                <h4 class="modal-title"></h4>
                <button
                  type="button"
                  class="btn-close "
                  data-bs-dismiss="modal"
                ></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body text-wrap">
                <span class="pb-1"
                  ><img id="avatar" src="avatar.png" alt=""
                /></span>
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
          <div
            type="button"
            class="btn border-0 image-overlay"
            data-bs-toggle="modal"
            data-bs-target="#EJA"
          >
          <img src="./avatar.png" class="px-1" style="width: 27rem; height:40rem;" alt="">
          <div class="overlay-text text-start ms-5">
          <p class="h3">Elder Johnson Adewumi</p>
          </div>
          </div>
<!-- modal -->
`     <div class="modal modal-lg p-1" id="EJA">
          <div class="modal-dialog modal-dialog-centered p-1">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header border-bottom-0">
                <h4 class="modal-title"></h4>
                <button
                  type="button"
                  class="btn-close "
                  data-bs-dismiss="modal"
                ></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body text-wrap">
                <span class="pb-1"
                  ><img id="avatar" src="avatar.png" alt=""
                /></span>
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
          <div
            type="button"
            class="btn border-0 image-overlay"
            data-bs-toggle="modal"
            data-bs-target="#EJU"
          >
          <img src="./avatar.png" class="px-1" style="width: 27rem; height:40rem;" alt="">
          <div class="overlay-text text-start ms-4">
          <p class="h3">Elder Joseph Uponi</p>
          </div>
          </div>
<!-- modal -->
`     <div class="modal modal-lg p-1" id="EJU">
          <div class="modal-dialog modal-dialog-centered p-1">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header border-bottom-0">
                <h4 class="modal-title"></h4>
                <button
                  type="button"
                  class="btn-close "
                  data-bs-dismiss="modal"
                ></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body text-wrap">
                <span class="pb-1"
                  ><img id="avatar" src="avatar.png" alt=""
                /></span>
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
</div>
<!-- 3rd row -->
    <div class="justify-content-center   d-flex flex-row px-5 mx-auto mb-5  GPAP mt-5">
      
          <!-- 1 -->
          <div
            type="button"
            class="btn border-0 image-overlay"
            data-bs-toggle="modal"
            data-bs-target="#ESA"
          >
          <img src="./avatar.png" class="px-1 ms-5" style="width: 27rem; height:40rem;" alt="">
          <div class="overlay-text text-start  " style="margin: 0 5rem !important; ">
          <p class="h3">Elder Samuel Agbokeye</p>
          </div>
          </div>
<!-- modal -->
`     <div class="modal modal-lg p-1" id="ESA">
          <div class="modal-dialog modal-dialog-centered p-1">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header border-bottom-0">
                <h4 class="modal-title"></h4>
                <button
                  type="button"
                  class="btn-close "
                  data-bs-dismiss="modal"
                ></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body text-wrap">
                <span class="pb-1"
                  ><img id="avatar" src="avatar.png" alt=""
                /></span>
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
          <div
            type="button"
            class="btn border-0 image-overlay"
            data-bs-toggle="modal"
            data-bs-target="#EYA"
          >
          <img src="./avatar.png" class="px-1 me-5" style="width: 27rem; height:40rem;" alt="">
          <div class="overlay-text" style="margin: 0 -1rem;">
          <p class="h3">Elder Yemi Alao</p>
          </div>
          </div>
<!-- modal -->
`     <div class="modal modal-lg p-1" id="EYA">
          <div class="modal-dialog modal-dialog-centered p-1">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header border-bottom-0">
                <h4 class="modal-title"></h4>
                <button
                  type="button"
                  class="btn-close "
                  data-bs-dismiss="modal"
                ></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body text-wrap">
                <span class="pb-1"
                  ><img id="avatar" src="avatar.png" alt=""
                /></span>
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

      
      <?php include('./reusables/footer.php') ?>


















    <style>
      body{
           font-family: "Josefin Sans", sans-serif ;
           width: 100%;
           /*height: 500px;  Example Height */
           overflow-x: hidden;
    	    }

.image-overlay {
  position: relative;
}

.overlay-text {
  position: absolute;
  top: 90%;
  left: 35%;
  transform: translate(-50%, -50%);
  color: white;
  background: #3d0052;
  white-space: nowrap;
  z-index: 1;
}

.image-overlay::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: transparent;
}

      #EC {
        font-family: "Josefin Sans", sans-serif;
         margin-top: -30rem;
       margin-bottom: 50px;
        margin-top: -10rem;
      }
      .PGA {
        margin-top: -15px;
      }
      .PJE {
        margin-top: -15px;
      }
      .card-body {
        padding-bottom: 20px;
      }
      .gpt {
        padding-bottom: 10px;
        
      }
      .mje{
        padding-bottom: 10px;
      }
      #avatar {
        height: 470px;
        width: 35%;
        float: left;
        margin-right: 1rem;
        margin-left: 1rem;
        padding-bottom: 3rem;
      }     }
      
  
      .modal-title {
        margin-bottom: 1.5rem;
      }

      .modal {
        padding: 7rem;
        border-radius: 0;
      }
      .modal-content {
        border-radius: 0; /* Remove rounded corners */
      }
      .q1 {
        padding-bottom: 25px;
      }
      .q2 {
        padding-bottom: 25px;
      } 
      .q3 {
        padding-bottom: 25px;
      }
      .q4 {
        padding-bottom: 25px;
      }
      .q5 {
        padding-bottom: 23px;
      }
      .q6{
       padding-bottom: 23px;
      }
      /* .q7{
      
      } */
      .q8{
        padding-bottom: 25px;
      }
      .co1{
        display: inline-flex;
      }
      .co2{
        display: inline-flex;
        
      }
      .co3{
        display: inline-flex;
       
      }
      .main{
        background-color: #c17aeb;
        box-shadow: 5 10px 10px 5 rgba(0,0,0,0.16),0
      }
      
      #colorpicker{
        color: #a30cfa;
      }
      .nav {
  width: 100vw;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  /* box-shadow: none; */
  padding: 10px 30px;
  background-color: #3d0052;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  color: white;
}

/* .navbar {
  background-color: rgba(0, 0, 0, 0) !important;
  transition-property: background-color, color;
  transition-duration: 0.5s;
  transition-function: ease-in-out;
} */

/* .navbar-scrolled {
  background-color: #3d0052 !important;
  color: #ffffff !important;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
} */

.nav-tgl {
  display: none;
}
.navbar-brand {
  font-weight: 700;
  font-size: 20px;
  font-family: "Ubuntu", sans-serif;
  display: flex;
  align-items: center;
  color: white;
  gap: 10px;
}

.navbar-brand:hover {
  color: white;
  opacity: 0.9;
}

.nav-list {
  display: flex;
  gap: 4px;
  align-items: center;
  list-style: none;
  margin: 0;
}

.nav-link {
  color: white;
  font-weight: 600;
  font-family: "Montserrat", sans-serif;
  text-decoration: none;
  display: inline-block;
  padding: 15px 0;
  position: relative;
  margin: 0 20px;
  font-size: 15px;
}

.nav-link:hover {
  color: yellow;
}

/* .active {
  color: white;
  border-bottom: 2px solid white;
} */

/* .menu-icon {
  display: none;
} */

.nav-link:after {
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  background: yellow;
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
.nav-link:hover:after {
  width: 100%;
  left: 0;
}

.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-btn {
  display: flex;
  gap: 6px;
  align-items: center;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 300px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  /* margin-top: -10px; */
  border-radius: 8px;
  max-height: 0;
  -webkit-transition: all 0.5s ease-in-out 0s;
  transition: all 0.5s ease-in-out 0s;
  padding: 20px;
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-family: "Ubuntu";
  font-size: 16px;
  font-weight: 500;
  right: 0px;
}
.missions-drop{
  right: 0px;
}
.dropdown-content a:hover {
  background-color: #3d0052;
  color: #fff;
  border-radius: 8px;
}

.dropdown:hover .dropdown-content {
  display: block;
  max-height: 500px;
  opacity: 1;
  z-index: 9999;
}

.dropdown:hover .dropbtn {
  /* background-color: #3e8e41; */
}
.overlay {
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  /* z-index: 200; */
}

.main-header {
  height: 70vh !important;
  background-image: url("../assets/images/heroo.png");
  background-repeat: no-repeat;
  background-size: cover;
}
.hero {
  position: relative;
  z-index: 1000;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.header-description {
  font-size: 22px;
  margin-top: 48px;
  display: flex;
  gap: 22px;
}

.header-text {
  font-size: 100px;
  font-family: "Josefin Sans", sans-serif;
  text-align: center;
}
    /* Footer */
footer {
  background-color: #3d0052 !important;
  /* padding: 50px; */
  display: grid;
  /* grid-template-columns: repeat(4, 1fr); */
  color: white !important;
  gap: 30px;
  font-family: Raleway !important;
}

footer ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

footer i {
  color: #ddd !important;
}

footer h6 {
  color: #fff !important;
  font-family: "Josefin Sans", sans-serif;
}
.footer-logo {
  font-weight: 700;
  font-size: 18px;
  font-family: "Josefin Sans", sans-serif;
  display: flex;
  align-items: center;
  color: white;
  gap: 10px;
}

.footer-logo img {
  margin-left: -20px;
}

.footer-text {
  font-size: 15px;
  margin: 10px 0;
  font-family: "Josefin Sans", sans-serif;
}
.social-links {
  margin: 24px 0;
  font-size: 32px;
  display: flex;
  gap: 21px;
}

.section-header {
  /* font-family: 'Josefin Sans', sans-serif; */
  margin-bottom: 24px;
  color: white;
  font-size: 20px;
  font-weight: 700;
}

.footer-2 ul {
  list-style: none;
  padding: 0;
}

.footer-2 li {
  margin: 16px 0;
  /* font-family: 'Montserrat', sans-serif; */
  font-family: "Josefin Sans", sans-serif;
}

.footer-3 ul {
  list-style: none;
  padding: 0;
}

.footer-3 li {
  margin: 16px 0;
  /* font-family: 'Montserrat', sans-serif; */
  font-family: "Josefin Sans", sans-serif;
}

.footer-4 ul {
  list-style: none;
  padding: 0;
}

.footer-4 li {
  margin: 16px 0;
  font-family: "Josefin Sans", sans-serif;
}

li:hover {
  color: red;
}

.fa-location-dot {
  color: red;
}
.fa-phone {
  color: red;
}
.fa-envelope {
  color: red;
}
a {
  text-decoration: none;
  color: white;
}
a:hover {
  color: white;
}

.no-hover:hover {
  color: white;
}

hr {
  width: 30px;
}
    </style>
  </body>
</html>
