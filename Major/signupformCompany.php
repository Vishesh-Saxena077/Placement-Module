<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ======== Iconscout CSS ======== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!-- ======== CSS ======== -->
    <link rel="stylesheet" href="./css/loginPage.css">
    
    
    <!-- ===== JQUERY LIBRARY ===== -->
    <script src="./JS/jlib.js"></script>
    
    <title>Login Page</title>
    <script>
        $(document).ready(function() {
                var state = false;
                $('#pass').click(function() {
                    if (state) {
                        document.getElementById('input2').setAttribute('type', 'password');
                        $(this).addClass('uil uil-eye-slash');
                        $(this).removeClass('uil uil-eye');
                        state = false;
                    } else {
                        document.getElementById('input2').setAttribute('type', 'text');
                        $(this).addClass('uil uil-eye');
                        $(this).removeClass('uil uil-eye-slash');
                        state = true;
                    }
                });

                $('input').on('input change', function () {
                    if ($(this).val() != '') {
                        $('#submit').prop('disabled', false);
                    }
                    else {
                        $('#submit').prop('disabled', true);
                    }
                });
            });
    </script>
</head>
<body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1" id="body2">
    <div class="container">
        <div class="forms">
            <div class="form2 login">
                <span class="title">
                    Sign-Up
                </span>
                <form action="#" method="post">
                <div class="input-field">
                        <input type="text" placeholder="Organization Name" id="input1" required>
                        <i class="uil uil-building icon"></i>
                    </div>    
                <div class="input-field">
                        <input type="email" placeholder="Email" id="input1" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Password" id="input2" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw" id="pass"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Repeat Password" id="input2" required>
                        <i class="uil uil-lock icon"></i>
                        <!-- <i class="uil uil-eye-slash showHidePw" id="pass"></i> -->
                    </div>
                    <div class="msg" id="msg">  
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Register" name="Submit_btn" id="submit" disabled>
                    </div>
                    <div class="contentforg">
                        <a href="LoginPage.php" class="txt" target="_self">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>