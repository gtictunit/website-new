<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Local css
    <link rel="stylesheet" href="./css/mainStyles.css" />
    <link rel="stylesheet" href="./css/mainStyles.responsive.css" />
    <link rel="stylesheet" href="./css/drop-in.animation.css" />
    <link rel="stylesheet" href="./css/drop-down.animation.css" />
    <link rel="stylesheet" href="./css/ripple.css" /> -->

    <!-- Carousel -->
    <!-- <link rel="stylesheet" type="text/css" href="./vendor/carousel/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="./vendor/carousel/css/style1.css" />
  <script type="text/javascript" src="./vendor/carousel/js/modernizr.custom.86080.js"></script> -->

    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />

    <!-- Animate.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- SwiperJs -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <link
      rel="shortcut icon"
      href="./assets/images/gt_logo.png"
      type="image/x-icon" />

    <title>Glory Tabernacle Ministry Ibadan</title>
  </head>
  <div>
    <header class="main-header">
      <?php include('./reusables/navbar.php') ?>

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
  </div>

  <body>
    <!-- General pastor+ 
         Assistant pastor+
       5 Elder Joseph Uponi +
       4 Elder Johnson Adewumi +
       3 Elder Daniel Oshafi +
       6 Elder Samuel Agbokeye +
       8 Elder Yemi Alao +
       1 Elder Adebayo Oke +
       7 Elder Tokunbo Bamgbose +
       2 Elder Adeolu Adedapo+
    -->
    <div class="container">
      <h1 class="display-3 pt-5 text-center" id="EC">Eldership Council</h1>
    </div>

    <div class="container justify-content-center d-flex GPAP">
      <div class="row">
        <div class="col-md-6">
          <!--  General pastor -->

          <button
            type="button"
            class="btn border-0"
            data-bs-toggle="modal"
            data-bs-target="#GPM"
          >
            <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
              <div class="border border-5 m-3 img-thumbnail">
                <img
                  src="avatar.png"
                  class="card-img-top rounded-circle"
                  alt=""
                />
              </div>
              <div class="card-body ">
                <h4 class="card-title fs-5 PGA">Gabriel Akinbola</h4>
                <p class="card-text gpt">General Pastor</p>
              </div>
            </div>
          </button>

