<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ======== Iconscout CSS ======== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!-- ======== CSS ======== -->
    <link rel="stylesheet" href="./css/forgot_password_step1.css">
    
    
    <!-- ===== JQUERY LIBRARY ===== -->
    <script src="./JS/jlib.js"></script>
    
    <title>Verify ID Forgot Password</title>
    <script>
        $(document).ready(function() {

                $('input').on('input change', function () {
                    if ($(this).val() != '') {
                        $('#submit').prop('disabled', false);
                    }
                    else {
                        $('#submit').prop('disabled', true);
                    }
                });
                $('#submit').click(function(){
                    window.open('forgot_password_step2.php','_black');
                    window.location.replace('LoginPage.php');
                });

            });
    </script>
</head>
<body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1">
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">
                    Verify User ID
                </span>
                <form action="#" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="User ID" id="input1" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="msg" id="msg">  
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Verify" name="verify_id" id="submit" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>