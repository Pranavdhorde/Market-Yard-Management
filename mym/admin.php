<?php
session_start();
error_reporting(0);
$b = ("Location: logout.php");


include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$market = $_POST['market'];
	$date = $_POST['date'];
	$olh = $_POST['olh'];
	$ola = $_POST['ola'];
    $oll = $_POST['oll'];
    $osh = $_POST['osh'];
    $osa = $_POST['osa'];
    $osl = $_POST['osl'];
    $ch = $_POST['ch'];
    $ca = $_POST['ca'];
    $cl = $_POST['cl'];
    $sbh = $_POST['sbh'];
    $sba = $_POST['sba'];
    $sbl = $_POST['sbl'];
    $wh = $_POST['wh'];
    $wa = $_POST['wa'];
    $wl= $_POST['wl'];

			$sql = "INSERT INTO auction(market, date, olh, ola, oll, osh, osa, osl, ch, ca, cl, sbh, sba, sbl, wh, wa, wl)
					VALUES ('$market', '$date', '$olh', '$ola', '$oll', '$osh', '$osa', '$osl', '$ch', '$ca', '$cl', '$sbh', '$sba', '$sbl', '$wh', '$wa', '$wl')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registration Successfully.')</script>";
				$market = "";
	            $date = "";
	            $olh = "";
	            $ola = "";
                $oll = "";
                $osh = "";
                $osa = "";
                $osl = "";
                $ch = "";
                $ca = "";
                $cl = "";
                $sbh = "";
                $sba = "";
                $sbl = "";
                $wh = "";
                $wa = "";
                $wl= "";
            	} else {
				echo "<script>alert('Woops! Something Went Wrong .')</script>";
			}
		
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/5beee37699.js" crossorigin="anonymous"></script>
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
                <li><a class="active" href="admin.php">HOME</a></li>
                <!-- <li><a href="#">AUCTION</a></li>
                <li><a href="#">TIME TABLE</a></li> -->

                <li><a href=""><i class="icon fa-solid fa-user"></i></a>
                    <div class="log-menu">
                        <ul>
                            <li>
                                <?php 
                                 if(!$_SESSION['username']){
                                   echo "<h4> welcome Admin </h4>";
                                 }
                                  else{
                                   echo "<h4> welcome ". $_SESSION['username'] ."</h4>";
                                 }
                                ?>
                            </li>
                            <li><a class="logout" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main class="background-image">

        <div class="auctionform ">
            <form action="" method="POST" class="oform">
                <h2>Auction Form</h2>
                Market:
                <select name="market" id="market" required>
                    <option value="">--Select Market--</option>
                    <option value="kopargaon">Kopargaon Market</option>
                    <option value="rahata">Rahata Market</option>
                    <option value="sanvatsar">Sanvatsar Market</option>
                    <option value="Shirsgaon">Shirsgaon Market</option>
                </select>
                Date:
                <input type="date" name="date" placeholder="Date" required><br>
                <center>
                    <table border="1">
                        <tr>
                            <th></th>
                            <th>Highest Price</th>
                            <th>Average Price</th>
                            <th>lowest Price</th>
                        </tr>
                        <tr>
                            <th>Onion Large:</th>
                            <td><input type="text" name="olh" placeholder="Highest Price" required></td>
                            <td><input type="text" name="ola" placeholder="Average Price" required></td>
                            <td><input type="text" name="oll" placeholder="lowest Price" required></td>
                        </tr>
                        <tr>
                            <th>Onion Small:</th>
                            <td><input type="text" name="osh" placeholder="Highest Price" required></td>
                            <td> <input type="text" name="osa" placeholder="Average Price" required></td>
                            <td> <input type="text" name="osl" placeholder="lowest Price" required></td>
                        </tr>

                        <tr>
                            <th>Corn : </th>
                            <td><input type="text" name="ch" placeholder="Highest Price" required></td>
                            <td> <input type="text" name="ca" placeholder="Average Price" required></td>
                            <td> <input type="text" name="cl" placeholder="lowest Price" required></td>
                        </tr>

                        <tr>
                            <th>Soya Bean :</th>
                            <td><input type="text" name="sbh" placeholder="Highest Price" required></td>
                            <td> <input type="text" name="sba" placeholder="Average Price" required></td>
                            <td> <input type="text" name="sbl" placeholder="lowest Price" required></td>
                        </tr>

                        <tr>
                            <th>Wheat : </th>
                            <td><input type="text" name="wh" placeholder="Highest Price" required></td>
                            <td> <input type="text" name="wa" placeholder="Average Price" required></td>
                            <td> <input type="text" name="wl" placeholder="lowest Price" required></td>
                        </tr>

                    </table>
                </center>
                <button name="submit">Register</a></button><br>
            </form>
        </div>


    </main>

    <footer>
        <p></p> Created By <a>PRD</a> |@2023 All rights reserved</p>
    </footer>
</body>

</html>