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
    <div class="div-100 div-left background-c2 white pad-to-bottom mar-to-top">
        <h1 class="align-center">WELLCOME TO MY PORTFOLIO</h1>
        <h3 class="align-center white">Here you can find the two projects that I have worked on. Please click on the
            link found in each of the project boxes so you can go to the project's gallery and description page.</h3>
    </div>

    <div class="content">
        <div class="div-100 div-left">
        </div>
        <div class="div-100 div-left">
            <div class="div-50 div-left">
                <div class="div-right-box">
                    <p class="par-color align-center word-size">
                        Database Managment System Project
                    </p>
                    <div class="img-frame">
                        <img class="img" src="../images/DBMS outer cover.png">
                    </div>
                    <p class="par-color line-spacing">
                        This Project covers all the aspects of a database system from A to Z.
                        Our team first started the implementation with an Entity-Relation Model, which talks about
                        entities (Employees, Airports, Clients) and their relationships(Books a ticket, Manages,Works
                        in).Afterwards, we moved
                        into the relational model, which has to do with only relations. Then, we implemented the actual
                        theoritical part in a Real-Time
                        Database using SQL, where complex queries were performed. Finally, we ran the database into
                        Normalization proccess, where all relations
                        were finalized according to specific criteria, and where the database was finally done.<br><br>

                        Please click below or click on the menu option to access the Project's detailed description and
                        gallery.
                        <a href="Fly_Haraty.html" class="link-display">
                            <div class="listing-info"><i class="fa fa-plane"></i> Fly Haraty</div>
                        </a>
                    </p>
                </div>
            </div>

            <div class="div-50 div-left">
                <div class="div-right-box">
                    <p class="par-color align-center word-size">
                        Computer Organization Project
                    </p>
                    <div class="img-frame">
                        <img class="img" src="../images/CO outer cover.png">
                    </div>
                    <p class="par-color line-spacing">
                        This project aims to implement a full-Java coded program that translates some of the major
                        RISC instructions into plain english, and processes them so that the register files are modified
                        accordingly. In other
                        words, the output will be an english sentence explaining the instruction, and the values of the
                        registers after processing
                        the instruction. Thus, for example, if we have: "add $X0, $X1, $X2", this means that the
                        register 0 will have the content
                        of register X1 added to the content of register X2. The project also contains a design phase
                        which answers
                        to some major questions listed in the project description.<br><br>

                        Please click below or click on the menu option to access the Project's detailed description and
                        gallery.
                        <a href="RISC_Processor.html" class="link-display">
                            <div class="listing-info"><i class="fa fa-cogs"></i> RISC Processor</div>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="div-100 div-left" id="footer">
            <h3 class="mar-to-left align-center"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contact
                Information</h3>
            <div class="div-50 div-left">
                <p class="par-color mar-to-left align-center">
                    <i class="fa fa-envelope-o right-box-info"></i> <a href="mailto:sari.abdulghani@lau.edu"
                        class="link-display">Sari.abdulghani@lau.edu</a>
                    <br><br><br>
                    <i class="fa fa-phone right-box-info"></i> <a href="tel:(+961) 78 903 727" class="link-display">+961
                        78 903 727 </a>
                </p>
            </div>
            <div class="div-50 div-left">
                <p class="par-color mar-to-left align-center">
                    <i class="fa fa-map-signs right-box-info"></i>Al Hamra St., Beirut, Lebanon
                    <br><br><br>
                    <i class="bi bi-linkedin right-box-info"></i><a href="https://www.linkedin.com/in/sariabdulghani"
                        class="link-display">linkedin.com/in/sariabdulghani</a>
                </p>
            </div>
        </div>
    </div>

    <div id="footer2">
        <p>Copyright Ⓒ 2024 Sari Abdul Ghani. All rights Reserved</p>
    </div>
</body>

</html>