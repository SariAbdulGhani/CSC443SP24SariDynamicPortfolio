<?php

?>

<div class="background-menu" id="header">
        <div class="div-30 div-left">
            <div id="dropdown-menu">
                <span><i class="ico menu-ico"></i>MENU</span>
                <div class="dropdown-content">
                    <ul>
                        <a href="Home_Page.php">
                            <li><i class="fa fa-home" aria-hidden="true"></i> Home Page</li>
                        </a>
                        <a href="CV.php">
                            <li><i class="fa fa-file" aria-hidden="true"></i> My CV</li>
                        </a>
                        <a href="Portfolio.php">
                            <li><i class="fa fa-archive" aria-hidden="true"></i> My Portfolio</li>
                        </a>
                        <a href="About_Me.php">
                            <li><i class="fa fa-male" aria-hidden="true"></i> About Me</li>
                        </a>
                        <a href="Contact_Us.php">
                            <li><i class="fa fa-info-circle" aria-hidden="true"></i> Contact Us</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="div-60 div-left">
            <div class="wellcome-div">
                <span>WELLCOME <?php echo $_SESSION["username"] ; ?> </span>
            </div>
        </div>
        <div class="div-10 div-left">
            <span> <a href="../index.php" class="wellcome-div">Logout: <i class="fa fa-sign-out" aria-hidden="true"></i> </a></span>
        </div>
    </div>