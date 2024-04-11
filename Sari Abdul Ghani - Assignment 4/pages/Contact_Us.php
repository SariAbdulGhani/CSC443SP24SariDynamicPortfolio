<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<html>

<head>
    <link rel="stylesheet" href="../CSS/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/Sari's Icon.png" />
    <link rel="stylesheet" href="../CSS/icons.css">
</head>

<body class="background-c">
    <?php include 'menu.php'; ?>
    <div class="div-100 div-left background-c2 white pad-to-bottom mar-to-top1">
        <h1 class="align-center">WELLCOME TO MY CONTACT INFO</h1>
        <h3 class="align-center white">Here, you can see my contact details, please feel free to reach out to me!</h3>
    </div>
    <div class="content">
        <div class="div-50 div-left">
            <h1 class="mar-all">Thanks For Your Visit <i class="fa fa-file right-box-info"></i></h1>
            <p class="par-font2 par-color line-spacing mar-all">
                I hoped you enjoyed viewing my personal website, if you have any inqueries, or you would like to contact
                me, please feel free to do that. I provided a couple of methods that you can use. Please click on your choice where you
                will be directed towards the application directly. Thank you for your visit, and come back soon :)
            </p>
        </div>
        <div class="div-50 div-left">
        <div class="div-right-box mar-bottom-2">
            <p class="par-color par-font align-center">
                <br>
                <i class="fa fa-envelope-o right-box-info "></i> <a href="mailto:sari.abdulghani@lau.edu"
                    class="link-display">Sari.abdulghani@lau.edu</a>
                <br><br><br>
                <i class="fa fa-phone right-box-info"></i> <a href="tel:(+961) 78 903 727" class="link-display">+961
                    78 903 727 </a>
                <br><br><br>
                <i class="bi bi-github right-box-info"></i><a href="https://github.com/SariAbdulGhani" class="link-display">My Github Page</a>
                <br><br><br>
                <i class="bi bi-linkedin right-box-info"></i><a href="https://www.linkedin.com/in/sariabdulghani"
                    class="link-display">My LinkedIn Page</a>
                <br><br><br>
            </p>
        </div>
    </div>
    </div>
    <div id="footer2">
        <p>Copyright Ⓒ 2024 Sari Abdul Ghani. All rights Reserved</p>
    </div>
</body>

</html>