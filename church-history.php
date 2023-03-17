<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

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

<body>
<div>
  <div>
  <div>
  <div>
    <header class="main-header">
      <?php include('./reusables/navbar.php') ?>

 

      <header class="history-header-1">
      <div class="history-overlay"></div>
      <div class="hero">
        <h4 class="history-header-text drop-in">
        How it all began
        </h4>
      </div>
    </header>
  </div>
  </div>
    <div class="container-fluid row  d-flex pb-5">
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
           font-family: "Josefin Sans", sans-serif ;
           width: 100%;
           /*height: 500px;  Example Height */
           overflow-x: hidden;
           
    	            }
        .row{
          margin-top: -10rem;
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
    <?php include('./reusables/footer.php') ?>
</body>
</html>
