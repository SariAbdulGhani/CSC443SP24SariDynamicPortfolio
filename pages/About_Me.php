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
        <h1 class="align-center">WELLCOME TO MY BIO</h1>
        <h3 class="align-center white">Here, you can see my soft skills and hobbies, and thus my real presonality!</h3>

    </div>
    <div class="content">
        <div class="div-100 div-left">
            <div class="div-50 div-left">
                <div class="div-right-box">
                    <h2 class="par-color align-center "><i class="fa fa-heartbeat" aria-hidden="true"></i> Workouts</h2>
                    <div class="div-100 div-right">
                        <div class="img-frame mar-left-2 max-img">
                            <img class="img" src="../images/Exersice outer cover.png">
                        </div>
                    </div>
                    <p class="par-font par-color line-spacing">
                        For me, exercising, and espicially "Calisthenics", is everything. I have started practicing
                        since 2020, where I couldn't even do one pushup! All
                        what was in my head that time is only "I CANNOT STOP". Thus, with this solid mentality, I worked
                        my-self really hard until today where I can do 120 push-ups with
                        different variations in under 20 minutes. <br><br>It never was easy to be sitting and
                        relaxing... but then suddenly getting up and do my workout. The thing is that I kept the
                        erge to train in my mind, where I always tell myself:"You cannot acctually live a day without
                        training". I could have gone rough on myself where a more specific schedule should have been
                        set so I can follow it. However, I'm just proud I didn't let myself up to the discouriging
                        thoughts . <br><br>In the last year, I started
                        doing body building where I'm going to the gym often. I really like growing muscles in there.
                        However, Calisthenics and body weight will always be my best choice
                        and one the most important things to do in my everyday life.
                    </p>
                </div>
            </div>

            <div class="div-50 div-left">
                <div class="div-right-box">
                    <p class="par-color align-center word-size">
                    <h2 class="par-color align-center "><i class="fa fa-gamepad" aria-hidden="true"></i> Gaming</h2>
                    <div class="div-100 div-right">
                        <div class="img-frame mar-left-2 max-img">
                            <img class="img" src="../images/Gaming outer cover.png">
                        </div>
                    </div>
                    <p class="par-font par-color line-spacing">
                        Oh, surely I will talk about this. I started this hobby since I was about 7 years old, and I
                        carry it till today. Gaming is considered a crucial part of my free time. For some
                        people, going on to a resturant or to some cinema theater in their free time is their choice.
                        However, for me, gaming, gaming and also gaming is the choise I go to when having my free time.
                        I really find it relaxing and entertaining just sitting on that chair, turning on my favorite
                        game, and spend happily my weekend.
                        <br><br>So simply, this hobby has been with through since the dawn. I also empowered my english
                        language by having conversations all day with starngers in in-game chat. So this hobby
                        not only fills my free time, but also helps me in my communcation skills.
                        <br><br>Just for extra info, I like to play some multiplayer games, but also went through many
                        storymode games. In the end, a game is a game and I would love this hobby to stay with me
                        forever :)
                    </p>
                    </p>
                </div>
            </div>
        </div>
        <div class="div-100 div-left">
            <div class="div-50 div-left">
                <div class="div-right-box">
                    <p class="par-color align-center word-size">
                    <h2 class="par-color align-center line-spacing"><i class="fa fa-code" aria-hidden="true"></i>
                        Computer Science</h2>
                    <div class="div-100 div-right">
                        <div class="img-frame mar-left-2 max-img">
                            <img class="img" src="../images/CS outer cover.png">
                        </div>
                    </div>
                    <p class="par-font par-color line-spacing">
                        Now I know this section should only focus on my soft skills, but believe me I will. I'm not
                        going to talk here about some nerdy terms related to CS, but
                        rather my actual passion towards it. This programming thing actually makes me happy, where I
                        dont find myself obliged to do it, rather I do it for pleasure.
                        It doesn't stand in my life as an obligation to just do and then to earn money. I just find it
                        great sitting behind the screen and do some coding.
                        <br><br>It even became an everyday habit, where I just have to code something in an OOP
                        language, or another type of languages as I'm doing right now.
                        So actually, it became even a hobby sometimes to go on and try some hard question related to
                        algorithims, just to test my real skills and have fun at the same time.
                    </p>
                    </p>
                </div>
            </div>

            <div class="div-50 div-left">
                <div class="div-right-box">
                    <h2 class="par-color align-center line-spacing"><i class="fa fa-hand-paper-o"
                            aria-hidden="true"></i> HandWork/Crafting</h2>
                    <div class="div-100 div-right">
                        <div class="img-frame mar-left-2 max-img">
                            <img class="img" src="../images/HandWork outer cover.png">
                        </div>
                    </div>
                    <p class="par-font par-color line-spacing">
                        Oh, now comes the really interesting part. I discovered this hobby since I was about 10 years
                        old. I used to practice this hobby everytime I had to go to my Grandmother's house.
                        We had a backyard where I used to set up my wood-crafting workshop. The first time I tried it
                        was with my Grandfather's guideneness, and later ( when I turned 15 yo ) I started doing it by
                        myself.
                        <br><br>Basically, I crafted small chairs (as shown in the gallery), where they can be used to
                        sit on, or put objects onto them. I also crafted (the last time) a house for a cat, also two
                        houses for
                        birds that can be attached to trees. Thus, I had really fun and interesting experiences with
                        working with wood, nails and hammers! Certainly, I see potential in the future to continue this
                        hobby that
                        needs focus,and alot of patience.
                    </p>

                </div>
            </div>

            <h2 class="align-center">Gallery related to my soft skills:</h2>


            <div class="align-center">
                <div class="thumb">
                    <a href="#Open_in_Same_page1" class="point_on">
                        <img src="../images/About me Images/Photo1Thumb.png">
                    </a>
                </div>

                <div class="thumb">
                    <a href="#Open_in_Same_page2" class="point_on">
                        <img src="../images/About me Images/Photo2Thumb.png">
                    </a>
                </div>

                <div class="thumb">
                    <a href="#Open_in_Same_page3" class="point_on">
                        <img src="../images/About me Images/Photo3Thumb.png">
                    </a>
                </div>

                <div class="thumb">
                    <a href="#Open_in_Same_page4" class="point_on">
                        <img src="../images/About me Images/Photo4Thumb.png">
                    </a>
                </div>

                <div class="thumb">
                    <a href="#Open_in_Same_page5" class="point_on">
                        <img src="../images/About me Images/Photo5Thumb.png">
                    </a>
                </div>

                <div class="thumb">
                    <a href="#Open_in_Same_page6" class="point_on">
                        <img src="../images/About me Images/Photo6Thumb.png">
                    </a>
                </div>

            </div>

            <div id="Open_in_Same_page1" class="background">
                <a href="">
                    <div class="Back-button">Back to Gallery</div>
                </a>
                <div class="background2">
                    <img src="../images/About me Images/Photo1.jpeg">
                </div>
            </div>

            <div id="Open_in_Same_page2" class="background">
                <a href="">
                    <div class="Back-button">Back to Gallery</div>
                </a>
                <div class="background2">
                    <img src="../images/About me Images/Photo2.jpeg">
                </div>
            </div>

            <div id="Open_in_Same_page3" class="background">
                <a href="">
                    <div class="Back-button">Back to Gallery</div>
                </a>
                <div class="background2">
                    <img src="../images/About me Images/Photo3.jpg">
                </div>
            </div>

            <div id="Open_in_Same_page4" class="background">
                <a href="">
                    <div class="Back-button">Back to Gallery</div>
                </a>
                <div class="background2">
                    <img src="../images/About me Images/Photo4.jpeg">
                </div>
            </div>

            <div id="Open_in_Same_page5" class="background">
                <a href="">
                    <div class="Back-button">Back to Gallery</div>
                </a>
                <div class="background2">
                    <img src="../images/About me Images/Photo5.jpeg">
                </div>
            </div>

            <div id="Open_in_Same_page6" class="background">
                <a href="">
                    <div class="Back-button">Back to Gallery</div>
                </a>
                <div class="background2">
                    <img src="../images/About me Images/Photo6.jpeg">
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
                        <i class="fa fa-phone right-box-info"></i> <a href="tel:(+961) 78 903 727"
                            class="link-display">+961 78 903 727 </a>
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
    </div>
    <div id="footer2">
        <p>Copyright Ⓒ 2024 Sari Abdul Ghani. All rights Reserved</p>
    </div>
</body>

</html>