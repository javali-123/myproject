<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
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
  h1{
    text-align: center;
  }
  image{
    text-align: right;
  }
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    background-color: #f0f0f0;
  }
  
  .container {
    max-width:100%;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  .header {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .image {
    text-align: center;
    margin-bottom: 10px;
  }
  
  .image img {
    max-width: 100%;
    height: auto;
  }
  
  .subheading {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .content {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 20px 0;
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
  }
  
  .content-item {
    flex: 1;
    text-align: center;
  }
  .content-box {
    border: 1px solid #ddd;
    padding: 20px;
    margin: 10px;
    background-color: white;
    flex-basis: calc(50% - 20px);
    box-sizing: border-box;
  }

  /* Additional styles for smaller screens */
  @media screen and (max-width: 600px) {
    .content {
      display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    grid-gap: 20px;

      flex-direction: column;
    }

    .content-box {
      flex-basis: 100%;
      border: 1px solid #ddd;
    padding: 20px;
    background-color: white;
    box-sizing: border-box;
    }
  }
  .foot{
    padding:10px;
    background-color: black;
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
  <div class="container">
    <h1><ins>ABOUT US</ins></h1>
    
    <div class="image">
      <img src="images/WT2.jpg" width="1000">
    </div>
    
    <div class="subheading">
      <h2>See What's in Store</h2>
      <p>Our Mission is all about recahing,serving and engaging Hogwards Alumni and Students.It provides a wide range of offerings and progrmming to support you at every stage of your Hogwards Jouney ,both as a Student and as an alum.</p>
    </div>
  
    
    <div class="content">
      <img src="./images/WT5.jpg">
      <div class="content-item">
        <h3>Foster Relationships</h3>
        <p>Our goal is to build strong and lasting relationships with our customers.</p>
      </div>
      
      <div class="content-item">
        <h3>Build Communities</h3>
        <p>We believe in creating communities around shared interests and passions.</p>
      </div>
    </div>
  
    <div class="content">
      <div class="content-item">
        <h3>Connect Alumni</h3>
        <p>Join our alumni network to connect, collaborate, and support each other.</p>
      </div>
      
      <div class="content-item">
        <h3>Inspire Curiosity</h3>
        <p>Experience a wide range of benefits designed to enhance your alumni journey.</p>
      </div>
      <img src="./images/WT6.jpg" width="400px">
    </div>
    
    <div class="content">
      <img src="./images/WT7.jpg" width="400px">
      <div class="content-item">
        <h3>Make a Difference</h3>
        <p>Feed your curiosity by engaging in discussions that challenge conventional thinking.</p>
      </div>
      
      <div class="content-item">
        <h3>Enhance Alumni Life</h3>
        <p>Discover inspiration and innovative ideas through interactions with our community.</p>
      </div>
    </div>
    <div class="subheading">
      <h2>What We Value</h2>
      <p>We have a few core values and ideals that guide us in our path of service towards each other and the alumni community.</p>
      <div class="content">
        <img src="./images/WT8.jpg" width="300px">
        <div class="content-box">
          <h3>Our People</h3>
          <p>We care for and respect one another professionally and personally,acknowledging that while our work is important.</p>
        </div>
        <div class="content-box">
          <h3>Excellence</h3>
          <p>We strive to be outstanding in all that we do, both as individuals and as an organization  on learning and continuous improvement.</p>
        </div>
      </div>
  
      <div class="content">
        <div class="content-box">
          <h3>Diversity,Equity & Inclusion </h3>
          <p>We strive to be a safe,fair,open and wonderfully diverse community in which differences are celebrated and staff members  can be authentically themselves &contribute meaningfully. </p>
        </div>
        <div class="content-box">
          <h3>Integrity</h3>
          <p>We expect honesty, transparency, trust, accountability and respect for others, both personally and professionally, as we endeavor always to comport ourselves in an appropriate and in an ethical manner.</p>
        
        </div>
        <img src="./images/WT9.jpeg" width="300px" height="300">
      </div>  
      <div class="content">
        <img src="./images/WT10.jpeg" width="300px">
        <div class="content-box">
          <h3>Innovation</h3>
          <p>We look for new ideas and better ways to accomplish our mission; accept the occasional failure as a necessary part of improvement; and applaud original thinkers who are courageous, bold and creative in both big and small ways.</p>
        </div>
  
        <div class="content-box">
          <h3>The Greater Good</h3>
          <p>We endeavor to “own the whole” by embracing collaboration and thinking beyond our individual, departmental and organizational responsibilities, as we care for the success for that of all our Hogward colleagues.</p>
        </div>
      </div>
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