<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SYTLE SHEET -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500&display=swap');
        /* Default Theme Light*/
        
         :root {
            --clr-bg: #eaeaea;
            --clr-1: red;
            --clr-2: #0000dc;
            --clr-3: #ffffff;
            --clr-4: rgba(52, 52, 52, 0.134);
            --clr-5: #000000;
        }
        
        * {
            font-family: 'Plus Jakarta Sans', Sans;
            margin: 0;
            padding: 0;
            transition: all ease 0.3s;
        }
        
        body {
            height: 100vh;
            background-color: var(--clr-bg);
            z-index: 0;
        }
        
        .sidebar .text {
            font-size: 16px;
            font-weight: 500;
            color: var(--clr-5);
        }
        
        .sidebar.close .text {
            opacity: 0;
            display: none;
        }
        
        .sidebar .image {
            min-width: 60px;
            display: flex;
            align-items: center;
        }
        
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background: var(--clr-3);
            padding: 10px 14px;
            z-index: 100;
            /* box-shadow: 0px 0px 0.5px 0px gray; */
        }
        
        .homePage .homePage-base .ss-head {
            display: none;
        }
        
        .sidebar.close {
            width: 60px;
        }
        
        .sidebar li {
            height: 30px;
            margin-top: 20px;
            list-style: none;
            display: flex;
            align-items: center;
        }
        
        .sidebar li a {
            padding: 5px;
            text-align: center;
        }
        
        .sidebar #sublinks a {
            width: 200px;
            margin-left: 10px;
        }
        
        .sidebar li a .i,
        .sidebar li a .text {
            margin-left: 10px;
        }
        
        .sidebar li a:hover {
            background-color: var(--clr-bg);
            border-radius: 6px;
        }
        
        .sidebar li #sublinks a:hover {
            background: none;
        }
        
        .sidebar.close li a i {
            margin-left: -3px;
        }
        
        .sidebar ul li .sub-menu {
            height: 30px;
            width: 50px;
            background-color: #0000dc;
            position: absolute;
            right: 0;
            margin-top: 20px;
        }
        
        .sidebar li .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 60px;
            font-size: 20px;
        }
        
        .sidebar li .icon,
        .sidebar li .text {
            color: var(--clr-5);
        }
        
        .sidebar header {
            position: relative;
        }
        
        .sidebar .img-txt img {
            width: 50px;
            border-radius: 6px;
        }
        
        .sidebar header .img-txt {
            display: flex;
            align-items: center;
        }
        
        .sidebar .img-txt .header-text {
            display: flex;
            flex-direction: column;
            margin-left: 5px;
            font-size: 20px;
        }
        
        .sidebar .img-txt .header-text .name {
            font-weight: bold;
        }
        
        .toggle {
            position: absolute;
            top: 50%;
            right: -25px;
            transform: translateY(-50%) rotate(180deg);
            height: 25px;
            width: 25px;
            background-color: var(--clr-2);
            color: var(--clr-3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            cursor: pointer;
        }
        
        .sidebar.close .toggle {
            top: 50%;
            transform: translateY(-50%) rotate(0deg);
        }
        
        .sidebar .sreach-box {
            background-color: var(--clr-bg);
            height: 40px;
            border-radius: 10px;
        }
        
        .sidebar.close .sreach-box {
            margin-left: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .sidebar .sreach-box input {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            background-color: var(--clr-bg);
            border-radius: 50px;
            color: var(--clr-5);
        }
        
        .sidebar li a {
            text-decoration: none;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            transition: all ease 0.5s;
            justify-content: none;
        }
        
        .sidebar li a .submenuindicator {
            height: 100%;
            width: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin-right: 40px;
        }
        
        .sidebar.close li a .submenuindicator {
            opacity: 0;
        }
        
        ul li:first-child:before {
            content: '';
            height: 25px;
            width: 2px;
            background-color: var(--clr-2);
            transition: all ease 0.5s;
            border-radius: 30px;
        }
        
        ul li:first-child a .icon,
        ul li:first-child a .text {
            color: var(--clr-2);
        }
        
        ul li:hover:before {
            height: 100%;
            border-radius: 10px;
        }
        
        .sidebar li a:hover .icon,
        .sidebar li a:hover .text {
            color: var(--clr-2);
        }
        
        .sidebar li:last-child a:hover .icon,
        .sidebar li:last-child a:hover .text {
            color: red;
        }
        
        .sidebar .menu-bar {
            height: auto;
            width: 90%;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            justify-content: space-between;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        
        .sidebar .menu-bar {
            overflow-y: visible;
            overflow-x: visible;
        }
        /* ============================================================================= */
        /* theme style ======================================*/
        
        .visually-hidden {
            clip: rect(0 0 0 0);
            clip-path: inset(50%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }
        
        .color-picker>fieldset {
            border: 0;
            display: flex;
            gap: 2rem;
            width: fit-content;
            padding: 0.8rem 2rem;
            border-radius: 0 0 1rem 1rem;
        }
        
        .color-picker input[type="radio"] {
            appearance: none;
            width: 0.5rem;
            height: 0.5rem;
            outline: 3px solid var(--radio-color, currentcolor);
            outline-offset: 3px;
            border-radius: 50%;
        }
        
        .color-picker input[type="radio"]:checked {
            background-color: var(--radio-color);
        }
        /* light theme */
        
        .color-picker input[type="radio"]#light {
            --radio-color: #0000dc;
        }
        /* dark theme */
        
        .color-picker input[type="radio"]#dark {
            --radio-color: #00ff91;
        }
        
        .light,
         :root:has(#light:checked) {
            --clr-bg: #e1e1e1;
            --clr-1: red;
            --clr-2: #0000dc;
            --clr-3: #ffffff;
            --clr-4: rgba(52, 52, 52, 0.134);
            --clr-5: #000000;
            --overlay-bg: rgba(75, 75, 79, 0.362);
            --lg-1: rgb(215, 45, 253);
            --lg-2: rgba(68, 34, 195, 1);
        }
        
        .dark,
         :root:has(#dark:checked) {
            --clr-bg: #282828;
            --clr-1: red;
            --clr-2: #00ff91;
            --clr-3: rgb(28, 28, 28);
            --clr-4: rgba(87, 87, 87, 0.134);
            --clr-5: #ffffff;
            --overlay-bg: rgba(0, 0, 0, 0.66);
            --lg-1: rgb(26, 246, 67);
            --lg-2: rgb(0, 83, 7);
        }
        
        .sidebar .menu-bar .clrpicker {
            display: block;
        }
        
        .sidebar.close .menu-bar .clrpicker {
            display: none;
        }
        /* ============================================================================== */
        /* sub branches icon*/
        
        .sidebar.close li .subbranchindicator {
            display: none;
        }
        
        .sidebar.close .subbranch {
            display: none;
        }
        
        .sidebar.close li a .uil-angle-right {
            display: none;
        }
        
        .subEle-base {
            height: 100px;
            width: 100px;
            background-color: #000000;
            position: relative;
            margin-left: 87px;
        }
        /* ========================================================================== */
        /* scroll bar */
        /* width */
        
         ::-webkit-scrollbar {
            width: 0px;
        }
        /* Track */
        
         ::-webkit-scrollbar-track {
            background: none;
        }
        /* Handle */
        
         ::-webkit-scrollbar-thumb {
            background: var(--color0);
        }
        /* Handle on hover */
        
         ::-webkit-scrollbar-thumb:hover {
            background: var(--color1);
        }
        /* =============================================================================== */
        /* overlay */
        
        .overlay {
            display: none;
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.68);
        }
        
        .overlay .dialogbase {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }
        /* =========================================================================== */
        /* dialog box */
        
        .overlay .dialog-box {
            height: auto;
            max-width: 300px;
            width: 70%;
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        
        .overlay .dialog-box .logout-div-btns {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }
        
        .overlay .dialog-box .logout-div-btns .dialog-box-btn {
            font-size: 15px;
            padding: 10px;
            letter-spacing: 2px;
            outline: none;
            border: none;
            border-radius: 5px;
            background-color: crimson;
            color: white;
        }
        
        .overlay .dialog-box .logout-div-btns #cancel {
            background-color: #7171ff;
        }
        
        .overlay .dialog-box .logout-div-btns #logout:hover,
        .overlay .dialog-box .logout-div-btns #cancel:hover {
            transform: scale(1.1);
        }
        
        .sidebar.close li {
            pointer-events: none;
        }
        /* ================= =========================================================*/
        /* sub content links */
        
        .sub-content-link {
            display: none;
            height: auto;
            width: auto;
            /* background-color: #0000dc; */
            border: 0.5px solid var(--clr-bg);
            margin-top: 10px;
        }
        
        .sub-content-link .sub-content-link-inner {
            padding: 20px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: column;
            gap: 2rem;
        }
        
        .sub-content-link .uil-angle-left-b {
            font-size: 40px;
            color: var(--clr-2);
            background-color: var(--clr-bg);
            border-bottom-right-radius: 6px;
        }
        
        .sub-content-link .sub-content-link-inner .subdata {
            height: auto;
            width: 100%;
            /* background-color: #00ff91; */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all ease 0.5s;
            padding: 10px;
            color: var(--clr-5);
        }
        
        .sub-content-link .sub-content-link-inner .subdata:hover {
            background-color: var(--clr-bg);
            border-left: 0.111px solid var(--clr-2);
            border-right: 0.111px solid var(--clr-2);
            color: var(--clr-2);
        }
        
        .sub-content-link {
            height: auto;
            width: auto;
        }
        /* ====================================================================  */
        /* content page css */
        
        .homePage {
            margin-left: 280px;
            height: 100vh;
            width: calc(100% - 280px);
            transition: all ease 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .sidebar.close~.homePage {
            margin-left: 88px;
            width: calc(100% - 88px);
        }
        
        .homePage .homePage-base {
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
            overflow-y: scroll;
        }
        
        .homePage .homePage-base .head {
            height: auto;
            width: 100%;
            display: flex;
            align-items: center;
            /* background-color: #0000dc; */
            background-color: var(--clr-3);
        }
        
        .homePage .homePage-base .head .head-1 {
            height: auto;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
        }
        
        .homePage .homePage-base .head .head-1 .head-text {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }
        
        .homePage .homePage-base .head .head-1 .head-text .pannel-heading {
            font-size: 30px;
            margin-left: 20px;
            color: var(--clr-5);
            font-weight: normal;
        }
        
        .homePage .homePage-base .head .head-1 .Profile {
            height: auto;
            width: auto;
            /* background-color: red; */
        }
        
        .homePage .homePage-base .head .head-1 .Profile {
            height: auto;
            width: auto;
            background-color: var(--clr-bg);
            /* background-color: #00ff91; */
            border-radius: 6px;
            padding: 5px;
        }
        
        .homePage .homePage-base .head .head-1 .Profile .pro-1 {
            height: auto;
            width: auto;
            padding: 10px 20px 10px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }
        
        .homePage .homePage-base .head .head-1 .Profile .pro-1 .pro-img {
            height: 40px;
            width: 40px;
            padding: 5px;
            border-radius: 50%;
            /* background-color: #00ff91; */
        }
        
        .homePage .homePage-base .head .head-1 .Profile .pro-1 .pro-img img {
            border-radius: 50%;
        }
        
        .homePage .homePage-base .head .head-1 .Profile .pro-1 .pro-name i {
            color: var(--clr-5);
            font-size: 2rem;
        }
        
        .homePage .homePage-base .head .head-1 .Profile .pro-1 .pro-name i:nth-child(1):hover {
            color: var(--clr-2);
        }
        
        .homePage .homePage-base .head .head-1 .Profile .pro-1 .pro-name i:nth-child(2):hover {
            color: var(--clr-1);
        }
        
        .homePage .homePage-base .ss-head {
            height: auto;
            width: auto;
            padding: 20px;
        }
        
        .homePage .homePage-base .v7_3 {
            height: auto;
            width: auto;
            padding: 10px;
            /* background-color: red; */
            margin-top: 10px;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 {
            height: auto;
            width: auto;
            padding: 10px;
            /* background-color: yellow; */
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 {
            height: auto;
            width: auto;
            /* background-color: green; */
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 {
            color: var(--clr-5);
            padding: 10px;
            /* background-color: #0000dc; */
            height: auto;
            width: auto;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_cont {
            /* background-color: red; */
            height: auto;
            width: auto;
            padding: 10px;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_cont {
            font-size: 18px;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_cont .input-base {
            height: auto;
            width: auto;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_cont .input-base div {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: auto;
            width: auto;
            padding: 10px;
            /* background-color: #0000dc; */
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_cont .input-base div .input-field {
            gap: 10px;
            height: auto;
            width: auto;
            /* background-color: #00ff91; */
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_cont .input-base input,
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_cont .input-base select {
            padding: 10px;
            border-radius: 6px;
            outline: none;
            border: none;
            margin-top: 20px;
            font-weight: bold;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_cont .input-base input[type="button"] {
            background: var(--clr-2);
            padding: 10px;
            font-size: 15px;
            color: var(--clr-3);
            letter-spacing: 2px;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_table {
            height: auto;
            width: auto;
            /* background-color: #00ff91; */
            padding: 10px;
            margin-top: 20px;
            overflow-x: auto;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_table table,
        .homePage .homePage-base th,
        .homePage .homePage-base td {
            padding: 10px;
            border: 5px solid var(--clr-5);
            color: var(--clr-5);
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_table table {
            border-radius: 10px;
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        
        .homePage .homePage-base .v7_3 .v7_4 .v7_5 .v7_6 .v7_6_table table th {
            background-color: var(--clr-3);
            text-align: left;
        }
        /* ====================================================================================== */
        /* ====================================================================================== */
        /* ====================================================================================== */
        
        @media (max-width:1300px) {}
        
        @media (max-width:1000px) {}
        
        @media (max-width:900px) {}
        /* ====================================================================================== */
        
        @media (max-width:800px) {}
        /* ====================================================================================== */
        
        @media (max-width:700px) {
            .homePage .homePage-base .head .head-1 .head-text {
                display: none;
            }
            .homePage .homePage-base .head .head-1 {
                justify-content: flex-end;
            }
        }
        
        @media (max-width:750px) {}
        
        @media (max-width:630px) {}
        /* ======================================================================================*/
        
        @media (max-width:500px) {
            .homePage .homePage-base .box-2 .box-2_1_1 {
                height: auto;
            }
            .homePage .homePage-base .box-2 .box-2_1_1 .box-cont {
                background: none;
            }
            .sidebar {
                z-index: 200;
                width: 90%;
            }
            .homePage {
                z-index: 90;
            }
            .homePage .homePage-base .head .head-1 .head-text .pannel-heading {
                display: none;
            }
            .homePage .homePage-base .head .head-1 .Profile {
                background: none;
                width: 100%;
                display: flex;
                justify-content: flex-end;
                align-items: center;
                gap: 5px;
            }
            .homePage .homePage-base .head .head-1 .Profile .pro-1 .pro-img {
                height: 40px;
                width: 40px;
            }
            .homePage .homePage-base .head .head-1 .Profile .pro-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                gap: 10px;
            }
            .homePage .homePage-base .head .head-1 .Profile .pro-1 .pro-name i {
                font-size: 30px;
            }
        }
    </style>

    <!-- CDN Library link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- charts CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- JQuery File for NavBar -->
    <script>
        $(document).ready(function() {

            $('.toggle').click(function() {
                $('.menu-links').show();
                $('.sub-content-link').hide();
            });

            //Acadmic sub menu
            $('#subEle2').click(function() {
                $('.menu-links').slideUp();
                $('#Acadmic-side-sub-menu').slideDown();
            });

            //Placement sub menu
            $('#subEle5').click(function() {
                $('.menu-links').slideUp();
                $('#fee-side-sub-menu').slideDown();
            });

            //Exam sub menu
            $('#subEle6').click(function() {
                $('.menu-links').slideUp();
                $('#exam-side-sub-menu').slideDown();
            });

            // Closing sub menu branches
            $('.uil-angle-left-b').click(function() {
                $('.menu-links').slideDown();
                $('.sub-content-link').slideUp();
            });

            // Logout
            $('#logoutoption').click(function() {
                $('.overlay').css("display", "block");
            });
            $('#cancel').click(function() {
                $('.overlay').css("display", "none");
            });
            $('#logout').click(function() {
                window.location.replace('login.php');
            });

            // side nav bar
        });
    </script>

    <!-- ICON LIBRARY -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- angular Js Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <title>Dashboard</title>
</head>

<body ng-app="">

    <!-- Side Nav Bar -->
    <nav class="sidebar close">
        <!-- NavBar Heading and Logo -->
        <header>
            <div class="img-txt">
                <span class="image">
                    <img src="download.jpg" alt="logo">
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
                <li class="sreach-box">

                    <i class="uil uil-search-alt icon"></i>
                    <input title="sreach" name="sreach" id="sreach" placeholder="Sreach">

                </li>
                <ul class="menu-links">
                    <!-- Dashboard -->
                    <li class="nav-links" id="subEle1">
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
                        </a>
                    </li>
                    <!-- Notice -->
                    <li class="nav-links" id="subEle4">
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
                    <!-- Library -->
                    <li class="nav-links" id="subEle7">
                        <a href="#">
                            <i class="uil uil-book-alt icon"></i>
                            <span class="text nav-text">Library</span>
                        </a>
                    </li>
                    <!-- Hostel -->
                    <li class="nav-links" id="subEle8">
                        <a href="#">
                            <i class="uil uil-building icon"></i>
                            <span class="text nav-text">Hostel</span>
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
                        <div class="subdata item1" onclick="window.location.replace('attendance.html');">
                            Attendance
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('timetable.html');">
                            Time Table
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('semester_regist.html');">
                            Semester Registration
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('Enrollment Form.html');">
                            Enrollment Form
                        </div>
                    </div>
                </div>
                <!-- FEE -->
                <div class="sub-content-link" id="fee-side-sub-menu">
                    <i class="uil uil-angle-left-b"></i>
                    <div class="sub-content-link-inner">
                        <div class="subdata item1" onclick="window.location.replace('fee_submission.html');">
                            Fee Submission
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('fee_receipt.html');">
                            Fee Receipt
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('transanction_history.html');">
                            Transanction History
                        </div>
                    </div>
                </div>
                <!-- EXAM -->
                <div class="sub-content-link" id="exam-side-sub-menu" ng-init="items3=['Back Papers','Admit Card','Subject Revalution','Exam Time-Table']">
                    <i class="uil uil-angle-left-b"></i>
                    <div class="sub-content-link-inner">
                        <div class="subdata item1" onclick="window.location.replace('result.html');">
                            Result
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('backpaper.html');">
                            Back Papers
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('admitcard.html');">
                            Admit Card
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('sub_reval.html');">
                            Subject Revalution
                        </div>
                        <div class="subdata item1" onclick="window.location.replace('exam_tt.html');">
                            Exam Time-Table
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!-- overlay div effect -->
    <div class="overlay">
        <!-- Logout Confirmation Dialog Box -->
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
                        <div class="pannel-heading"> Attendance </div>
                    </div>
                    <div class="Profile">
                        <div class="pro-1">
                            <div class="pro-img" title="User Profile">
                                <img src="images.png" alt="NA" height="100%" width="100%">
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
                    <h3>Home>>Acadmics>>Attendance</h3>
                </div>
            </div>



            <!-- box - 1 -->
            <div class="v7_3">
                <div class="v7_4">
                    <div class="v7_5">
                        <div class="v7_6">
                            <div class="v7_6_cont">
                                <h3>Instructions</h3>
                                <ul style="font-size:15px;color: rgb(255, 0, 0);">
                                    <li>For View/Edit Teacher Attendance. Enter the teachers ID</li>
                                    <li>For View/Edit Student Attendance. Enter the Student ID</li>
                                    <li>For View/Edit Student's Semester Attendance select the Semester</li>
                                </ul>
                                <hr><br>View Particular Student Attendance
                                <hr>
                                <div class="input-base">
                                    <form action="#">
                                        <div>
                                            <div class="input-field">
                                                <input type="text" name="student_id" title="student id" placeholder="Student ID/Teacher ID">
                                                <select name="semester" id="" title="semester">
                                                    <option value="null">--SEMESTER--</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                            <input type="button" name="View" id="" title="View" value="View">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="v7_6_table">
                                <table>
                                    <thead>
                                        <th>S.No.</th>
                                        <th>Subject</th>
                                        <th>Subject Code</th>
                                        <th>Faculty</th>
                                        <th>Total Lectures</th>
                                        <th>Percentage</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="#">
                                                    <div>Edit</div>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- JavaScript file for Theme Changing -->
    <script>
        const body = document.querySelector("body"),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box");

        // console.log(sidebar);
        // console.log(toggle);

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        // theme changing code

        const colorTheme = document.querySelectorAll('[name="theme"]');

        //store theme
        const storeTheme = function(theme) {
            localStorage.setItem("theme", theme);
        }

        colorTheme.forEach(themeOption => {
            themeOption.addEventListener('click', () => {
                storeTheme(themeOption.id);
            });
        });

        // apply theme
        const setTheme = function() {
            const activeTheme = localStorage.getItem("theme");
            colorTheme.forEach((themeOption) => {
                if (themeOption.id === activeTheme) {
                    themeOption.checked = true;
                }
            });
            //fallback for np :has() support
            document.documentElement.className = theme;
        };

        document.onload = setTheme();
    </script>



</body>

</html>
