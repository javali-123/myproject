<!DOCTYPE html>
<html>
<head>
    <title>Alumni Directory</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
    <style>
    /* Your CSS styles for the navbar, header, and other elements here */
    /* ... */

    body {
        background-image: url('C:\Users\manis\Downloads\alumni.jpeg');
    }

    .foot {
        padding: 10px;
        background-color: black;
    }

    .navbar {
        background-color: #333;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
        font-size: larger;
    }

    /* Style the logo */
    .logo img {
        height: 120px;
        width: 120px;
        object-fit: cover;
        border-radius: 50%;
    }

    /* Style the navigation links */
    .links ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .links li {
        margin-right: 20px;
    }

    .links a {
        color: white;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .links a:hover {
        color: #ddd;
    }

    /* Style the user icon and input */
    .text input[type="text"] {
        text-align: end;
        border: none;
        background-color: #333;
        padding: 8px;
        border-radius: 4px;
        color: white;
    }

    .text span {
        vertical-align: middle;
        margin-left: 10px;
        height: 20px;
        width: 20px;
        color: white;
    }

    /* Clear floats after the navigation bar */
    .navbar:after {
        content: "";
        display: table;
        clear: both;
    }

    main {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 20px;
    }

    .alumni-profile {
        border: 1px solid #ccc;
        padding: 20px;
        margin: 10px;
        max-width: 500px;
        flex: 0 1 calc(33.33% - 20px);
        display: flex;
        align-items: center;
    }

    .styled-submit {
        background-color: #3498db;
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        font-size: 16px;
        width: 200px;
        height: 40px;
        transition: background-color 0.3s ease;
    }

    .alumni-photo img {
        border-radius: 10%;
    }

    .alumni-photo {
        flex: 0 0 100px;
        margin-right: 20px;
    }

    #search-input {
        font-size: 18px;
        padding: 10px;
        width: 300px;
    }
    </style>
</head>
<body>
    <div class="navbar">
                <div class="logo">
                    <a><img src="./images/hglogo1.png"></a>
                </div>
                <div class="links">
                    <nav>
                        <ul>
                        <li><a href="myhomepage.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="newsroom.php">News Room</a></li>
                        <li><a href="testimonals.php">Testimonals</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="aldir.php">Alumni Directory/Connect</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="text">
            <a><input type="text" id="profileField" name="username" value="<?php session_start(); echo isset($_SESSION['username']) ? $_SESSION['username'] : 'My Profile';
            ?>" disabled>
            <span class="material-icons-outlined">
                account_circle
            </span>
            </a>
                    &emsp;&emsp;&emsp;&emsp;<a style="color: white;text-decoration: none;font-family: 'Roboto', sans-serif;font-weight: 500;transition: color 0.3s ease;"  href="index.php">Logout</a>
        </div>
            </div>
    <header>
        <h1>Alumni Directory</h1>
        <form method="POST" action="search.php">
        <div id="search-form">
            <input type="text" id="search-input" name="searchq" placeholder="Search by name...">
            <button type="submit" name="search" class="styled-submit">Search</button>
        </div>
        </form>
    </header>

    <main>
        <?php
        // Connect to the MySQL database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "demophp";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // SQL query to retrieve alumni data
        $sql = "SELECT * FROM registered";
        $result = mysqli_query($conn, $sql);

        // Loop through the alumni data and generate profiles
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="alumni-profile">';
            echo '<div class="alumni-photo">';
            $imageData = $row['img'];
            $base64Image = base64_encode($imageData);
            echo '<img src="data:image/jpeg;base64,' . $base64Image . '" alt="Alumni Photo" style="width: 200px; height: 150px;">';
            echo '</div>';
            echo '<div class="alumni-details">';
            echo '<h3>Reg No: ' . $row['Regd_No'] . '</h3>';
            echo '<p>Email: ' . $row['Email'] . '</p>';
            echo '<a href="' . $row['LinkedIn'] . '">LinkedIn Profile</a>';
            echo '</div>';
            echo '</div>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </main>
    <div class="foot">
        <h1 style="text-align:center; font-size:40px;color:gray;">Hogwart's Alumni Association</h1>
        <h2 style="text-align:center; font-size:20px;color:whitesmoke;">With You in your Curriculum,</h2>
        <h2 style="text-align:center; font-size:20px;color:whitesmoke;">And With You Beyond your curriculum</h2>
        <h3 style="text-align:center; font-size: 18px;color:gray;">Stay in Touch</h3>
    <span>
        <span><p style="text-align:left; font-size:15px;color:gray;">Designed & Maintained by Batch-13 Sec III-C &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a style="text-align:right; font-size:15px;color:gray;">&copy All Rights Reserved</a></p></span>
    </span>
    </div>
</body>
</html>
