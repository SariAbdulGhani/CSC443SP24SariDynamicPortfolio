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
        <h1 class="align-center">WELLCOME TO RICS PROCESSOR TRANSLATOR <i class="fa fa-cogs" aria-hidden="true"></i>
            <h3 class="align-center white">It's an really amazing translator, however it's a program!</h3>
        </h1>
    </div>

        <div class="content">
            <div class="mar-all">
            <div class="div-100 div-left">
                <h2>What is the main purpose of the project <i class="fa fa-question-circle" aria-hidden="true"></i>
                </h2>
                <p class="par-font">
                    The project aims to make the students understand better the functionality of the RISC processor
                    which
                    goes through 4 main stages: Fetch, Decode, Execute and Write back. Each group is expected to make
                    a simulation of the RICS processor by using Java, where a code must be implemented that sould
                    process 6
                    main instructions: add, and, or, li, lw and sw. Then, the output should be the register file after
                    it
                    has been updated, in addition to a description in natural english language explaining what happened.
                </p>
                <h2>What are the 4 stages which the flow stage goes through <i class="fa fa-question-circle"
                        aria-hidden="true"></i></h2>
                <p class="par-font">
                    The first stage is Fetch, where the instructions are read from the program memory according to the
                    value
                    of the PC register. (PC is then incremented)
                    <br><br> At the second stage, the instruction's op-code is decoded. The procesor will then recognize
                    what kind of instruction to be executed, and what operands of the ALU to use.
                    (source registers for the arithmetic and logic instructions are selected)
                    <br><br> Here, the incstuction decoded in the previous stage will be executed. The logic and
                    arithmetic
                    operations on the selected operands are executed by the ALU. (Note that here the sw and lw
                    instructions
                    will need memory access)
                    <br><br> Finally, at the Write back stage, the data is written to the instruction's destination. For
                    the
                    logic and arithmetic operations, the destination must always be a register.
                </p>

                <h2>What was my project about <i class="fa fa-question-circle" aria-hidden="true"></i></h2>
                <p class="par-font">
                    Mainly, my team and I worked on developing a Java code which simulates the actual functioning of the
                    RISC processor based on the instructions and stages discussed earlier.
                </p>

                <h2>What were the mainly tools/softwares used <i class="fa fa-question-circle" aria-hidden="true"></i>
                </h2>
                <p class="par-font">
                    The actual coding was done using Java programming language, using the Eclipse software. The report
                    was
                    done using Microsoft word. (The actual design phase was written using word)
                </p>

                <h2>What are the main lessons learnt from this project <i class="fa fa-question-circle"
                        aria-hidden="true"></i></h2>
                <p class="par-font">
                    This project gave me better understanding about how processors work, and I better understood the
                    RISC
                    language. Also, I gained managing skills where I looked after my team, so that everyone is working
                    synchronously and that we submit the project at the expected deadline.
                </p>
            </div>
        </div>

            <h2 class="align-center">Gallery:</h2>


            <div class="align-center">
            <?php 
            $List_of_images = file("Image_Names.txt");

            foreach ($List_of_images as $number => $name_of_file){
                $thumbnail = "../images/CO Images/{$name_of_file}Thumb.png";
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
                $full_image = "../images/CO Images/{$name_of_file}.png";
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

            <h3 class="mar-to-left">Please click below to open the design phase pdf of the project:</h3>

            <a href="../Projects/CO_Project_Design.pdf" class="link-display">
                <div class="listing-info blue-back mar-all mar-to-top mar-to-bottom"><i class="fa fa-cogs"></i> RISC
                    Processor</div>
            </a>

            <div class="div-100 div-left mar" id="footer">
                <h3 class="mar-to-left align-center"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contact
                    Information</h3>
                <div class="div-50 div-left">
                    <p class="par-color mar-to-left align-center">
                        <i class="fa fa-envelope-o right-box-info"></i> <a href="mailto:sari.abdulghani@lau.edu"
                            class="link-display">Sari.abdulghani@lau.edu</a>
                        <br><br><br>
                        <i class="fa fa-phone right-box-info"></i> <a href="tel:(+961) 78 903 727"
                            class="link-display">+961
                            78 903 727 </a>
                    </p>
                </div>
                <div class="div-50 div-left">
                    <p class="par-color mar-to-left align-center">
                        <i class="fa fa-map-signs right-box-info"></i>Al Hamra St., Beirut, Lebanon
                        <br><br><br>
                        <i class="bi bi-linkedin right-box-info"></i><a
                            href="https://www.linkedin.com/in/sariabdulghani"
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