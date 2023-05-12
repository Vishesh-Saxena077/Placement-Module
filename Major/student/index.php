<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SYTLE SHEET LINK -->
    <link rel="stylesheet" href="./css/styleStudent.css">
    <link rel="stylesheet" href="./css/ss.css">

    <!-- CDN Library link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- charts CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- JQuery File for NavBar -->
   <script src="./JS/JQFile.js"></script>

    <!-- ICON LIBRARY -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Student | Dashboard</title>
</head>

<body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1">

    <!-- Side Nav Bar -->
    <nav class="sidebar close">
        <!-- NavBar Heading and Logo -->
        <header>
            <div class="img-txt">
                <span class="image">
                    <img src="./images/download.jpg" alt="logo">
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
                <!-- Sreach -->

                <ul class="menu-links">
                    <!-- Dashboard -->
                    <li class="nav-links" id="subEle1" onclick="window.location.replace('/MajorProject/student')">
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
                    <!-- Placement -->
                    <li class="nav-links" id="subEle3">
                        <a href="#">
                            <i class="uil uil-award-alt icon"></i>
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
                    <!-- Fee -->
                    <li class="nav-links" id="subEle5">
                        <a href="#">
                            <i class="uil uil-bill icon"></i>
                            <span class="text nav-text">Fee</span>
                            <div class="submenuindicator">
                                <i class="uil uil-angle-right icon"></i>
                            </div>
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
                        <div class="subdata item1" onclick="window.location.replace('attendance.php');">
                            Profile
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('timetable.php');">
                            Time Table
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('sem_registration.php');">
                            Semester Registration
                        </div>
                    
                        <div class="subdata item1" onclick="window.location.replace('create_resume_form.php');">
                            Create Your Resume
                        </div>
                    </div>
                </div>
                <!-- PLACEMENT -->
                <div class="sub-content-link" id="Placment-side-sub-menu">
                    <i class="uil uil-angle-left-b"></i>
                    <div class="sub-content-link-inner">
                        <div class="subdata item1" onclick="window.location.replace('hierMe.php');">
                            Company
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('companyApplied.php');">
                            Apply Company
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('test1.php');">
                            Training & Test
                        </div>
                    </div>
                </div>
                <!-- FEE -->
                <div class="sub-content-link" id="fee-side-sub-menu">
                    <i class="uil uil-angle-left-b"></i>
                    <div class="sub-content-link-inner">
                        <div class="subdata item1" onclick="window.location.replace('feesubmission.php');">
                            Fee Submission
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('feerecipt.php');">
                            Fee Receipt
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('feetransanctionhistory.php');">
                            Transanction History
                        </div>
                    </div>
                </div>
                <!-- EXAM -->
                <div class="sub-content-link" id="exam-side-sub-menu">
                    <i class="uil uil-angle-left-b"></i>
                    <div class="sub-content-link-inner">
                        <div class="subdata item1" onclick="window.location.replace('studentMTM.php');">
                            Sessional/Mid Term Result
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('StudentResult.php');">
                            Result
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('backpaper.php');">
                            Back Papers
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('admitcard.php');">
                            Admit Card
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!-- Logout Confirmation Dialog Box -->
    <div class="overlay">
        <div class="dialogbase">
            <div class="dialog-box">
                <div class="logout-text">
                    Are You Sure Do You Want To Logout?
                </div>
                <div class="logout-div-btns">
                    <button title="yes" type="button" class="dialog-box-btn" id="logout" name="yes" class="logout">
                    Logout
                </button>
                    <button title="cancel" type="button" class="dialog-box-btn" id="cancel" name="cancel" class="cancel">
                    Cancel
                </button>
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
                        <div class="pannel-heading"> Dashboard </div>
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
                    <h3> Dashboard </h3>
                </div>
            </div>

            <!-- home Page Box-2 -->
            <div class="box-2">
                <div class="box-2_1">
                    <div class="box-2_1_1">
                        <div class="box-cont">
                            <h1>Hi!
                                <!-- user name -->
                                <span>
                                    Vishesh
                                </span>
                            </h1>
                            <button title="button" name="learnmore" type="button" onclick="window.location.replce('training.php')">View More <i class="uil uil-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-3">
                <div class="box-3-innerbase">
                    <div class="box-3-stats-base">
                        <div class="box-3-content">
                            <span>Semester</span>
                            <span>7th</span>
                        </div>
                        <div class="box-3-avtar"><i class="uil uil-graduation-cap"></i></div>
                    </div>
                    <div class="box-3-stats-base">
                        <div class="box-3-content">
                            <span>Placement</span>
                            <span>0</span>
                        </div>
                        <div class="box-3-avtar"><i class="uil uil-award-alt"></i></div>
                    </div>
                    <div class="box-3-stats-base">
                        <div class="box-3-content">
                            <span>Awards</span>
                            <span>4</span>
                        </div>
                        <div class="box-3-avtar"><i class="uil uil-award"></i></div>
                    </div>
                    <div class="box-3-stats-base">
                        <div class="box-3-content">
                            <span>CGPA</span>
                            <span>8.11</span>
                        </div>
                        <div class="box-3-avtar"><i class="uil uil-book-reader"></i></div>
                    </div>
                </div>
            </div>

            <div class="v1_2">
                <div class="v1_3">
                    <div class="v1_4">
                        <div class="v1_5">
                            <div class="v2_6">
                                <span class="v2_8">Notice</span>
                            </div>
                            <div class="display-notice">
                                <div class="display-rows">
                                    <h3 href="#">if any</h3>
                                    <p href="#">Title</p>
                                    <a href="#">if any</a>
                                </div>
                                <div class="display-rows">
                                    <h3 href="#">if any</h3>
                                    <p href="#">Title</p>
                                    <a href="#">if any</a>
                                </div>
                                <div class="display-rows">
                                    <h3 href="#">if any</h3>
                                    <p href="#">Title</p>
                                    <a href="#">if any</a>
                                </div>
                                <div class="display-rows">
                                    <h3 href="#">if any</h3>
                                    <p href="#">Title</p>
                                    <a href="#">if any</a>
                                </div>
                            </div>

                            <button type="button" title="more to know" onclick="window.location.replce('notice.php')">More...</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript file for Theme Changing -->

    <script src="./JS/javascript.js"></script>


</body>

</html>