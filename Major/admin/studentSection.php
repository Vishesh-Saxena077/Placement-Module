<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <link rel="stylesheet" href="./css/student_style.css">
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
    <title>Acadmics | Student</title>

    <script src="./JS/jquery.js"></script>
    <script>
        $(document).ready(function() {

            
            $('#place1').click(function() {
                $(this).hide();
                $('#place2').show();
                
                $('#title1').show();
                $('#title2').hide();
                
                $('#sec1').show();
                $('#sec2').hide();
            });
    
            $('#place2').click(function() {
                $(this).hide();
                $('#place1').show();
                
                $('#title2').show();
                $('#title1').hide();
                
                $('#sec2').show();
                $('#sec1').hide();
            });
        });
    </script>
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
                        <div class="subdata item1" onclick="window.location.replace('studentSection.php')">
                            Student
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('enrollmentform.php');">
                            Enrollment From
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('Genrate_time_table.php');">
                            Genrate time table
                        </div>
                    </div>
                </div>

                <!-- PLACEMENT -->
                <div class="sub-content-link" id="Placement-side-sub-menu">
                    <i class="uil uil-angle-left-b"></i>
                    <div class="sub-content-link-inner">
                        <div class="subdata item1" onclick="window.location.replace('placement.php');">
                            Company
                        </div>
                    </div>
                </div>

                
                <!-- EXAM -->
                <div class="sub-content-link" id="exam-side-sub-menu" >
                    <i class="uil uil-angle-left-b"></i>
                    <div class="sub-content-link-inner">
                        <div class="subdata item1" onclick="window.location.replace('result.php');">
                            Result
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('viewResult.php');">
                            View Result
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
                        <div class="pannel-heading"> Acadmics </div>
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
                    <h3>Acadmics | Student Section</h3>
                </div>
            </div>


            <div class='main'> 

                <!-- home Page Box-2 -->
                <div class="box-2">
                    <div class="box-2_1">
                        <div class="box-content">

                        <div class="box-button">
                            <button id="place1">New Enrollment</button>
                            <button id="place2">View Student</button>
                        </div>
                            
                            <p id="title1">
                                New Enrollments Request
                            </p>
                            <p id="title2">
                                View Student 
                            </p>
                           
                        
                        </div>   
                    </div>
                    <hr>
                </div>
                

                <div class="s1_1" id="sec1">
                    <div class="s1_2">

                    

                        <div class="table_base">
                            <form action="" method="">
                                <table>
                                    <thead>
                                        <tr>
                                            <th> S.No. </th>
                                            <th> Temp ID </th>
                                            <th> Email </th>
                                            <th> Name </th>
                                            <th> Enroment Status </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <div class="data"> 1 </div> </td>
                                            <td> <div class="data"> CMKJFFS </div> </td>
                                            <td> <div class="data"> indfdfdfdfdffo@gmail.com </div> </td>
                                            <td> <div class="data"> Vishesh </div> </td>
                                            <td> <div class="data"> Pending </div> </td>
                                            <td>
                                                <div class="data">    
                                                    <a href="#">
                                                        <input type="button" value="View">
                                                    </a>
                                                    <a href="#">
                                                        <input type="button" value="Approve">
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

                <div class="s1_1" id="sec2">
                    <div class="s1_2">

                        <div class="filters">
                            <div class="inputbase"> 
                                <input type="text" name="sid" placeholder="Student ID"> 
                                <input type="text" name="course" placeholder="course"> 
                                <input type="button" name="sreach" id="sreach" value="Sreach">
                            </div>
                            <hr>
                        </div>

                        <div class="table_base">
                            <form action="" method="">
                                <table>
                                    <thead>
                                        <tr>
                                            <th> S.No. </th>
                                            <th> Student ID </th>
                                            <th> Name </th>
                                            <th> Course </th>
                                            <th> Email </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <div class="data"> 1 </div> </td>
                                            <td> <div class="data"> CMKJFFS </div> </td>
                                            <td> <div class="data"> Infosys </div> </td>
                                            <td> <div class="data"> Software Engieneer </div> </td>
                                            <td> <div class="data"> indfdfdfdfdffo@gmail.com </div> </td>
                                            <td>
                                                <div class="data">    
                                                    <a href="#">
                                                        <input type="button" value="View">
                                                    </a>
                                                    <a href="#">
                                                        <input type="button" value="Edit">
                                                    </a>
                                                    <a href="mailto:">
                                                        <input type="button" value="mail">
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

            
        </div>
    </section>

    <!-- JavaScript file for Theme Changing -->

    <script src="./JS/file1.js"></script>


</body>

</html>