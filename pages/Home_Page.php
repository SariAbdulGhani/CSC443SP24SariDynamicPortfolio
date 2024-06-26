<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<head>
    <link rel="stylesheet" href="../CSS/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/Sari's Icon.png" />
    <link rel="stylesheet" href="../CSS/icons.css">
</head>

<body class="background-c">
    <?php include 'menu.php'; ?>
    <div class="div-100 div-left background-c2 white pad-to-bottom mar-to-top2">
        <h1 class="align-center">WELLCOME TO MY HOME PAGE <i class="fa fa-home" aria-hidden="true"></i></h1>
    </div>
    <div class="content div-left">
        <div class="div-50 div-left">
            <div class="mar-to-left" id="text-ul">
                <h2>Who is Sari Abdul Ghani <i class="fa fa-question-circle" aria-hidden="true"></i></h2>
                <p class="par-font">I'm a 20 years old undergraduate university student. I study at the
                    Lebanese American University of Beirut in the feild of Computer Science. I'm now working
                    hard to gain my degree and then start diving into my work career. I dont know where
                    the wind will carry me, but I will always be ready to give my maximum effort to reach
                    better and better places.
                </p>
                <h2>What is the purpose of this website <i class="fa fa-question-circle" aria-hidden="true"></i></h2>
                <p class="par-font">The actual purpose of this website is to make you more familiar with me.</p>
                <ul>
                    <li><span>So if you were an Employeer, this website will make you better acknowledge the
                            "Real Sari" without any exagguration, where I will present my actual skills in programming,
                            with some extra hobbies and talents that may match you expectations!
                        </span></li>
                    <li><span>Now if you were just a visitor, I will gladly wellcome you here where you will get to
                            know more about my skills and perks that I have.
                        </span></li>
                </ul>
                <p class="par-font">Regardless what type you are, I pleasantly wellcome you in my website, and I
                    have put my contact information in case you would like to contact me. Please read the bellow
                    instructuons
                    if you would like to continue. Thank you!
                </p>
            </div>
        </div>

        <div class="div-50 div-right mar-to-top">
            <div class="img-frame">
                <img class="img" src="../images/profile-pic.jpg">
            </div>
        </div>
        <div class="div-100 div-left">
            <div class="div-50 div-left">
                <div class="mar-to-left " id="text-ul">
                    <h2>What to expect from each Page <i class="fa fa-question-circle" aria-hidden="true"></i></h2>
                    <h3><i class="fa fa-home" aria-hidden="true"></i> Home Page:</h3>
                    <p class="par-font">
                    <ul>
                        <li><span>
                                This is where you are located right now, and it is considered the most important page of
                                any website.
                                From here, you can navigate to any page you would like by hovering over the menu icon
                                located in the
                                upper left of the page. You can choose the following: CV page, About me Page, Portfolio
                                Page.
                            </span></li>
                    </ul>
                    </p>
                    <h3><i class="fa fa-file-text-o" aria-hidden="true"></i> CV Page:</h3>
                    <ul>
                        <li><span>
                                This page will help you acknowledge my hard skills where you will be able to see a
                                summary on the projects that
                                I have worked on, my acedemic standing, a brief of my programming related skills
                                (languages and related coursework),
                                and finally some Extra cullicular activities that I engaged in.
                            </span></li>
                    </ul>

                    <h3><i class="fa fa-info-circle" aria-hidden="true"></i> About me Page:</h3>
                    <ul>
                        <li><span>
                                Here, you will get to know my soft skills and acknowledge my presonality. You will see a
                                set of the majarobale activities\
                                and hobbies that I love to go through, and you can access a gallery of photos for each.
                                I will be discussing each of my gaming hobby,
                                workout passion, my Computer Science desire, and finally my handwork hobby.
                            </span></li>
                    </ul>

                    <h3><i class="fa fa-archive" aria-hidden="true"></i> Portfolio Page:</h3>
                    <ul>
                        <li><span>
                                Now we can talk buisness! Here you can access both of my projects that I worked on. You
                                will get to know each in details, where
                                I will be providing a gallery of photos for each, in addition to all needed information
                                about every project.(What I have leared?
                                What tools I used? ...)
                            </span></li>
                    </ul>

                    <p class="par-font">
                        Now if you got to this point, I can gladly say you are intrested in knowing more about me, thus
                        I wellcome you to enjoy my website, and Please
                        feel free to contact me on any of the bellow contacts. Thank you and wellcome to my world!
                    </p>
                </div>
            </div>

            <div class="div-50 div-right">
                <div class="img-frame mar-to-top2">
                    <img class="img" src="../images/My Profile Pic.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="div-100 div-left" id="footer">
        <h3 class="mar-to-left align-center"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contact Information
        </h3>
        <div class="div-50 div-left">
            <p class="par-color mar-to-left align-center">
                <i class="fa fa-envelope-o right-box-info"></i> <a href="mailto:sari.abdulghani@lau.edu"
                    class="link-display">Sari.abdulghani@lau.edu</a>
                <br><br><br>
                <i class="fa fa-phone right-box-info"></i> <a href="tel:(+961) 78 903 727" class="link-display">+961 78
                    903 727 </a>
            </p>
        </div>
        <div class="div-50 div-left">
            <p class="par-color mar-to-left align-center">
                <i class="fa fa-map-signs right-box-info"></i>Al Hamra St., Beirut, Lebanon
                <br><br><br>
                <i class="bi bi-linkedin right-box-info"></i><a href="https://www.linkedin.com/in/sariabdulghani/"
                    class="link-display">linkedin.com/in/sariabdulghani</a>
            </p>
        </div>
    </div>

    <div id="footer2">
        <p>Copyright Ⓒ 2024 Sari Abdul Ghani. All rights Reserved</p>
    </div>
</body>