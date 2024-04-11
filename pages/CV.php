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
    <div class="content" id="text-ul">
        <div class="div-30 div-left">
            <div class="img-frame">
                <img class="img" src="../images/profile-pic.jpg">
            </div>
        </div>

        <div class="div-40 div-left">
            <h1>Sari Abdul Ghani</h1>
            <h3>Computer Science Student</h3>
            <p class="par-font pad-to-right">A passionate CS student of 1+ years of experience in the feild of
                programming. Through my journey, I gained significant coding skills and most importantly the faith and
                love in what I'm doing. With the continued and persistent hardwork, I believe in acheiving higher places
                and reaching new checkpoints in my life.</p>
        </div>

        <div class="div-30 div-left">
            <div class="div-right-box">
                <p class="par-color">
                    <br>
                    <i class="fa fa-envelope-o right-box-info"></i> <a href="mailto:sari.abdulghani@lau.edu"
                        class="link-display">Sari.abdulghani@lau.edu</a>
                    <br><br><br>
                    <i class="fa fa-phone right-box-info"></i> <a href="tel:(+961) 78 903 727" class="link-display">+961
                        78 903 727 </a>
                    <br><br><br>
                    <i class="fa fa-map-signs right-box-info"></i>Beirut, Lebanon
                    <br><br><br>
                    <i class="bi bi-linkedin right-box-info"></i><a href="https://www.linkedin.com/in/sariabdulghani"
                        class="link-display">linkedin.com/in/sariabdulghani</a>
                    <br><br><br>
                </p>
            </div>
        </div>


        <div class="div-100 div-left">

            <div class="div-70 div-left">




                <h2 class="mar-to-left"><i class="fa fa-institution" style="font-size: 50px;"></i> EDUCATION</h2>
                <div class="mar-to-left div-100 div-left">
                    <div class="div-100 div-left">
                        <div class="div-70 div-left">
                            <h3 class="mar-to-left">Lebanese American University, Beirut, Lebanon</h3>
                        </div>
                        <div class="div-30 div-right">
                            <h5 class="div-right date-placing">Expected Graduation June 2025</h5>
                        </div>
                    </div>

                    <div class="div-100 div-left">
                        <h4 class="mar-to-left">Bachelor in Computer Science</h4>
                        <p class="mar-to-left mar-to-top">CGPA: 3.88</p>
                    </div>
                </div>










                <div class="div-100 div-left">
                    <h2 class="mar-to-left"> <i class="fa fa-briefcase" style="font-size: 50px;"></i> PROJECTS COMPLETED
                    </h2>
                    <h3 class="mar-to-left">Database Managment System Project</h3>
                    <h4 class="mar-to-left"> <i class="fa fa-plane" style="font-size:38px;"></i> Fly Haraty</h4>
                    <div class=" div-70 div-left mar-to-bottom">
                        <h5 class="mar-to-left">September-December 2023</h5>
                    </div>
                    <div class=" div-30 div-right mar-to-bottom">
                        <h5 class="p-right">Beirut, Lebanon</h5>
                    </div>

                    <ul class="ul-text">
                        <li class="li-text"><span> Designed and implemented a full database management system following
                                the main steps
                                starting from conceptual model and finishing with the physical model.</span></li>
                        <li class="li-text"><span>First, we (the project group) started with the Entity-Relation Model
                                where we developed 10
                                entities and 12 relationships, where each was explained and linked with other
                                entities.</span></li>
                        <li class="li-text"><span>Second, we transformed the ER model into a Relational model, which
                                basically consists
                                of pure tables(relations), and thus each entity and relationship became a
                                relation.</span></li>
                        <li class="li-text"><span>Third, we moved into implementation stage, where each relation was
                                created, with all its
                                related information(i.e. domains).</span></li>
                        <li class="li-text"><span>Afterwards, we tested the SQL relations by desiging 10
                                interesting/complex queries, which then showed
                                to be working as intended.</span></li>
                        <li class="li-text"><span>Finally, we applied the "Database Normalization Proccess" to the
                                relations, and thus ended
                                with our full implemented Database.</span></li>
                    </ul>


                    <h3 class="mar-to-left">Computer Organization Project</h3>
                    <h4 class="mar-to-left"> <i class="fa fa-cogs" style="font-size:36px;"></i> RISC Processor</h4>
                    <div class=" div-70 div-left mar-to-bottom">
                        <h5 class="mar-to-left">February-May 2023</h5>
                    </div>
                    <div class="div-30 div-right mar-to-bottom">
                        <h5 class="p-right">Beirut, Lebanon</h5>
                    </div>

                    <ul class="ul-text">
                        <li class="li-text"><span> Designed and implemented a RISC Processor that can proccess up to six
                                instruction which are:
                                add, and, or, li, lw, sw.</span></li>
                        <li class="li-text"><span> The Simulated proccessor was implemented using Java, where it took as
                                input RISC instructions
                                and showed in the output the register file content after executing them. </span></li>
                        <li class="li-text"><span> The project was implemented based on the availability of 8 regisers.
                            </span></li>
                        <li class="li-text"><span> The program followed the 4 main control flow stages: Fetch, Decode,
                                Execute, and Write back.</span></li>
                        <li class="li-text"><span> The project also included a design phase report answering some
                                questions.</span></li>
                    </ul>








                    <h2 class="mar-to-left"> <i class="fa fa-heartbeat" style="font-size:50px"></i> EXTRACURRICULAR
                        ACTIVITIES</h2>

                    <ul>
                        <div class="div-70 div-left">
                            <li class="li-text"><span> Took part in the Lebanese/Russian Sport and Historical
                                    Competition: Zarnitsa</span></li>
                        </div>
                        <div class="div-30 div-right">
                            <h5 class="div-right mar-to-left date-placing">May 2019</h5>
                        </div>

                        <div class="div-70 div-left">
                            <li class="li-text"><span> Competed in the Russian Novel Reading Contest: Alive
                                    Classic.<br><br><br></span></li>
                        </div>
                        <div class="div-30 div-right">
                            <h5 class="div-right mar-to-left date-placing">March 2018</h5>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="div-30 div-left">
                <div class="div-right-box">
                    <br>
                    <h2 class="h2-for-box"><i class="fa fa-cogs icon" style="font-size:48px;"></i> SKILLS</h2>
                    <br><br>
                    <div class="listing-info">Object Oriented Programming</div>
                    <br><br>
                    <div class="listing-info">Objects and Data Abstraction</div>
                    <br><br>
                    <div class="listing-info">Algorithims and Data Structures</div>
                    <br><br>
                    <div class="listing-info">Computer Organization</div>
                    <br><br>
                    <div class="listing-info">Operating Systems</div>
                    <br><br>
                    <div class="listing-info">Database Managment Systems</div>
                    <br><br>


                    <h2 class="h2-for-box"><i class="fa fa-file-text icon" style="font-size:48px;"></i> CERTIFICATES
                    </h2>
                    <br>
                    <p class="par-color"> 2 CISCO Certified Courses:<br>
                    <ul>
                        <li class="li-text"><span>
                                <p class="par-color p-ind">Introduction to Cyber Security</p>
                            </span></li>
                        <li class="li-text"><span>
                                <p class="par-color p-ind">Cyber Security Essentials</p>
                            </span></li><br>
                    </ul>
                    </p>

                    <h2 class="h2-for-box"><i class="fa fa-language icon" style="font-size:48px;"></i> LANGUAGES</h2>
                    <p class="par-color">Fluent in Arabic, English and Russian<br><br>

                    <div class="div-50 div-left">
                        <div class="listing-info ">Java</div>
                    </div>
                    <div class="div-50 div-left">
                        <div class="listing-info ">Python</div>
                    </div> <br><br><br><br>

                    <div class="div-50 div-left">
                        <div class="listing-info ">C/C++</div>
                    </div>
                    <div class="div-50 div-left">
                        <div class="listing-info ">HTML/CSS</div>
                    </div> <br><br><br><br>


                    <div class="div-50 div-left">
                        <div class="listing-info ">JavaScript</div>
                    </div>
                    <div class="div-50 div-left">
                        <div class="listing-info ">SQL</div>
                    </div> <br><br><br><br>

                </div>

            </div>

        </div>
    </div>

    <div id="footer2">
        <p>Copyright Ⓒ 2024 Sari Abdul Ghani. All rights Reserved</p>
    </div>

</body>

</html>