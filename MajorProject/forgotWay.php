<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ======== Iconscout CSS ======== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!-- ======== CSS ======== -->
    <link rel="stylesheet" href="./css/forgotway.css">
    
    <title>Forgot Password Ways</title>
</head>
<body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1">
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">
                    Forgot Password or User Id?
                </span>                
            </div>
            <div class="way" onclick="window.location.href='Forgot_user_id_step1.php'">
                <p> 
                    Forgot User Id
                </p>
            </div>
            <div class="way" onclick="window.location.href='forgot_password_step1.php'">
                <p> 
                    Forgot Password
                </p>
            </div>
        </div>
    </div>
</body>
</html>