<div class="modal modal-lg p-1" id="GPM">
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
        </div>

        <div class="col-md-6">
          <button
            type="button"
            class="btn border-0"
            data-bs-toggle="modal"
            data-bs-target="#APM"
          >
            <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
              <div class="border border-5 m-3 img-thumbnail">
                <img
                  src="avatar.png"
                  class="card-img-top rounded-circle"
                  alt=""
                />
              </div>
              <div class="card-body">
                <h4 class="card-title fs-5 PJE">Joseph Emmanuel</h4>
                <p class="card-text mje">Assistant Pastor</p>
              </div>
            </div>
          </button>
          <div class="modal modal-lg p-1" id="APM">
            <div class="modal-dialog modal-dialog-centered p-1">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                  <h4 class="modal-title"></h4>
                  <button
                    type="button"
                    class="btn-close"
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
    </div></div>

    <div class="container-fluid justify-content-center d-flex">
    <!-- Elders -->

    <div class="row">
        <div class="col-sm-2">
            <button
            type="button"
            class="btn border-0 "
            data-bs-toggle="modal"
            data-bs-target="#AO"
          >
            <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
              <div class="border border-5 m-3 img-thumbnail">
                <img
                  src="avatar.png"
                  class="card-img-top rounded-circle"
                  alt=""
                />
              </div>
              <div class="card-body">
                <h4 class="card-title fs-5 ">Adebayo Oke</h4>
                <p class="card-text q1">Elder</p>
              </div>
            </div>
          </button>
          <div class="modal modal-lg p-1" id="AO">
            <div class="modal-dialog modal-dialog-centered p-1">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                  <h4 class="modal-title"></h4>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                  ></button>
                </div>
  
                <!-- Modal body -->
                <div class="modal-body text-wrap">
                  <span class="pb-1"
                    ><img id="avatar" src="avatar.png" alt=""
                  /></span>
                  <h4 class="modal-title">Elder Adebayo Oke</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.Dignissimos illum cum possimus natus sit deserunt, on
                    ipsa dolorum numquam iste id in voluptate nobis doloremque
                    distinctio nemo quod nihil tempora.
                  </p>
                </div>
              </div>
            </div>  </div>  </div>
        </div>


        <div class="col-sm-2">

            <button
            type="button"
            class="btn border-0 "
            data-bs-toggle="modal"
            data-bs-target="#AA"
          >
            <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
              <div class="border border-5 m-3 img-thumbnail">
                <img
                  src="avatar.png"
                  class="card-img-top rounded-circle"
                  alt=""
                />
              </div>
              <div class="card-body">
                <h4 class="card-title fs-5 ">Adeolu Adedapo</h4>
                <p class="card-text q2">Elder</p>
              </div>
            </div>
          </button>
          <div class="modal modal-lg p-1" id="AA">
            <div class="modal-dialog modal-dialog-centered p-1">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                  <h4 class="modal-title"></h4>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                  ></button>
                </div>
  
                <!-- Modal body -->
                <div class="modal-body text-wrap">
                  <span class="pb-1"
                    ><img id="avatar" src="avatar.png" alt=""
                  /></span>
                  <h4 class="modal-title">Elder Adeolu Adedapo</h4>
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


        <div class="col-sm-2">
            <button
            type="button"
            class="btn border-0  "
            data-bs-toggle="modal"
            data-bs-target="#DO"
          >
            <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
              <div class="border border-5 m-3 img-thumbnail">
                <img
                  src="avatar.png"
                  class="card-img-top rounded-circle"
                  alt=""
                />
              </div>
              <div class="card-body">
                <h4 class="card-title fs-5  ">Daniel Oshafi</h4>
                <p class="card-text q3">Elder</p>
              </div>
            </div>
          </button>
          <div class="modal modal-lg p-1" id="DO">
            <div class="modal-dialog modal-dialog-centered p-1">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                  <h4 class="modal-title"></h4>
                  <button
                    type="button"
                    class="btn-close"
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
    </div>

        <div class="col-sm-2">

            <button
            type="button"
            class="btn border-0"
            data-bs-toggle="modal"
            data-bs-target="#JA"
          >
            <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
              <div class="border border-5 m-3 img-thumbnail">
                <img
                  src="avatar.png"
                  class="card-img-top rounded-circle"
                  alt=""
                />
              </div>
              <div class="card-body">
                <h4 class="card-title fs-5 ">Johnson Adewumi</h4>
                <p class="card-text q4">Elder</p>
              </div>
            </div>
          </button>
          <div class="modal modal-lg p-1" id="JA">
            <div class="modal-dialog modal-dialog-centered p-1">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                  <h4 class="modal-title"></h4>
                  <button
                    type="button"
                    class="btn-close"
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
            </div></div>

        </div>


        <div class="col-sm-2">
            <button
            type="button"
            class="btn border-0 "
            data-bs-toggle="modal"
            data-bs-target="#JU"
          >
            <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
              <div class="border border-5 m-3 img-thumbnail">
                <img
                  src="avatar.png"
                  class="card-img-top rounded-circle"
                  alt=""
                />
              </div>
              <div class="card-body">
                <h4 class="card-title fs-5  ">Joseph Uponi</h4>
                <p class="card-text q5">Elder</p>
              </div>
            </div>
          </button>
          <div class="modal modal-lg p-1" id="JU">
            <div class="modal-dialog modal-dialog-centered p-1">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                  <h4 class="modal-title"></h4>
                  <button
                    type="button"
                    class="btn-close"
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
    </div>
  </div>
        <br><br>
        <div class="container-fluid justify-content-center d-flex">

        
        <div class="row">
            <div class="col-sm-4 co1" >

                <button
            type="button"
            class="btn border-0 "
            data-bs-toggle="modal"
            data-bs-target="#SA"
          >
            <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
              <div class="border border-5 m-3 img-thumbnail">
                <img
                  src="avatar.png"
                  class="card-img-top rounded-circle"
                  alt=""
                />
              </div>
              <div class="card-body">
                <h4 class="card-title fs-5  ">Samuel Agbokeye</h4>
                <p class="card-text q6">Elder</p>
              </div>
            </div>
          </button>
          <div class="modal modal-lg p-1" id="SA">
            <div class="modal-dialog modal-dialog-centered p-1">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                  <h4 class="modal-title"></h4>
                  <button
                    type="button"
                    class="btn-close"
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

            </div></div></div>

            <div class="col-sm-4 co2">
                <button 
            type="button"
            class="btn border-0 "
            data-bs-toggle="modal"
            data-bs-target="#TB"
          >
            <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
              <div class="border border-5 m-3 img-thumbnail">
                <img
                  src="avatar.png"
                  class="card-img-top rounded-circle"
                  alt=""
                />
              </div>
              <div class="card-body">
                <h4 class="card-title fs-5  ">Tokunbo Bamgbose</h4>
                <p class="card-text q7">Elder</p>
              </div>
            </div>
          </button>
          <div class="modal modal-lg p-1" id="TB">
            <div class="modal-dialog modal-dialog-centered p-1">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header border-bottom-0">
                  <h4 class="modal-title"></h4>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                  ></button>
                </div>
  
                <!-- Modal body -->
                <div class="modal-body text-wrap">
                  <span class="pb-1"
                    ><img id="avatar" src="avatar.png" alt=""
                  /></span>
                  <h4 class="modal-title">Elder Tokunbo Bamgbose</h4>
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
            <div class="col-sm-4 co3">

                <button
                type="button"
                class="btn border-0 "
                data-bs-toggle="modal"
                data-bs-target="#YA"
              >
                <div class="card main pt-4 border-0  rounded-0" style="width: 200px">
                  <div class="border border-5 m-3 img-thumbnail">
                    <img
                      src="avatar.png"
                      class="card-img-top rounded-circle"
                      alt=""
                    />
                  </div>
                  <div class="card-body">
                    <h4 class="card-title fs-5  ">Yemi Alao</h4>
                    <p class="card-text q8">Elder</p>
                  </div>
                </div>
              </button>
              <div class="modal modal-lg p-1" id="YA">
                <div class="modal-dialog modal-dialog-centered p-1">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header border-bottom-0">
                      <h4 class="modal-title"></h4>
                      <button
                        type="button"
                        class="btn-close"
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

       </div>
      </div>
    


















    <style>
      #EC {
        font-family: "Josefin Sans", sans-serif;
      }
      .GPAP{
        margin-bottom: 50px;
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
      }
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
  height: 100vh !important;
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
    </style>
    </style>
  </body>
</html>
