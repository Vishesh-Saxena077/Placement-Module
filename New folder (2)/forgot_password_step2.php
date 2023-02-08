<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ======== Iconscout CSS ======== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!-- ======== CSS ======== -->
    <link rel="stylesheet" href="./css/forgot_password_step2.css">
    
    
    <!-- ===== JQUERY LIBRARY ===== -->
    <script src="./JS/jlib.js"></script>
    
    <title>Update Password</title>
    <script>
        $(document).ready(function() {
                var state = false;
                $('#pass').click(function() {
                    if (state) {
                        document.getElementById('passinput2').setAttribute('type', 'password');
                        $(this).addClass('uil uil-eye-slash');
                        $(this).removeClass('uil uil-eye');
                        state = false;
                    } else {
                        document.getElementById('passinput2').setAttribute('type', 'text');
                        $(this).addClass('uil uil-eye');
                        $(this).removeClass('uil uil-eye-slash');
                        state = true;
                    }
                });

                //making button working
                $('input').on('input change', function () {
                    if ($(this).val() != '') {
                        $('#submit').prop('disabled', false);
                    }
                    else {
                        $('#submit').prop('disabled', true);
                    }
                });

                // SHOWING SLIDING RULUES
                $('#passinput1').focus(function(){
                   $('.rules').show();
                });
                $('#passinput1').blur(function(){
                   $('.rules').hide();
                });

                //CHECKING PASSWORD RULES
                $('#passinput1').keyup(function(){
                    var passValue = $(this).val();
                    var t=0;
                    var f=0;
                    //Lower Letter Checking
                    if(passValue.match(/[a-z]/g)){
                        $('#lc').css("color","green");
                    }else{
                        $('#lc').css("color","red");
                    }

                    //Capital Letter Checking
                    if(passValue.match(/[A-Z]/g)){
                        $('#uc').css("color","green");
                    }else{
                        $('#uc').css("color","red");
                    }

                    //Numbers Checking
                    if(passValue.match(/[0-9]/g)){
                        $('#num').css("color","green");
                    }else{
                        $('#num').css("color","red");
                    }

                    //Special Characters Checking
                    if(passValue.match(/[!@#$%^&*]/g)){
                        $('#sc').css("color","green");
                    }else{
                        $('#sc').css("color","red");
                    }

                    //length Checking
                    if(passValue.length >= 8 ){
                        $('#len').css("color","green");
                    }else{
                        $('#len').css("color","red");
                        
                    }
                });

                //Matching password
                $('#passinput2').keyup(function(){
                    //Matching password
                    if($(this).val() === $('#passinput1').val()){
                        $('#msg').html("<p style='color:green'>Password Matched</p>");                        
                    }
                    else if($(this).val() === ""){
                        $('#msg').html("");
                    }
                    else{
                        $('#msg').html("<p style='color:red'>Password did not matched</p>");
                    }
                });

            });
    </script>
</head>
<body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1">
    <div class="container">
        <div class="forms">
            <div class="form login">
                <div class="contentforg">
                    <a href="forgotWay.php" class="txt" target="framename">Try Another Way</a>
                </div>
                <span class="title">
                    Change Password
                </span>
                <form action="#" method="post">
                    <div class="input-field">
                        <input type="password" name="pass" placeholder="Password" id="passinput1" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="cpass" placeholder="Repeat Password" id="passinput2" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw" id="pass"></i>
                    </div>
                    <div class="msg" id="msg">  
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Update" onclick="window.close();" name="UpdatePassword">
                    </div>
                    <div class="rules">
                        <ul>
                            <li id="uc">
                                <i class="uil uil-times verifyicon"></i>
                                ATLEST ONE UPPER CASE
                            </li>
                            <li id="lc">
                                <i class="uil uil-times verifyicon"></i>
                                ATLEST ONE LOWER CASE
                            </li>
                            <li id="sc">
                                <i class="uil uil-times verifyicon"></i>
                                ATLEST ONE SPECIAL CASE
                            </li>
                            <li id="num">
                                <i class="uil uil-times verifyicon"></i>
                                ATLEST ONE NUMBER
                            </li>
                            <li id="len">
                                <i class="uil uil-times verifyicon"></i>
                                SHOULD NOT BE LESS THAN 6 CHAR
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>