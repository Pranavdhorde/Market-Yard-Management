<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>
        <nav>
            <div class="logo">MARKET<pp>YARD</pp>
            </div>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a class="active" href="auction.php">AUCTION</a></li>
                <li><a href="timetable.php">TIME TABLE</a></li>
                <li><a href="about.php">ABOUT US </a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </nav>
    </header>

    <main class="background-image">
    <section class="section1">
            <h1>MARKET AUCTION</h1>
        </section>

        <!-- <div class="inter">MARKET </div> -->

        <section class="section2">

            <div id="buttons">
                <button class="btn" onclick="filterObjects('all')">All</button>
                <button class="btn" onclick="filterObjects('kopargaon')">Kopargaon</button>
                <button class="btn" onclick="filterObjects('sanvatsar')">Sanvatsar</button>
                <button class="btn" onclick="filterObjects('shirsgaon')">Shirsgaon</button>
                <button class="btn" onclick="filterObjects('rahata')">Rahata</button>
                <?php
                $date="2023-06-27";
                if(isset($_POST['submit']))
                {
                    $date = $_POST['datee'];
                }
                ?>
                <button class="btn" onclick="filterObjects('')">
                    <form action="" method="post">
                        <input type="date" name="datee">
                        <input type="submit" name="submit" value="submit">
                    </form>
                </button>
                <button class="btn" onclick="filterObjects('<?php echo $date;?>')"><?php echo $date;?></button>
            </div>

        </section>
        <br>
        <div class="objects">

            <?php
                $sql="SELECT * FROM `auction` WHERE 1";
                $result = mysqli_query($conn, $sql);
                if($result->num_rows >0)
                {
                    while($row=$result->fetch_assoc())
                    {    
            ?>
            <div class="box <?php echo $row["market"]?> <?php echo $row["date"]?>">
                <center>
                    <h2>Market : <?php echo $row["market"]?> &nbsp;&nbsp;&nbsp;&nbsp; Date : <?php echo $row["date"] ?>
                    </h2>


                    <table border="1" class="atable">
                        <tr>
                            <th></th>
                            <th style="background-color:green;">Highest Price</th>
                            <th style="background-color:yellow;">Average Price</th>
                            <th style="background-color:red;">lowest Price</th>
                        </tr>
                        <tr>
                            <th>Onion Large:</th>
                            <td><?php echo $row["olh"]?></td>
                            <td><?php echo $row["ola"]?></td>
                            <td><?php echo $row["oll"]?></td>
                        </tr>
                        <tr>
                            <th>Onion Small:</th>
                            <td><?php echo $row["osh"]?></td>
                            <td><?php echo $row["osa"]?></td>
                            <td><?php echo $row["osl"]?></td>
                        </tr>

                        <tr>
                            <th>Corn : </th>
                            <td><?php echo $row["ch"]?></td>
                            <td><?php echo $row["ca"]?></td>
                            <td><?php echo $row["cl"]?></td>
                        </tr>

                        <tr>
                            <th>Soya Bean :</th>
                            <td><?php echo $row["sbh"]?></td>
                            <td><?php echo $row["sba"]?></td>
                            <td><?php echo $row["sbl"]?></td>
                        </tr>

                        <tr>
                            <th>Wheat : </th>
                            <td><?php echo $row["wh"]?></td>
                            <td><?php echo $row["wa"]?></td>
                            <td><?php echo $row["wl"]?></td>
                        </tr>

                    </table>

                </center>

            </div>

            <?php
                     }
                 }
             ?>

        </div>
        <br>
        <script src="./js/scripts.js"></script>
    </main>

    <footer>
        <p></p> Created By <a>PRD</a> |@2023 All rights reserved</p>
    </footer>
</body>

</html>