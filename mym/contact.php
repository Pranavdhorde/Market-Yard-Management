<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['mess'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['phone'];
	$comment = $_POST['message'];
    

			$sql = "INSERT INTO contact(name, email, mobile, comment)
					VALUES ('$name', '$email', '$mobile', '$comment')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Message Send Successfully.')</script>";
				$name = "";
	            $email = "";
	            $mobile = "";
	            $comment = "";
             
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>
        <nav>
            <div class="logo">MARKET<pp>YARD</pp>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="auction.php">AUCTION</a></li>
                <li><a href="timetable.php">TIME TABLE</a></li>
                <li><a href="about.php">ABOUT US </a></li>
                <li><a class="active" href="contact.php">CONTACT US</a></li>
            </ul>
        </nav>
    </header>

    <main class="background-image">

        <div class="contact ">
            <form action="" method="POST" class="formm">
                <h2>CONTACT US</h2>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Email Id" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <textarea name="message" rows="4" placeholder="How can we help you ?"></textarea>
                <button type="submit" name="mess">Send</button>
            </form>
        </div>
    </main>

    <footer>
        <p></p> Created By <a>PRD</a>
        |@2023 All rights reserved</p>
    </footer>
</body>

</html>