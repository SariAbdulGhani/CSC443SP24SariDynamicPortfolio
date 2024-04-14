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
    <div class="background-menu" id="header">
        <div class="div-30 div-left">
            <div id="dropdown-menu">
                <span><i class="ico menu-ico"></i>MENU</span>
                <div class="dropdown-content">
                    <ul>
                        <a href="Portfolio.php">
                            <li><i class="fa fa-archive" aria-hidden="true"></i> My Portfolio</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="div-60 div-left">
            <div class="wellcome-div">
                <span>WELCOME <?php echo $_SESSION["username"] ; ?> </span>
            </div>
        </div>
        <div class="div-10 div-left">
            <a href="../logout.php" class="wellcome-div2">
                Logout <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <div class="div-100 div-left background-c2 white pad-to-bottom mar-to-top">
        <h1 class="align-center">WELLCOME TO FLY HARATY <i class="fa fa-plane" aria-hidden="true"></i>
            <h3 class="align-center white">Here, we are talking more than just an Airline.</h3>
        </h1>
    </div>

    <div class="content">

        <div class="div-100 div-left">
            <div class="mar-all">
                <h2>What is the main purpose of the project <i class="fa fa-question-circle" aria-hidden="true"></i>
                </h2>
                <p class="par-font">
                    Mainly, the porject is a part of the Data Base Managment Systems course, where the students are
                    expected to be formed in groups (mainly 4 in each group), and then
                    work together on a DBMS project which is composed of four related phases. At the end of this
                    project, the students should be able to implement a complete DBMS system from
                    A to Z.
                </p>
                <h2>What are the four different phases of this project <i class="fa fa-question-circle"
                        aria-hidden="true"></i></h2>
                <p class="par-font">
                    The first phase focuses on implementing the ER model(Entity-Relationship model), where each group
                    picks a topic for their porject and constitute their system to have at least 10 entities,
                    in addition to having relationships between them. An ER diagram should be drawn, and each entity and
                    relationship should be explained at its own.
                    <br><br>The Second phase emphasises on transforming the model from ER to Relational model.
                    Here all entities and relationships should be converted into relations (tables), according to some
                    rules and criteria.
                    <br><br>The Third phase talks about the actual implementation, where domains should be invented,
                    data types should be given, and rerlations should be inserted into the SQL server. In this phase,
                    each team should come up with 10 complex SQL queries to test the correct functionality of their
                    database.
                    <br><br>Finally, each team should normalize their database according to the 1st, 2nd and 3rd Normal
                    Forms, which are criteria that make a database more strong and logical.
                </p>

                <h2>What was my project about <i class="fa fa-question-circle" aria-hidden="true"></i></h2>
                <p class="par-font">
                    Mainly, my team and I worked on developing a full dbms system for an Airport. It was consisted of
                    primarly the clients, tickets that they buy, airports they travel through, Duty-frees present in
                    these airports, and flights they get onto. Also, we included
                    the employees and different departments they work in. In addition, and as I mentioned earlier, we
                    were more than just an Airline, thus we had an Hotel and Taxi servecies implemented in our database.
                </p>

                <h2>What were the mainly tools/softwares used <i class="fa fa-question-circle" aria-hidden="true"></i>
                </h2>
                <p class="par-font">
                    "Latex", which is considered an advanced software, was used to prepare and type the project in an
                    professional way. The actual programming software used was MySQL from Oracle, where
                    the actual implementation was done using it.
                </p>

                <h2>What are the main lessons learnt from this project <i class="fa fa-question-circle"
                        aria-hidden="true"></i></h2>
                <p class="par-font">
                    Basically, learning how databases actulally work was the main thing I took from this project. It
                    wasnt only a theoratical course talking about some theories, but rather
                    an active course that took learning to a higher level. Now, I can start doing a DBMS from scratch,
                    by following the main steps. Also, One main thing I gained from this course was project managment,
                    where my leaderships skills evolved, and I became more able to lead a team, where I organized the
                    meatings and coordinated the work among my team members.
                </p>
            </div>
        </div>

        <h2 class="align-center">Gallery:</h2>


        <div class="align-center">
            <?php 
            $List_of_images = file("Image_Names.txt");

            foreach ($List_of_images as $number => $name_of_file){
                $thumbnail = "../images/DBMS_Images/{$name_of_file}Thumb.png";
            ?>
            <div class="thumb">
                <a href="#Open_in_Same_page<?= $number+ 1?>" class="point_on">
                    <img src="<?=$thumbnail?>">
                </a>
            </div>

            <?php } ?>


            <?php
            $List_of_images = file("Image_Names.txt");

            foreach ($List_of_images as $number => $name_of_file){
                $full_image = "../images/DBMS_Images/{$name_of_file}.png";
            ?>

        <div id="Open_in_Same_page<?= $number+1 ?>" class="background">
            <a href="">
                <div class="Back-button">Back to Gallery</div>
            </a>
            <div class="background2">
                <img src="<?=$full_image ?>">
            </div>
        </div>

        <?php } ?>
        </div>

        <h3>Please click below to open the pdf of the project:</h3>

        <a href="../Projects/DBMS_Project.pdf" class="link-display">
            <div class="listing-info blue-back mar-all mar-to-top"><i class="fa fa-plane"></i> Fly Haraty</div>
        </a>

        <br>

        <div class="div-100 div-left mar" id="footer">
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