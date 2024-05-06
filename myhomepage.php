<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Home Page</title>
        <link rel="stylesheet" href="myhomepagestyle.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<link href="https://db.onlinewebfonts.com/c/10d0b50da141372ab1f5ae8af6193f9e?family=Glosa+W01+Black" rel="stylesheet">
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
            <video autoplay loop muted>
                <source src="./images/Hogwart's.mp4" type="video/mp4">
            </video>
            <div class="container1">
                <div class="box">
                <img src="./images/Screenshot (110).png" alt="Person">
                  <p>"Rediscover the bonds of the past at our unforgettable reunion meet. Join us for a nostalgic journey and create new memories together!"</p>
                  <p>"Come & feel the extravaganza"</p>
                  <button class="btn">Know about it</button>
                </div>
              </div>
              <div class="container2">
                <h2 class="stories-title">Stories</h2>
                <div class="stories-container">
                  <div class="story-box">
                    <img src="./images/Screenshot 2023-08-29 064134.png" alt="Story 1">
                    <h3>Message From Board To The Alumni</h3>
                    <p>Read it,Know it and Cherish.</p>
                  </div>
                  <div class="story-box">
                    <img src="./images/Screenshot 2023-08-29 064349.png" alt="Story 2">
                    <h3>Me,Myself and AI</h3>
                    <p>AI has entered a new era. Here's how we stay Human</p>
                  </div>
                  <div class="story-box">
                    <img src="./images/pexels-nataliya-vaitkevich-6532373.jpg" alt="Story 3">
                    <h3>Celebrating Achievements</h3>
                    <p>Share your successes and hear about the accomplishments of others.</p>
                  </div>
                </div>
                <a class="see-more1" href="storiesextend.php">See More &#8594;</a>
              </div>
              <div class="container3">
                <h2 class="benefits-title">Benefits</h2>
                <div class="benefits-container">
                  <div class="benefit-box">
                    <img src="./images/campusstore1.jpg" alt="Benefit 1">
                    <h3>Discounts</h3>
                    <p>Alumni Membership provides
                        <b>Discount</b> on Items that are available
                        in <b>Campus Store</b></p>
                  </div>
                  <div class="benefit-box">
                    <img src="./images/scholarship1.jpg" alt="Benefit 2">
                    <h3>Scholarships</h3>
                    <p>Alumni Membership provides<b>Scholarship for Higher-Studies</b></p>
                  </div>
                  <div class="benefit-box">
                    <img src="./images/investment1.webp" alt="Benefit 3">
                    <h3>Investments</h3>
                    <p>Exclusive Investment in Projects of alumni by Board of Directors<br>T&C APPLY*</p></p>
                  </div>
                </div>
                <a class="see-more" href="benifitsextend.php">See More &#8594;</a>
              </div>
              <div class="foot">
                <h1 style="text-align:center; font-size:40px;color:gray;">Hogwart's Alumni Association</h1>
                <h2 style="text-align:center; font-size:20px;color:whitesmoke;">With You in your Curriculum,</h2>
                <h2 style="text-align:center; font-size:20px;color:whitesmoke;">And With You Beyond your curriculum</h2>
                <h3 style="text-align:center; font-size: 18px;color:gray;">Stay in Touch</h3>
            <span>
                <span><p style="text-align:left; font-size:15px;color:gray;">Designed & Maintained by Batch-13 Sec III-C &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
               &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a style="text-align:right; font-size:15px;color:gray;">&copy All Rights Reserved</a></p></span>
            </span>
        </div>
    </body>
</html>