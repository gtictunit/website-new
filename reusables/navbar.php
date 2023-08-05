<nav class="nav navbar navbar-dark navbar-expand-lg sticky-top">

    <div>
      <a href="/" class="navbar-brand">
        <img src="./assets/images/gt_logo.png" alt="Logo" width="50" height="auto" class="d-inline-block align-text-top" alt="" />
        <div>Glory Tabernacle Ministry</div>
      </a>
    </div>
    <!-- <div class="menu-icon">
  <label for="check">
      <input type="checkbox" id="check"/> 
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div> -->
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div onclick="openMenu()" class="menuIcon">
    <input type="checkbox" id="checkbox2" class="checkbox2 visuallyHidden">
        <label for="checkbox2">
            <div class="hamburger hamburger2">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
                <span class="bar bar4"></span>
            </div>
        </label>
        </div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="nav-list">
        <li class="nav-item ">
          <a href="./" class="nav-link active"> Home </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-btn">
            <span>About</span>
            <!-- <i class="fa-solid fa-chevron-down"></i> -->
          </a>
          <div class="dropdown-content">
            <a href="church-history">Church History</a>
            <a href="board-of-trustees">Board of Trustees </a>
            <a href="eldership-council">Eldership </a>


          </div>
          <!-- <li <?php if ($_SERVER['REQUEST_URI'] == '/Website-new/contactus') echo 'class="active"'; ?>> -->
          <!-- <a href="#"><?php echo "link"; ?></a>
      </li> -->
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-btn">
            <span>Resources</span>
            <!-- <i class="fa-solid fa-chevron-down"></i> -->
          </a>
          <div class="dropdown-content">
            <a href="sermon-month">Sermon of the Month</a>
            <a href="pastor-desk">Pastor's Desk</a>
            <a href="#">Live Stream </a>
            <a href="#">Audio Messages </a>
            <a href="#">Online Radio<a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-btn">Programmes</a>
          <div class="dropdown-content">
            <a href="weekly-programmes">Weekly Programmes</a>
            <a href="calender">Church Calendar</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-btn">
            <span>Missions</span>
          </a>
          <div class="dropdown-content missions-drop ">
            <a href="missionbegins">The Beginning of Mission Support</a>
            <a href="partialmissions">Partial Missionary Sponsorship Program (PMSP)</a>
            <a href="specialmission">Special Missionary Sponsorship Program (SMSP)</a>
            <a href="missionteam">Mission Teams</a>
          </div>
        </li>

        <li class="nav-item ">
          <a href="contactus" class="nav-link">Contact us</a>
        </li>
      </ul>
    </div>


</nav>
<div class="mobile-nav">
<ul class="">
        <li class="nav-item ">
          <a href="./" class="nav-link active"> Home </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-btn">
            <span>About</span>
            <!-- <i class="fa-solid fa-chevron-down"></i> -->
          </a>
          <div class="dropdown-content">
            <a href="church-history">Church History</a>
            <a href="board-of-trustees">Board of Trustees </a>
            <a href="eldership-council">Eldership </a>


          </div>
        </li>
          <!-- <li <?php if ($_SERVER['REQUEST_URI'] == '/Website-new/contactus') echo 'class="active"'; ?>> -->
          <!-- <a href="#"><?php echo "link"; ?></a>
      </li> -->
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-btn">
            <span>Resources</span>
          </a>
          <div class="dropdown-content">
            <a href="sermon-month">Sermon of the Month</a>
            <a href="pastor-desk">Pastor's Desk</a>
            <a href="#">Live Stream </a>
            <a href="#">Audio Messages </a>
            <a href="#">Online Radio</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-btn">Programmes</a>
          <div class="dropdown-content">
            <a href="weekly-programmes">Weekly Programmes</a>
            <a href="calender">Church Calendar</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-btn">
            <span>Missions</span>
          </a>
          <div class="dropdown-content missions-drop ">
            <a href="missionbegins">The Beginning of Mission Support</a>
            <a href="partialmissions">Partial Missionary Sponsorship Program (PMSP)</a>
            <a href="specialmission">Special Missionary Sponsorship Program (SMSP)</a>
            <a href="missionteam">Mission Teams</a>
          </div>
        </li>

        <li class="nav-item ">
          <a href="contactus" class="nav-link">Contact us</a>
        </li>
      </ul>
      <div class="yellow-line"></div>
      <div style="margin:15px 25px;" class="text-white">
      <a href="https://www.facebook.com/GTMinistryIb/" target="_blank" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.twitter.com/GTMinistryIb/" target="_blank" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.youtube.com/GTMinistryIb/" target="_blank" class="me-4 text-reset">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="https://www.instagram.com/GTMinistryIb/" target="_blank" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
</div>

<script>

  function openMenu() {
    var mobileMenu = document.querySelector(".mobile-nav");

    console.log(mobileMenu.style)

    if(mobileMenu.style.transform=="translateY(-120%)") {
      mobileMenu.style.transform="translateY(0)";
      console.log(1)
    } else if (mobileMenu.style.transform=="translateY(0)") {
      mobileMenu.style.transform="translateY(-120%)";
      console.log(2)
    } else {
      console.log("Okay")
    }

    // mobileMenu.style.transform="translateY(0)";

  }
</script>