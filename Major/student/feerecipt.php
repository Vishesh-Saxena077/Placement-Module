<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SYTLE SHEET LINK -->
    <link rel="stylesheet" href="./css/styleStudent.css">
    <link rel="stylesheet" href="./css/studentNotice.css">

    <!-- CDN Library link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- charts CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- JQuery File for NavBar -->
    <script src="./JS/JQFile.js"></script>

    <!-- ICON LIBRARY -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- angular Js Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <title>Student | Fee | Fee RECIPT</title>
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
                        <div class="subdata item1" onclick="window.location.replace('training.php');">
                            Training
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
                        <div class="pannel-heading"> Fee Recipt </div>
                    </div>
                    <div class="Profile">
                        <div class="pro-1">
                            <div class="pro-img" title="User Profile">
                                <img src="../images/male.jpg" alt="NA" height="100%" width="100%">
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
                    <h3>Fee Recipt</h3>
                </div>
            </div>


             <div class='main'> 

               

                <div class="s1_1" id="sec2">
                    <div class="s1_2">


                     <!-- home Page Box-2 -->
                <div class="box-2">
                    <div class="box-2_1">
                        <div class="box-content">
                            <p>
                                Fee Submission Details
                            </p>
                        </div>   
                    </div>
                    <hr>
                </div>
                
                        <div class="table_base">
                            <form action="" method="">
                                <table>
                                    <thead>
                                        <tr>
                                            <th> S.No. </th>
                                            <th> Recipt No. </th>
                                            <th> Recipt Date </th>
                                            <th> Remark </th>
                                            <th> Amount </th>
                                            <th> View </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <div class="data">  1 </div> </td>
                                            <td> <div class="data"> 122209889 </div> </td>
                                            <td> <div class="data"> date </div> </td>
                                            <td> <div class="data" style="text-align: left;">SUPPLEMENTARY EXAM (III,V, VII )SEMESTER</div> </td>
                                            <td> <div class="data" style="text-align: left;">1000</div> </td>
                                            <td>
                                                <div class="data">    
                                                    <a href="#">
                                                        <input type="button" name="deletenotice" value="View">
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>

                    </div>
                </div>


        </div>
    </section>

    <!-- JavaScript file for Theme Changing -->

    <script src="./JS/javascript.js"></script>



</body>

</html>