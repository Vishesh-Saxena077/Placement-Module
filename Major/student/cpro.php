<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SYTLE SHEET LINK -->
    <link rel="stylesheet" href="./css/styleStudent.css">
    <link rel="stylesheet" href="./css/cpro.css">

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

    <title>Student | C++ programming Courses</title>
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
                        <div class="pannel-heading"> C++ Programming</div>
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
                    <h3>C++ Programing</h3>
                </div>
            </div>


             <div class='main'> 
                <div class="C_content">
                    <p><b>C++</b> is a middle-level programming language developed by Bjarne Stroustrup starting in 1979 at Bell Labs. <b>C++</b> runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. This <b>C++</b> tutorial adopts a simple and practical approach to describe the concepts of <b>C++</b> for beginners to advanded software engineers.</p><br><br>
                    <h2>Why to Learn C++</h2><br>
                    <p><b>C++</b> is a MUST for students and working professionals to become a great Software Engineer. I will list down some of the key advantages of learning C++:</p>
                    <ul class="list">
                        <li><p>C++ is very close to hardware, so you get a chance to work at a low level which gives you lot of control in terms of memory management, better performance and finally a robust software development.</p></li>
                        <li><p><b>C++ programming</b> gives you a clear understanding about Object Oriented Programming. You will understand low level implementation of polymorphism when you will implement virtual tables and virtual table pointers, or dynamic type identification.</p></li>
                        <li><p>C++ is one of the every green programming languages and loved by  millions of software developers. If you are a great C++ programmer then you will never sit without work and more importantly you will get highly paid for your work.</p></li>
                        <li><p>C++ is the most widely used programming languages in application and system programming. So you can choose your area of interest of software development.</p></li>
                        <li><p>C++ really teaches you the difference between compiler, linker and loader, different data types, storage classes, variable types their scopes etc.</p></li>
                    </ul>
                    <p>There are 1000s of good reasons to learn C++ Programming. But one thing for sure, to learn any programming language, not only C++, you just need to code, and code and finally code until you become expert.</p><br><br>
                    <h2>Hello World using C++</h2>
                    <p>Just to give you a little excitement about <b>C++ programming</b>, I'm going to give you a small conventional C++ Hello World program, You can try it using Demo link</p>
                    <a href="https://www.educative.io/blog/top-cpp-coding-interview-questions"> learn more</a>
                    <br><br>
                    <h2>link for practise question</h2>
                    <ol>
                        <li><a href="https://practice.geeksforgeeks.org/problems/subarray-with-given-sum/0">Subarray with given sum</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/count-the-triplets/0" rel="noopener" target="_blank">Count the triplets</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/kadanes-algorithm/0">Kadane’s Algorithm</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/missing-number-in-array/0">Missing number in array</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/merge-two-sorted-arrays/0/" rel="noopener" target="_blank">Merge two sorted arrays</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/-rearrange-array-alternately/0/" rel="noopener" target="_blank">Rearrange array alternatively</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/number-of-pairs/0/" rel="noopener" target="_blank">Number of pairs</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/inversion-of-array/0/" rel="noopener" target="_blank">Inversion of Array</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/sort-an-array-of-0s-1s-and-2s/0">Sort an array of 0s, 1s and 2s</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/equilibrium-point/0">Equilibrium point</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/leaders-in-an-array/0">Leaders in an array</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/minimum-platforms/0">Minimum Platforms</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/reverse-array-in-groups/0">Reverse array in groups</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/kth-smallest-element/0">K’th smallest element</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/trapping-rain-water/0">Trapping Rain Water</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/pythagorean-triplet/0">Pythagorean Triplet</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/chocolate-distribution-problem/0">Chocolate Distribution Problem</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/stock-buy-and-sell/0">Stock buy and sell</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/unsorted-array/0">Element with left side smaller and right side greater</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/convert-array-into-zig-zag-fashion/0">Convert array into Zig-Zag fashion</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/last-index-of-1/0">Last Index of 1</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/spirally-traversing-a-matrix/0">Spirally traversing a matrix</a></li>
                        <li><a href="https://practice.geeksforgeeks.org/problems/largest-number-formed-from-an-array/0">Largest Number formed from an Array</a></li>
                    </ol>
                </div>
             </div>

    </section>

    <!-- JavaScript file for Theme Changing -->

    <script src="./JS/javascript.js"></script>



</body>

</html>