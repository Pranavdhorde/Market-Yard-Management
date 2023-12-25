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
                <li><a href="auction.php">AUCTION</a></li>
                <li><a class="active" href="timetable.php">TIME TABLE</a></li>
                <li><a href="about.php">ABOUT US </a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </nav>
    </header>

    <main class="background-image">

        <div class="inter">MARKET TIME TABLE</div>

        <section class="section2">

            <center>
                <div id="buttons">
                    <button class="btn" onclick="filterObjects('all')">All</button>
                    <button class="btn" onclick="filterObjects('kopargaon')">Kaporgaon</button>
                    <button class="btn" onclick="filterObjects('sanvatsar')">Sanvatsar</button>
                    <button class="btn" onclick="filterObjects('shirsgaon')">shirsgaon</button>
                    <button class="btn" onclick="filterObjects('rahata')">Rahata</button>
                </div>
            </center>

        </section>

        <div class="objects">

            <div class="box kopargaon">
                <center>
                    <h2>Kopargaon Market Timing</h2>
                    <table border="1" class="mtime">
                        <tr style="background-color:green;">
                            <th>Day</th>
                            <th colspan="3">Time</th>
                        </tr>
                        <tr>
                            <th>Sunday</th>
                            <td>9am to 12pm</td>
                            <td rowspan="7">-</td>
                            <td>3pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Monday</th>
                            <td>9am to 12pm</td>
                            <td>3pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Wednesday</th>
                            <td>9am to 12pm</td>
                            <td>3pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Thursday</th>
                            <td>9am to 12pm</td>
                            <td>3pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Friday</th>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Saturday</th>
                            <td>9am to 12pm</td>
                            <td>3pm to 5pm</td>
                        </tr>
                    </table>
                </center>
            </div>


            <div class="box sanvatsar">
            <center>
                    <h2>Sanvatsar Market Timing</h2>
                    <table border="1" class="mtime">
                        <tr style="background-color:green;">
                            <th>Day</th>
                            <th colspan="3">Time</th>
                        </tr>
                        <tr>
                            <th>Sunday</th>
                            <td>7am to 11am</td>
                            <td rowspan="7">-</td>
                            <td>2pm to 4pm</td>
                        </tr>
                        <tr>
                            <th>Monday</th>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            <td>7am to 11am</td>
                            <td>2pm to 4pm</td>
                        </tr>
                        <tr>
                            <th>Wednesday</th>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Thursday</th>
                            <td>7am to 11am</td>
                            <td>2pm to 4pm</td>
                        </tr>
                        <tr>
                            <th>Friday</th>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Saturday</th>
                            <td>7am to 11am</td>
                            <td>2pm to 4pm</td>
                        </tr>
                    </table>
                </center>

            </div>

            <div class="box shirsgaon">
            <center>
                    <h2>Shirsgaon Market Timing</h2>
                    <table border="1" class="mtime">
                        <tr style="background-color:green;">
                            <th>Day</th>
                            <th colspan="3">Time</th>
                        </tr>
                        <tr>
                            <th>Sunday</th>
                            <td>-</td>
                            <td rowspan="7">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Monday</th>
                            <td>10am to 12pm</td>
                            <td>2pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            <td>10am to 12pm</td>
                            <td>2pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Wednesday</th>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Thursday</th>
                            <td>10am to 12pm</td>
                            <td>2pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Friday</th>
                            <td>10am to 12pm</td>
                            <td>2pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Saturday</th>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </table>
                </center>

            </div>

            <div class="box rahata">
            <center>
                    <h2>Rahata Market Timing</h2>
                    <table border="1" class="mtime">
                        <tr style="background-color:green;">
                            <th>Day</th>
                            <th colspan="3">Time</th>
                        </tr>
                        <tr>
                            <th>Sunday</th>
                            <td>-</td>
                            <td rowspan="7">-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Monday</th>
                            <td>10am to 12pm</td>
                            <td>2pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            <td>11am to 1pm</td>
                            <td>3pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Wednesday</th>
                            <td>10am to 12pm</td>
                            <td>2pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Thursday</th>
                            <td>10am to 12pm</td>
                            <td>2pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Friday</th>
                            <td>10am to 12pm</td>
                            <td>2pm to 5pm</td>
                        </tr>
                        <tr>
                            <th>Saturday</th>
                            <td>10am to 12pm</td>
                            <td>2pm to 5pm</td>
                        </tr>
                    </table>
                </center>

            </div>


        </div>
        <script src="./js/scripts.js"></script>
    </main>

    <footer>
        <p></p> Created By <a>PRD</a> |@2023 All rights reserved</p>
    </footer>
</body>

</html>