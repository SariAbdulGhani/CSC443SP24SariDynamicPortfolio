<?php

?>

<html>
    <head>
        <link rel="stylesheet" href="css/my_styles.css"> 
        <link rel="stylesheet" href="css/icons.css"> 
        <script>
            // alert("my first javascript!"); 
         </script>
        <title>
            Login
        </title>
    </head>
    <body>
        <!-- <div class="row header " >
            
        </div> -->
        <div class="title">
            <span>Login</h1>
        </div>        
        
    
        <div class="paragraph">
            <form action="BE/login.php" method="POST" id="login-form">
                <label for="un">User Name</label>
                <br>
                <input type="text" name="username" id="un">
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="password" id="pass">
                <br>
                <input type="button" value="Login" onclick="login()">
                <input type="button" value="Cancel" onclick="ClearForm()">
            </form>
            <a href="pages/signup.html">Sign Up...</a>
        </div>
    
<script>
    function login(){
        var un=document.getElementById("un").value;
        var pass=document.getElementById("pass").value;
        if ((un=="")||(pass=="")){
            alert("You must fill in the username and the password!");
        }else{
            document.getElementById("login-form").submit();
        }

    }
    function ClearForm(){
        document.getElementById("un").value="";
        document.getElementById("pass").value="";
    }
</script>
</body>
</html>