<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="CSS/mystyle.css">
    <link rel="stylesheet" href="CSS/icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/Sari's Icon.png" />
</head>

<body class="back">
    <div class="cont">
        <div class="div-50 div-left">
            <div class="form-cont">
                <div class="form-font titles">Wellcome</div>
                <div class="form-font">Please have a seat  until I check you up...</div>
            </div>
            <div class="img-cover">
                <img class="log-img" src="images/log-in.png">
            </div>
        </div>
        <div class="div-50 div-left">
            <div class="form-font2 titles2 pad-to-bottom">Log In</div>
            
            <form action="BE/LogIn.php" method="POST" id="login-form">
                <div class="form-font2"><label for="uname">User Name</label> </div>
                <br>
                <i class="fa fa-user-circle" aria-hidden="true"></i><input type="text" name="username" class="for-labels mar-to-bottom3" id="uname">
                <br>
                <div class="form-font2"><label for="password">Password</label></div>
                <br>
                <i class="fa fa-lock" aria-hidden="true"></i><input type="password" name="password" class="for-labels mar-to-bottom3" id="password">
                <br>
                <div class="div-100 div-left">
                    <input type="button" value="Login" class="button-click button-1 div-left" onclick="log_in()">
                    <input type="button" value="Cancel" class="button-click button-2 div-right" onclick="Reset()">
                </div>
            </form>
            <div class="div-100 div-left">
                <p class="form-font2">No Account? Create One!</p>
                <div class="center-div"><button class="button-click" onclick="location.href='pages/signup.html';">Sign Up</button></div>
            </div>
        </div>
    </div>
    <script>
        function log_in(){
            let username = document.getElementById("uname").value;
            let password = document.getElementById("password").value;
            if ((username=="")||(password=="")){
                alert("Username or Password missing!");
            }
            else{
                document.getElementById("login-form").submit();
            }
        }

        function Reset(){
            document.getElementById("uname").value = "";
            document.getElementById("password").value ="";
        }
    </script>
</body>

</html>