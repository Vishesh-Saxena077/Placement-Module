<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Linking -->
    <link rel="stylesheet" href="./css/dash_styleSheet.css">

    <!-- ===== JQUERY LIBRARY ===== -->
    <script src="./JS/jlib.js"></script>

    <!-- ======== Iconscout CSS ======== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <title>Dashboard</title>

    <script>
        $(document).ready(function(){
            
            $('.m_cb').mouseover(function(){
                $(this).css("transform","scale(1.15)");
            });
            $('.m_cb').mouseleave(function(){
                $(this).css("transform","none");
            });
        });
    </script>

</head>
<body>
    <div class="container">
        <!-- Header No changes to be made -->
        <div class="header">
            <div class="logobase">
                <p>G E U</p>
            </div>
            <div class="side_elements">
                <div class="ele1 elements" title="Profile" onclick="window.location.href='profile.php'"><i class='uil uil-user'></i></div>
                <div class="ele2 elements" title="Notification"><i class='uil uil-bell'></i></div>
                <div class="ele3 elements" title="Logout"><i class='uil uil-signout'></i></div>
            </div>
            <div class="side_bar_icon">
                <i class='uil uil-bars'></i>
            </div>
        </div>

        <!-- naming container it should be dynamic name and email texts should dynamic-->
        <div class="c1">
            <div class="c1_1">
                <div class="c1_1_a">
                </div>
            </div>
            <div class="c1_2">
                <div class="c1_2_a"> 
                    <h1>WELCOME</h1> 
                </div>
                <div class="c1_2_b">
                    <h3>Vishesh Saxena</h3>
                    <h4> <i class="uil uil-envelope"></i> visheshsaxena7777@gmail.com</h4>
                    <h4> <i class="uil uil-phone"></i> 7355288989</h4>
                </div>
            </div>
        </div>

        <!-- Modules no changes needed to be made -->
        <div class="modules">
            <div class="modules_inner">
                
                <div class="column">
                    <div class="m">
                        <div class="m_cb">
                            <div class="m_icon">
                                <i class="uil uil-university"></i>
                            </div>
                            <div class="m_txt">
                                <h4>Academic</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.column 1 -->

                <div class="column">
                    <div class="m">
                        <div class="m_cb">
                            <div class="m_icon">
                                <i class="uil uil-meeting-board"></i>
                            </div>
                            <div class="m_txt">
                                <h4>Notification</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.column 2 -->

                <div class="column">
                    <div class="m">
                        <div class="m_cb">
                            <div class="m_icon">
                                <i class="uil uil-award-alt"></i>
                            </div>
                            <div class="m_txt">
                                <h4>Placement</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.column 3 -->

                <div class="column">
                    <div class="m">
                        <div class="m_cb">
                            <div class="m_icon">
                                <i class="uil uil-money-bill-stack"></i>
                            </div>
                            <div class="m_txt">
                                <h4>Fee</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.column 4 -->

                <div class="column">
                    <div class="m">
                        <div class="m_cb">
                            <div class="m_icon">
                                <i class="uil uil-books"></i>
                            </div>
                            <div class="m_txt">
                                <h4>Library</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.column 5 -->

                <div class="column">
                    <div class="m">
                        <div class="m_cb">
                            <div class="m_icon">
                                <i class="uil uil-slack"></i>
                            </div>
                            <div class="m_txt">
                                <h4>Event</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.column 6 -->

                <div class="column">
                    <div class="m">
                        <div class="m_cb">
                            <div class="m_icon">
                                <i class="uil uil-snowflake-alt"></i>
                            </div>
                            <div class="m_txt">
                                <h4>Circular</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.column 7 -->

                <div class="column">
                    <div class="m">
                        <div class="m_cb">
                            <div class="m_icon">
                                <i class="uil uil-clipboard-alt"></i>
                            </div>
                            <div class="m_txt">
                                <h4>Exam</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.column 8 -->

                <div class="column">
                    <div class="m">
                        <div class="m_cb">
                            <div class="m_icon">
                                <i class="uil uil-building"></i>
                            </div>
                            <div class="m_txt">
                                <h4>Hostel</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.column 9 -->
            </div>
        </div>

        <footer>
            GEU
        </footer>

    </div>
</body>
</html>