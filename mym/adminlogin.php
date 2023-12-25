<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admins WHERE email='$email' AND pass='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: admin.php");
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
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
                <!-- <li><a href="home.php">HOME</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="services.html">SERVICES</a></li>
                <li><a href="contact.html">CONTACT US</a></li> -->
            </ul>
        </nav>
    </header>

    <main class="background-image">
        <div class="contact ">
            <form action="" method="POST" class="formm">
                <h2> Admin Login</h2>
                <input type="email" name="email" placeholder="Email Id" value="<?php echo $email; ?>" required>
                <input type="password" name="password" placeholder="password" value="<?php echo $_POST['password']; ?>"
                    required>

                <button name="submit">Login</button>
                <p class="login-text">User <a href="index.php">Login Here</a></p>
            </form>
        </div>

    </main>

    <footer>
        <p></p> Created By <a>PRD</a>
        |@2023 All rights reserved</p>
    </footer>
</body>

</html>