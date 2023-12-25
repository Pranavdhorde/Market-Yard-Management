<?php
session_start();
error_reporting(0);

$a = ("Location: loging.php");
$b = ("Location: logout.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/5beee37699.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>
        <nav>
            <div class="logo">MARKET
                <pp>YARD</pp>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <ul>
                <li><a class="active" href="home.php">HOME</a></li>
                <li><a href="auction.php">AUCTION</a></li>
                <li><a href="timetable.php">TIME TABLE</a></li>
                <li><a href="about.php">ABOUT US </a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                <li><a href=""><i class="icon fa-solid fa-user"></i></a>
                    <div class="log-menu">
                        <ul>
                            <li>
                                <?php 
                                   if(!$_SESSION['username']){
                                    echo "<h4> welcome User </h4>";
                                ?>

                            <li><a class="logout" href="login.php">Login</a></li>
                            <li><a class="logout" href="adminlogin.php">Admin</a></li>
                            <?php  
                                  }
                                   else{
                                   echo "<h4> welcome ". $_SESSION['username'] ."</h4>";
                                ?>
                            <li><a class="logout" href="logout.php">Logout</a></li>
                            <?php
                                  }
                                ?>
                </li>
            </ul>
            </div>
            </li>
            </ul>
        </nav>
    </header>
    <main class="background-image">

        <div class="div1">

            <div class="boxpost">
                <div class="boxp1">
                    <i class="user fa-solid fa-circle-user"></i>
                    <div class="iconn">
                        <b>Pandurang Tambekar</b><br>
                        Maharashtra | Kolhapur | Bhudargad<br>
                        29 June 2023
                    </div><br>
                </div>
                <img class="postimg" src="./img/agri1.webp"><br>
                <table border="1" class="lcs">
                    <tr>
                        <th><i class="fa-sharp fa-solid fa-thumbs-up"></i></th>
                        <th><i class="fa-solid fa-comment"></i></th>
                        <th><i class="fa-solid fa-share"></i></th>
                    </tr>
                </table>
            </div>


            <div class="boxpost">
                <div class="boxp1">
                    <i class="user fa-solid fa-circle-user"></i>
                    <div class="iconn">
                        <b>Nana Pandit</b><br>
                        Maharashtra | Kolhapur | Bhudargad<br>
                        27 June 2023
                    </div><br>
                </div>
                <img class="postimg" src="./img/agri2.jpg"><br>
                <table border="1" class="lcs">
                    <tr>
                        <th><i class="fa-sharp fa-solid fa-thumbs-up"></i></th>
                        <th><i class="fa-solid fa-comment"></i></th>
                        <th><i class="fa-solid fa-share"></i></th>
                    </tr>
                </table>
            </div>

            <div class="boxpost">
                <div class="boxp1">
                    <i class="user fa-solid fa-circle-user"></i>
                    <div class="iconn">
                        <b>Shyam Kajale</b><br>
                        Maharashtra | Kopargaon | Kanhegaon<br>
                        25 June 2023
                    </div><br>
                </div>
                <img class="postimg" src="./img/agri3.jpeg"><br>
                <table border="1" class="lcs">
                    <tr>
                        <th><i class="fa-sharp fa-solid fa-thumbs-up"></i></th>
                        <th><i class="fa-solid fa-comment"></i></th>
                        <th><i class="fa-solid fa-share"></i></th>
                    </tr>
                </table>
            </div>

        </div>


    </main>


    <footer>
        <p></p> Created By <a>PRD</a> |@2023 All rights reserved</p>
    </footer>

</body>

</html>