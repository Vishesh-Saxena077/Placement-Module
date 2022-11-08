<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ======== Iconscout CSS ======== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ======== CSS ======== -->
    <link rel="stylesheet" href="./css/forgot_user_id_Step1.css">

 
    <!-- ===== JQUERY LIBRARY ===== -->
    <script src="./JS/jlib.js"></script>

    <title>Forgot User Id Step 1</title>
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
            $('input').on('input change', function() {
                if ($(this).val() != '') {
                    $('#submit').prop('disabled', false);
                } else {
                    $('#submit').prop('disabled', true);
                }
            });
        });

        //TIMER functionallity
        $(function() {
                var cd = $('#countdown');
                var c = parseInt(cd.text(),10);
                var interv = setInterval(function() {
                    c--;
                    cd.html(c);
                    if (c == 0) {
                        clearInterval(interv);
                        $('.msg').show();
                        $('#countdown').hide();
                        setTimeout(function(){
                            window.location.replace('LoginPage.php');
                        },5000);              
                    }else{
                        $('#countdown').show();
                        $('.msg').hide();
                    }
                }, 1000);        
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
                    Get ID
                </span>
                <form action="#" method="post">
                    <div class="input-field">
                        <input type="text" name="userid" placeholder="User ID" id="input1" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="date" name="date" placeholder="Password" id="input2" required>
                        <i class="uil uil-calender icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="tel" name="tel_number" placeholder="(XXXXX XXXXX)" id="tel_number" required>
                        <i class="uil uil-phone icon"></i>
                    </div>
                    <div class="msg" id="msg"></div>
                    <div class="input-field button">
                        <input type="button" value="View" id="view" name="View">
                    </div>
                    <div class="timer">
                        <div id='countdown'>20</div>
                        <div class='msg'> times up!!! </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>