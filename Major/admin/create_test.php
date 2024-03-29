<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/noticeStyle.css">
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
                        <div class="subdata item1" onclick="window.location.replace('create_test.php');">
                            Create Test
                        </div>
                    </div>
                </div>


                <!-- EXAM -->
                <div class="sub-content-link" id="exam-side-sub-menu">
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
                        <div class="pannel-heading"> Placement </div>
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
                    <h3>Placement</h3>
                </div>
            </div>


            <div class='main'>



                <div class="s1_1" id="sec1">
                    <div class="s1_2">
                        <div class="table_base">
                            <div class="newNoticeBase">

                                <form action="" method="">

                                    <div class="form-header">
                                        <div class="form-title">
                                            Create Test
                                        </div>
                                    </div>

                                    <div class="form-body">
                                        <!-- <form action="" method="get" accept-charset="utf-8"> -->

                                        <!--Test ID & Password-->
                                        <input type="text" name="TestID" id="TestID" value="" placeholder="Test ID"/>
                                        <input type="text" name="ExamPassword" id="ExamPassword" value="" placeholder="Test Password" />
                                        <br>
                                        <!--QUESTION 1-->
                                        <input type="text" name="ques1" id="ques1" value="" placeholder="Question 1" />
                                        <input type="text" name="q1o1" id="q1o1" placeholder="Option 1" />
                                        <input type="text" name="q1o2" id="q1o2" placeholder="Option 2" />
                                        <input type="text" name="q1o3" id="q1o3" placeholder="Option 3" />
                                        <input type="text" name="q1o4" id="q1o4" placeholder="Option 4" />
                                        <input type="text" name="q1cans" id="q1cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 2-->
                                        <input type="text" name="ques2" id="ques2" value="" placeholder="Question 2" />
                                        <input type="text" name="q2o1" id="q2o1" placeholder="Option 1" />
                                        <input type="text" name="q2o2" id="q2o2" placeholder="Option 2" />
                                        <input type="text" name="q2o3" id="q2o3" placeholder="Option 3" />
                                        <input type="text" name="q2o4" id="q2o4" placeholder="Option 4" />
                                        <input type="text" name="q2cans" id="q2cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 3-->
                                        <input type="text" name="ques3" id="ques3" value="" placeholder="Question 3" />
                                        <input type="text" name="q3o1" id="q3o1" placeholder="Option 1" />
                                        <input type="text" name="q3o2" id="q3o2" placeholder="Option 2" />
                                        <input type="text" name="q31o3" id="q3o3" placeholder="Option 3" />
                                        <input type="text" name="q3o4" id="q3o4" placeholder="Option 4" />
                                        <input type="text" name="q3cans" id="q3cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 4-->
                                        <input type="text" name="ques4" id="ques4" value="" placeholder="Question 4" />
                                        <input type="text" name="q4o1" id="q4o1" placeholder="Option 1" />
                                        <input type="text" name="q4o2" id="q4o2" placeholder="Option 2" />
                                        <input type="text" name="q4o3" id="q4o3" placeholder="Option 3" />
                                        <input type="text" name="q4o4" id="q4o4" placeholder="Option 4" />
                                        <input type="text" name="q4cans" id="q4cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 5-->
                                        <input type="text" name="ques5" id="ques5" value="" placeholder="Question 5" />
                                        <input type="text" name="q5o1" id="q5o1" placeholder="Option 1" />
                                        <input type="text" name="q5o2" id="q5o2" placeholder="Option 2" />
                                        <input type="text" name="q5o3" id="q5o3" placeholder="Option 3" />
                                        <input type="text" name="q5o4" id="q5o4" placeholder="Option 4" />
                                        <input type="text" name="q5cans" id="q5cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 5-->
                                        <input type="text" name="ques6" id="ques6" value="" placeholder="Question 6" />
                                        <input type="text" name="q6o1" id="q6o1" placeholder="Option 1" />
                                        <input type="text" name="q6o2" id="q6o2" placeholder="Option 2" />
                                        <input type="text" name="q6o3" id="q6o3" placeholder="Option 3" />
                                        <input type="text" name="q6o4" id="q6o4" placeholder="Option 4" />
                                        <input type="text" name="q6cans" id="q6cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 7-->
                                        <input type="text" name="ques7" id="ques7" value="" placeholder="Question 7" />
                                        <input type="text" name="q7o1" id="q7o1" placeholder="Option 1" />
                                        <input type="text" name="q7o2" id="q7o2" placeholder="Option 2" />
                                        <input type="text" name="q7o3" id="q7o3" placeholder="Option 3" />
                                        <input type="text" name="q7o4" id="q7o4" placeholder="Option 4" />
                                        <input type="text" name="q7cans" id="q7cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 8-->
                                        <input type="text" name="ques8" id="ques8" value="" placeholder="Question 8" />
                                        <input type="text" name="q8o1" id="q8o1" placeholder="Option 1" />
                                        <input type="text" name="q8o2" id="q8o2" placeholder="Option 2" />
                                        <input type="text" name="q8o3" id="q8o3" placeholder="Option 3" />
                                        <input type="text" name="q8o4" id="q8o4" placeholder="Option 4" />
                                        <input type="text" name="q8cans" id="q8cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 9-->
                                        <input type="text" name="ques9" id="ques9" value="" placeholder="Question 9" />
                                        <input type="text" name="q9o1" id="q9o1" placeholder="Option 1" />
                                        <input type="text" name="q9o2" id="q9o2" placeholder="Option 2" />
                                        <input type="text" name="q9o3" id="q9o3" placeholder="Option 3" />
                                        <input type="text" name="q9o4" id="q9o4" placeholder="Option 4" />
                                        <input type="text" name="q9cans" id="q9cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 10-->
                                        <input type="text" name="ques10" id="ques10" value="" placeholder="Question 10" />
                                        <input type="text" name="q10o1" id="q10o1" placeholder="Option 1" />
                                        <input type="text" name="q10o2" id="q10o2" placeholder="Option 2" />
                                        <input type="text" name="q10o3" id="q10o3" placeholder="Option 3" />
                                        <input type="text" name="q10o4" id="q10o4" placeholder="Option 4" />
                                        <input type="text" name="q10cans" id="q10cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 11-->
                                        <input type="text" name="ques11" id="ques1" value="" placeholder="Question 11" />
                                        <input type="text" name="q11o1" id="q11o1" placeholder="Option 1" />
                                        <input type="text" name="q11o2" id="q11o2" placeholder="Option 2" />
                                        <input type="text" name="q11o3" id="q11o3" placeholder="Option 3" />
                                        <input type="text" name="q11o4" id="q11o4" placeholder="Option 4" />
                                        <input type="text" name="q11cans" id="q11cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 12-->
                                        <input type="text" name="ques12" id="ques12" value="" placeholder="Question 12" />
                                        <input type="text" name="q12o1" id="q12o1" placeholder="Option 1" />
                                        <input type="text" name="q12o2" id="q12o2" placeholder="Option 2" />
                                        <input type="text" name="q12o3" id="q12o3" placeholder="Option 3" />
                                        <input type="text" name="q12o4" id="q12o4" placeholder="Option 4" />
                                        <input type="text" name="q12cans" id="q12cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 13-->
                                        <input type="text" name="ques13" id="ques13" value="" placeholder="Question 13" />
                                        <input type="text" name="q13o1" id="q13o1" placeholder="Option 1" />
                                        <input type="text" name="q13o2" id="q13o2" placeholder="Option 2" />
                                        <input type="text" name="q131o3" id="q13o3" placeholder="Option 3" />
                                        <input type="text" name="q13o4" id="q13o4" placeholder="Option 4" />
                                        <input type="text" name="q13cans" id="q13cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 14-->
                                        <input type="text" name="ques14" id="ques14" value="" placeholder="Question 14" />
                                        <input type="text" name="q14o1" id="q14o1" placeholder="Option 1" />
                                        <input type="text" name="q14o2" id="q14o2" placeholder="Option 2" />
                                        <input type="text" name="q14o3" id="q14o3" placeholder="Option 3" />
                                        <input type="text" name="q14o4" id="q14o4" placeholder="Option 4" />
                                        <input type="text" name="q14cans" id="q14cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 15-->
                                        <input type="text" name="ques15" id="ques15" value="" placeholder="Question 15" />
                                        <input type="text" name="q15o1" id="q15o1" placeholder="Option 1" />
                                        <input type="text" name="q15o2" id="q15o2" placeholder="Option 2" />
                                        <input type="text" name="q15o3" id="q15o3" placeholder="Option 3" />
                                        <input type="text" name="q15o4" id="q15o4" placeholder="Option 4" />
                                        <input type="text" name="q15cans" id="q15cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 16-->
                                        <input type="text" name="ques16" id="ques6" value="" placeholder="Question 16" />
                                        <input type="text" name="q16o1" id="q16o1" placeholder="Option 1" />
                                        <input type="text" name="q16o2" id="q16o2" placeholder="Option 2" />
                                        <input type="text" name="q16o3" id="q16o3" placeholder="Option 3" />
                                        <input type="text" name="q16o4" id="q16o4" placeholder="Option 4" />
                                        <input type="text" name="q16cans" id="q16cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 17-->
                                        <input type="text" name="ques17" id="ques17" value="" placeholder="Question 17" />
                                        <input type="text" name="q17o1" id="q17o1" placeholder="Option 1" />
                                        <input type="text" name="q17o2" id="q17o2" placeholder="Option 2" />
                                        <input type="text" name="q17o3" id="q17o3" placeholder="Option 3" />
                                        <input type="text" name="q17o4" id="q17o4" placeholder="Option 4" />
                                        <input type="text" name="q17cans" id="q17cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 18-->
                                        <input type="text" name="ques18" id="ques18" value="" placeholder="Question 18" />
                                        <input type="text" name="q18o1" id="q18o1" placeholder="Option 1" />
                                        <input type="text" name="q18o2" id="q18o2" placeholder="Option 2" />
                                        <input type="text" name="q18o3" id="q18o3" placeholder="Option 3" />
                                        <input type="text" name="q18o4" id="q18o4" placeholder="Option 4" />
                                        <input type="text" name="q18cans" id="q18cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 19-->
                                        <input type="text" name="ques19" id="ques19" value="" placeholder="Question 19" />
                                        <input type="text" name="q19o1" id="q19o1" placeholder="Option 1" />
                                        <input type="text" name="q19o2" id="q19o2" placeholder="Option 2" />
                                        <input type="text" name="q19o3" id="q19o3" placeholder="Option 3" />
                                        <input type="text" name="q19o4" id="q19o4" placeholder="Option 4" />
                                        <input type="text" name="q19cans" id="q19cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--QUESTION 20-->
                                        <input type="text" name="ques20" id="ques20" value="" placeholder="Question 20" />
                                        <input type="text" name="q20o1" id="q20o1" placeholder="Option 1" />
                                        <input type="text" name="q20o2" id="q20o2" placeholder="Option 2" />
                                        <input type="text" name="q20o3" id="q20o3" placeholder="Option 3" />
                                        <input type="text" name="q20o4" id="q20o4" placeholder="Option 4" />
                                        <input type="text" name="q20cans" id="q20cans" placeholder="Correct Answer" />
                                        <br>
                                        <!--Coding question-->
                                        <textarea name="codeQuestion1" id="codeQuestion1" rows="8" cols="40">Coding Question</textarea>
                                        <input type="text" name="sampleTest1" id="sampleTest1" placeholder="Sample Test 1" value/>
                                        <input type="text" name="sampleTest2" id="sampleTest2" value="" placeholder="Sample Test 2" />
                                        <input type="text" name="CodeAns" id="CodeAns" value="" placeholder="Coding Ans" />
                                        <br>
                                    </div>

                                    <div class="form-footer">
                                        <input type="button" name="createTest" id="createTest" value="Create Test" />
                                    </div>
                                </form>

                            </div>
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