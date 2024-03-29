<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/generate.css">
    <link rel="stylesheet" href="./css/main.css">
    <!-- CDN Library link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- charts CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- ICON LIBRARY -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- angular Js Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- JQuery File for NavBar -->
    <script src="./JS/jquery.js"></script>
    <title>Dashboard</title>
  </head>
  <body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1">
    <!-- Side Nav Bar -->
    <nav class="sidebar close">
      <!-- NavBar Heading and Logo -->
      <header>
        <div class="img-txt">
          <span class="image">
            <img src="../images/download.jpg" alt="logo">
          </span>
          <div class="text header-text">
            <span class="name">Graphic Era University</span>
          </div>
        </div>
        <i class="uil uil-angle-right-b toggle" id="side-toggle-btn"></i>
      </header>
      <!-- Side Nav Bar list Content -->
      <div class="menu-bar">
        <div class="menu">
          <ul class="menu-links">
            <!-- Dashboard -->
            <li class="nav-links" id="subEle1" onclick="window.location.replace('/MajorProject/admin');">
              <a href="#">
                <i class="uil uil-estate icon"></i>
                <span class="text nav-text">Dashboard</span>
              </a>
            </li>
            <!-- Academic -->
            <li class="nav-links" id="subEle2">
              <a href="#" id="subEle2a">
                <i class="uil uil-brain icon"></i>
                <span class="text nav-text">Academic</span>
                <div class="submenuindicator">
                  <i class="uil uil-angle-right icon"></i>
                </div>
              </a>
            </li>
            <!-- Exam -->
            <li class="nav-links" id="subEle3">
              <a href="#">
                <i class="uil uil-book-open icon"></i>
                <span class="text nav-text">Placement</span>
                <div class="submenuindicator">
                  <i class="uil uil-angle-right icon"></i>
                </div>
              </a>
            </li>
            <!-- Notice -->
            <li class="nav-links" id="subEle4" onclick="window.location.replace('notice.php');">
              <a href="#">
                <i class="uil uil-bell icon"></i>
                <span class="text nav-text">Notice</span>
              </a>
            </li>
            <!-- Exam -->
            <li class="nav-links" id="subEle6">
              <a href="#">
                <i class="uil uil-book-open icon"></i>
                <span class="text nav-text">Exam</span>
                <div class="submenuindicator">
                  <i class="uil uil-angle-right icon"></i>
                </div>
              </a>
            </li>
            <!-- Staff -->
            <li class="nav-links" id="subEle7" onclick="window.location.replace('staffFaculty.php');">
              <a href="#">
                <i class="uil uil-book-alt icon"></i>
                <span class="text nav-text">Staff/Faculty</span>
              </a>
            </li>
            <!-- Theme -->
            <li class="nav-links" id="subEle9">
              <a href="#">
                <i class="uil uil-swatchbook icon"></i>
                <span class="text nav-text">Theme</span>
              </a>
            </li>
            <li class="nav-links clrpicker" id="clrpicker">
              <form class="color-picker" action="#">
                <fieldset>
                  <legend class="visually-hidden"> Theme </legend>
                  <label for="light" class="visually-hidden"> Light </label>
                  <input title="light" type="radio" name="theme" id="light" checked>
                  <label for="dark" class="visually-hidden"> Dark </label>
                  <input title="dark" type="radio" name="theme" id="dark">
                </fieldset>
              </form>
            </li>
          </ul>
          <!-- ACADMICS -->
          <div class="sub-content-link" id="Acadmic-side-sub-menu">
            <i class="uil uil-angle-left-b"></i>
            <div class="sub-content-link-inner">
              <div class="subdata item1" onclick="window.location.replace('studentSection.php')"> Student </div>
              <div class="subdata item1" onclick="window.location.replace('enrollmentform.php');"> Enrollment From </div>
              <div class="subdata item1" onclick="window.location.replace('Genrate_time_table.php');"> Genrate time table </div>
            </div>
          </div>
          <!-- PLACEMENT -->
          <div class="sub-content-link" id="Placement-side-sub-menu">
            <i class="uil uil-angle-left-b"></i>
            <div class="sub-content-link-inner">
              <div class="subdata item1" onclick="window.location.replace('placement.php');"> Company </div>
            </div>
          </div>
          <!-- EXAM -->
          <div class="sub-content-link" id="exam-side-sub-menu">
            <i class="uil uil-angle-left-b"></i>
            <div class="sub-content-link-inner">
              <div class="subdata item1" onclick="window.location.replace('result.php');"> Result </div>
              <div class="subdata item1" onclick="window.location.replace('viewResult.php');"> View Result </div>
              <div class="subdata item1" onclick="window.location.replace('admitcard.php');"> Admit Card </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Logout Confirmation Dialog Box -->
    <div class="overlay">
      <div class="dialogbase">
        <div class="dialog-box">
          <div class="logout-text"> Are You Sure Do You Want To Logout? </div>
          <div class="logout-div-btns">
            <button title="yes" type="button" class="dialog-box-btn" id="logout" name="yes" class="logout"> Logout </button>
            <button title="cancel" type="button" class="dialog-box-btn" id="cancel" name="cancel" class="cancel"> Cancel </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Dashboard Content Box -->
    <section class="homePage">
      <div class="homePage-base">
        <!-- home Page Header -->
        <div class="head">
          <div class="head-1">
            <div class="head-text">
              <div class="pannel-heading"> Dashboard</div>
            </div>
            <div class="Profile">
              <div class="pro-1">
                <div class="pro-img" title="User Profile" onclick="window.location.replace('profile.php');">
                  <img src="./images/male.jpg" alt="NA" height="100%" width="100%">
                </div>
                <div class="pro-name">
                  <i class="uil uil-setting" title="Settings"></i>
                  <i class="uil uil-signout icon" title="Logout" id="logoutoption"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- bread crums -->
        <div class="ss-head">
          <div class="ss-inner-base">
            <h3>Dashboard</h3>
          </div>
        </div>
        <div class='main'>
          <!-- home Page Box-2 -->
          <div class="box-2">
            <div class="box-2_1">
              <div class="box-content">
                <p> Genrate Time Table </p>
              </div>
            </div>
          </div>
          <div class="s1_1" id="sec1">
            <div class="s1_2">
              <div class="table_base">
                <div class="newNoticeBase">
                  <form action="" method="">
                    <div class="form-header">
                      <div class="form-title"> Genrate time table </div>
                    </div>
                    <div class="form-body">
                      <label for="sem">Select Semester</label>
                      <select id="sem" name="sem" required>
                        <option value="">Select Semester</option>
                        <option value="s1">1</option>
                        <option value="s2">2</option>
                        <option value="s3">3</option>
                        <option value="s4">4</option>
                        <option value="s5">5</option>
                        <option value="s6">6</option>
                        <option value="s7">7</option>
                        <option value="s8">8</option>
                      </select>
                      <h1>Monday</h1>
                      <input type="text" name="day" id="day" value="Monday" placeholder="Monday" required readonly>
                      <label for="m1">8:00am - 9:00am:</label>
                      <input type="text" id="m1" name="m1" required>
                      <label for="m2">9:00am - 10:00am:</label>
                      <input type="text" id="m2" name="m2" required>
                      <label for="m3">10:00am - 11:00am:</label>
                      <input type="text" id="m3" name="m3">
                      <label for="m4">11:00am - 12:00pm:</label>
                      <input type="text" id="m4" name="m4">
                      <label for="m5">12:00pm - 2:00pm:</label>
                      <input type="text" id="m5" name="m5">
                      <label for="m6">2:00pm - 3:00pm:</label>
                      <input type="text" id="m6" name="m6">
                      <label for="m7">3:00pm - 4:00pm:</label>
                      <input type="text" id="m7" name="m7">
                      <label for="m8">4:00pm - 5:00pm:</label>
                      <input type="text" id="m8" name="m8">
                      <h1>Tuesday</h1>
                      <input type="text" name="day" id="day" value="Tuesday" placeholder="Tuesday" required readonly>
                      <label for="t1">8:00am - 9:00am:</label>
                      <input type="text" id="t1" name="t1">
                      <label for="t2">9:00am - 10:00am:</label>
                      <input type="text" id="t2" name="t2">
                      <label for="t3">10:00am - 11:00am:</label>
                      <input type="text" id="t3" name="t3">
                      <label for="t4">11:00am - 12:00pm:</label>
                      <input type="text" id="t4" name="t4">
                      <label for="t5">12:00pm - 2:00pm:</label>
                      <input type="text" id="t5" name="t5">
                      <label for="t6">2:00pm - 3:00pm:</label>
                      <input type="text" id="t6" name="t6">
                      <label for="t7">3:00pm - 4:00pm:</label>
                      <input type="text" id="t7" name="t7">
                      <label for="t8">4:00pm - 5:00pm:</label>
                      <input type="text" id="t8" name="t8">
                      <h1>Wednesday</h1>
                      <input type="text" name="day" id="day" value="Wednesday" placeholder="Wednesday" required readonly>
                      <label for="w1">8:00am - 9:00am:</label>
                      <input type="text" id="w1" name="w1">
                      <label for="w2">9:00am - 10:00am:</label>
                      <input type="text" id="w2" name="w2">
                      <label for="w3">10:00am - 11:00am:</label>
                      <input type="text" id="w3" name="w3">
                      <label for="w4">11:00am - 12:00pm:</label>
                      <input type="text" id="w4" name="w4">
                      <label for="w5">12:00pm - 2:00pm:</label>
                      <input type="text" id="w5" name="w5">
                      <label for="w6">2:00pm - 3:00pm:</label>
                      <input type="text" id="w6" name="w6">
                      <label for="w7">3:00pm - 4:00pm:</label>
                      <input type="text" id="w7" name="w7">
                      <label for="w8">4:00pm - 5:00pm:</label>
                      <input type="text" id="w8" name="w8">
                      <h1>Thursday</h1>
                      <input type="text" name="day" id="day" value="Thursday" placeholder="Thursday" required readonly>
                      <label for="th1">8:00am - 9:00am:</label>
                      <input type="text" id="th1" name="th1">
                      <label for="th2">9:00am - 10:00am:</label>
                      <input type="text" id="th2" name="th2">
                      <label for="th3">10:00am - 11:00am:</label>
                      <input type="text" id="th3" name="th3">
                      <label for="th4">11:00am - 12:00pm:</label>
                      <input type="text" id="th4" name="th4">
                      <label for="th5">12:00pm - 2:00pm:</label>
                      <input type="text" id="th5" name="th5">
                      <label for="th6">2:00pm - 3:00pm:</label>
                      <input type="text" id="th6" name="th6">
                      <label for="th7">3:00pm - 4:00pm:</label>
                      <input type="text" id="th7" name="th7">
                      <label for="th8">4:00pm - 5:00pm:</label>
                      <input type="text" id="th8" name="th8">
                      <h1>Friday</h1>
                      <input type="text" name="day" id="day" value="Friday" placeholder="Friday" required readonly>
                      <label for="f1">8:00am - 9:00am:</label>
                      <input type="text" id="f1" name="f1">
                      <label for="f2">9:00am - 10:00am:</label>
                      <input type="text" id="f2" name="f2">
                      <label for="f3">10:00am - 11:00am:</label>
                      <input type="text" id="f3" name="f3">
                      <label for="f4">11:00am - 12:00pm:</label>
                      <input type="text" id="f4" name="f4">
                      <label for="f5">12:00pm - 2:00pm:</label>
                      <input type="text" id="f5" name="f5">
                      <label for="f6">2:00pm - 3:00pm:</label>
                      <input type="text" id="f6" name="f6">
                      <label for="f7">3:00pm - 4:00pm:</label>
                      <input type="text" id="f7" name="f7">
                      <label for="f8">4:00pm - 5:00pm:</label>
                      <input type="text" id="f8" name="f8">
                    </div>
                    <div class="form-footer">
                      <input type="button" name="Genrate" value="Genrate">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- JavaScript file for Theme Changing -->
    <script src="./JS/file1.js"></script>
  </body>
</html>