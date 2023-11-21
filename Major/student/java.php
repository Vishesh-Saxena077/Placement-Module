<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SYTLE SHEET LINK -->
    <link rel="stylesheet" href="./css/styleStudent.css">
    <link rel="stylesheet" href="./css/cpr.css">

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
                    <h1 class="h1">Java Tutorial</h1>
                    <p>Our core Java programming tutorial is designed for students and working professionals. Java is an <a href="java-oops-concepts">object-oriented</a>, class-based, concurrent, secured and general-purpose computer-programming language. It is a widely used robust technology. </p><br><br>
                    <h2 id="what-is-java" class="h2">What is Java?</h2>
                    <p>Java is a <strong>programming language</strong> and a <strong>platform</strong>. Java is a high level, robust, object-oriented and secure programming language.</p>
                    <p>Java was developed by <em>Sun Microsystems</em> (which is now the subsidiary of Oracle) in the year 1995. <em>James Gosling</em> is known as the father of Java. Before Java, its name was <em>Oak</em>. Since Oak was already a registered company, so James Gosling and his team changed the name from Oak to Java.</p>
                    <p><strong>Platform</strong>: Any hardware or software environment in which a program runs, is known as a platform. Since Java has a runtime environment (JRE) and API, it is called a platform.</p>
                    <br><br>
                    <h2 id="java-example" class="h2">Java Example</h2>
                    <p>Let's have a quick look at Java programming example. A detailed description of Hello Java example is available in next page.</p>
                    <p><strong>Simple.java</strong></p>
                    <div class="codeblock">
                        <textarea name="code" class="java" rows="5" cols="45">
                            class Simple{
                                public static void main(String args[]){
                                System.out.println("Hello Java");
                                }
                            }
                        </textarea>
                    </div>
                    <span class="testit"><a href="https://compiler.javatpoint.com/opr/test.jsp?filename=Simple" target="_blank">Test it Now</a></span>
                    <br><br>
                    <h2 id="wjiu" class="h2">Application</h2>
                    <p>According to Sun, 3 billion devices run Java. There are many devices where Java is currently used. Some of them are as follows:</p>
                    <ol class="points">
                        <li>Desktop Applications such as acrobat reader, media player, antivirus, etc.</li>
                        <li>Web Applications such as irctc.co.in, javatpoint.com, etc.</li>
                        <li>Enterprise Applications such as banking applications.</li>
                        <li>Mobile</li>
                        <li>Embedded System</li>
                        <li>Smart Card</li>
                        <li>Robotics</li>
                        <li>Games, etc.</li>
                    </ol><br>   
                    <h2 id="java-applications" class="h2">Types of Java Applications</h2>
                    <p>There are mainly 4 types of applications that can be created using Java programming:</p><br>
                    <h4 class="h4">Standalone Application</h4>
                    <p>Standalone applications are also known as desktop applications or window-based applications. These are traditional software that we need to install on every machine. Examples of standalone application are Media player, antivirus, etc. AWT and Swing are used in Java for creating standalone applications.</p>
                    <h4 class="h4">Web Application</h4>
                    <p>An application that runs on the server side and creates a dynamic page is called a web application. Currently, <a href="servlet-tutorial">Servlet</a>, <a href="jsp-tutorial">JSP</a>, <a href="struts-2-tutorial">Struts</a>, <a href="spring-tutorial">Spring</a>, <a href="hibernate-tutorial">Hibernate</a>, <a href="jsf-tutorial">JSF</a>, etc. technologies are used for creating web applications in Java.</p>
                    <h4 class="h4">Enterprise Application</h4>
                    <p>An application that is distributed in nature, such as banking applications, etc. is called an enterprise application. It has advantages like high-level security, load balancing, and clustering. In Java, <a href="https://www.javatpoint.com/ejb-tutorial">EJB</a> is used for creating enterprise applications.</p>
                    <h4 class="h4">Mobile Application</h4>
                    <p>An application which is created for mobile devices is called a mobile application. Currently, Android and Java ME are used for creating mobile applications.</p><br>
                    <h2 id="java-platforms" class="h2">Java Platforms / Editions</h2>
                    <p>There are 4 platforms or editions of Java:</p>
                    <h4 class="h4">Java SE (Java Standard Edition)</h4>
                    <p>It is a Java programming platform. It includes Java programming APIs such as java.lang, java.io, java.net, java.util, java.sql, java.math etc. It includes core topics like OOPs, <a href="java-string">String</a>, Regex, Exception, Inner classes, Multithreading, I/O Stream, Networking, AWT, Swing, Reflection, Collection, etc.</p><br>
                    <h4 class="h4">Java EE (Java Enterprise Edition)</h4>
                    <p>It is an enterprise platform that is mainly used to develop web and enterprise applications. It is built on top of the Java SE platform. It includes topics like Servlet, JSP, Web Services, EJB, <a href="https://www.javatpoint.com/jpa-tutorial">JPA</a>, etc.</p><br>
                    <h4 class="h4">Java ME (Java Micro Edition)</h4>
                    <p>It is a micro platform that is dedicated to mobile applications.</p><br>
                    <h4 class="h4">JavaFX</h4>
                    <p>It is used to develop rich internet applications. It uses a lightweight user interface API.</p><br>
                    <h2 class="h2">Prerequisite</h2>
                    <p>To learn Java, you must have the basic knowledge of C/C++ programming language.</p><br>
                    <h2 class="h2">Audience</h2>
                    <p>Our Java programming tutorial is designed to help beginners and professionals.</p><br>
                    <h2 class="h2">Problem</h2>
                    <p>We assure that you will not find any problem in this Java tutorial. However, if there is any mistake, please post the problem in the contact form.</p>
                    <br /><br />


                    <h2> java practise question link</h2>
                    <ol>

                        <li class="h4"><a href="https://www.javatpoint.com/fibonacci-series-in-java">Fibonacci Series in Java</a></li>
                        <li class="h4"><a href="https://www.javatpoint.com/prime-number-program-in-java">Prime Number Program in Java</a></li>
                        <li class="h4"><a href="https://www.javatpoint.com/palindrome-program-in-java">Palindrome Program in Java</a></li>
                        <li class="h4"><a href="https://www.javatpoint.com/factorial-program-in-java">Factorial Program in Java</a></li>
                        <li class="h4"><a href="https://www.javatpoint.com/armstrong-number-in-java">Armstrong Number in Java</a></li>
                        <li class="h4"><a href="https://www.javatpoint.com/how-to-generate-random-number-in-java">How to Generate Random Number in Java</a></li>
                        <li class="h4"><a href="https://www.javatpoint.com/how-to-print-pattern-in-java">How to Print Pattern in Java</a></li>
                        <li class="h4"><a href="https://www.javatpoint.com/how-to-compare-two-objects-in-java">How to Compare Two Objects in Java</a></li>
                        <li class="h4"><a href="https://www.javatpoint.com/how-to-create-object-in-java">How to Create Object in Java</a></li>
                        <li class="h4"><a href="https://www.javatpoint.com/how-to-print-ascii-value-in-java">How to Print ASCII Value in Java</a></li>
                    </ol>
                </div>
             </div>
    </section>

    <!-- JavaScript file for Theme Changing -->

    <script src="./JS/javascript.js"></script>



</body>

</html>