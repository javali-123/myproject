<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="gallerycss.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
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
    <br>
    <br>
    <hr >
    <h1 class="h">GALLERY</h1>
    <hr>
    <div class="wrapper">
        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTqiig_8oaC17tRxKT5-e_dvVXhx_bKiFwjwP9aIeIJ1nzCjTCj" alt="">
        <img src="https://www.thehansindia.com/h-upload/uid/21128xw3qOBBM1G2h7VWHytm64ZS5tsqvdx7r6260308.jpg" alt="">
        <img src="https://images.indianexpress.com/2019/11/degree759.jpg" alt="">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7NZ-1baxdeBbPurh3fc2R086Dj__b0F2PtieW9f_9RxHmEy2xoByRX-YNafG9DPZlhmE&usqp=CAU" alt="">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNnZXrhQaA10NB1oJFQP325hROXucjlarC4A&usqp=CAU" alt="">
        <img src="https://images.pexels.com/photos/159775/library-la-trobe-study-students-159775.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        <img src="https://images.pexels.com/photos/5676744/pexels-photo-5676744.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        <img src="https://www.harvard.edu/media-relations/wp-content/uploads/sites/3/2021/03/112208_HY_JI_0906-scaled.jpg" alt="">
        <img src="https://www.harvard.edu/media-relations/wp-content/uploads/sites/3/2021/03/102012_HOCR_SE_543-scaled.jpg" alt="">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM7S_VzxON3MsamMpGN_S1jHCNjFJ4IdoLmmQ_p76UOJ0nQvgSrgtnrqMF1BSn2Or-OyU&usqp=CAU" alt="">
    </div>
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