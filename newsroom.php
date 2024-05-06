<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsroom</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
   <style>
    body{
        margin: 0px;
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
header {
    background-image: url("./images/news4.jpg");
    background-size: cover;
    text-align: center;
    color: rgb(255, 255, 255);
    padding: 30px 0; 
}
.header-text {
    font-size: 36px; 
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: bold;
    transition: color 0.3s;
}
.header-text:hover{
    color: rgb(97, 92, 92);
}
.news-article {
    clear: both;
    border: 1px solid #ddd;
    margin: 20px;
    padding: 20px;
    overflow: auto;
    background-color: #E0E1E4;
}

.news-image1 {
    float: left;
    margin-right: 20px;
    max-width: 100%;
    height: auto; 
    
}
.news-image2 {
    float: right;
    margin-right: 20px;
    max-width: 100%;
    height: auto; 
}
.news-content {
    flex-grow: 1;
}
.read-more {
    float: right;
    text-decoration: none;
    color: #0073e6;
    font-weight: bold;
    cursor: pointer;
}

.extended-content {
    display: none;
    margin-top: 10px;
    clear: both;
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
    <header>
        <h1 class="header-text">ALUMNI newsroom</h1>
    </header>
    <section class="news-article">
        <img src="./images/connect.jpeg" alt="News Image" width="200px" height="200px" class="news-image1">
        <div class="news-content">
            <h2>Gearing up for Placements | Alumni Panel Discussion by Department of CSE</h2>
            <p>The Department of Computer Science Engineering and the Directorate of External Relations have organized ‘Gearing up for Placements’, an alumni panel discussion on March 26, 2022. The purpose of the discussion was to facilitate insights and guidance on the best practices of preparing for placements. The alumni panelists shared their journeys, student experiences and answered the various queries posed by the students about their industry expertise, interview preparation, networking and more.</p>
            <a href="#" class="read-more" >Read More</a>
        <div class="extended-content">
            <p>To learn that 350 students had attended the panel discussion, gives us immense joy for being able to facilitate this much needed panel discussion.
            </p>
            <p>We are very thankful to the panelists of the event, Ms. Anjali Sharma (Class of 2021), Analyst at Morgan Stanley, Mr. Vijaya Manikanta, (Class of 2020), Software Development Engineer at Fortinet, Mr. Praveen Sai Sadasiva, (Class of 2020), Technology Consultant at Microsoft for their time and efforts to make this event possible.</p>
        </div>
        </div>
    </section>
    
    <section class="news-article">
        <img src="./images/2.jpeg" alt="News Image" width="200px" height="200px" class="news-image2">
        <div class="news-content">
            <h2>Let’s Connect - An Outreach Initiative by Department of Biotechnology</h2>
            <p>
                We are very happy to share that “Let’s Connect”, an alumni guest interaction session organized by the Department of Biotechnology in association with DoER, helped students gain direction and valuable insights on resume preparation, writing research papers, applying for internships and career opportunities after graduation</p>
            <a style="float:left;" href="#" class="read-more">Read More</a>
        <div class="extended-content">
            <br>
            <p>The event was held on March 2, 2022, and hosted Mr. Vinay Kumar T (Class of 2021, M.Sc Biotechnology) who is currently working with Stelis Biosource as a Technical Trainee.</p>
            <p>We thank Mr. Vinay Kumar T, Dr. B. Veerendra Kumar, Head of Department, Ms. Lavanya Gantyada, Student Coordinator and Mr. Abhishek Hemraj, Associate - External Relations for facilitating this interaction.</p>
        </div>
        </div>
    </section>

    <section class="news-article">
        <img src="./images/3.jpeg" alt="News Image" width="200px" height="200px" class="news-image1">
        <div class="news-content">
            <h2>Panel Discussion on 'Opportunities after Graduation' | Department of Aerospace Engineering</h2>
            <p>We are delighted to share with you that DoER in association with the Department of Aerospace Engineering, organized a panel discussion on ‘Opportunities after Graduation’ moderated by Mr. Arka Bhattacharya, Director- External Relations.</p>
            <a href="#" class="read-more">Read More</a>
        <div class="extended-content">
            <br>
            <p>The discussion shed light on some important aspects like pursuing higher education at world renowned universities, significance of curricular & co-curricular activities, current trends in the industry and the ways to acquire diverse work experience.</p>
            <p>We would like to convey our heartfelt appreciation to Mr Satya Prasad Maddula, Faculty Alumni Champion, Mr Bharadwaj Y S N, Student Coordinator and the Panelists for facilitating this enriching discussion.</p>
        </div>
        </div>
    </section>
    <section class="news-article">
        <img src="./images/Ai.jpeg" alt="News Image" width="200px" height="200px" class="news-image2">
        <div class="news-content">
            <h2>Experts discuss: Is AI the Future of Mental Health Care?</h2>
            <p>We are revolutionising how we deliver mental health care in order to address the enormous unmet need that exists in Australia.

                On 31 May, University of Melbourne and industry experts came together to share their insights with the alumni community on how AI technology could provide tangible and sustainable solutions in the field of mental health care.</p>
            <a style="float:left;" href="#" class="read-more">Read More</a>
        <div class="extended-content">
            <br>
            <p>146 alumni attended the panel discussion at the Ian Potter Auditorium in the Parkville campus’ Kenneth Myer Building, with more than 1200 alumni registering to watch the discussion online.</p>
            <p>Panel moderator and ABC journalist Natasha Mitchell kicked off the session by polling the audience. She asked, “Do you feel confident or apprehensive about a future where artificial intelligence and machine learning plays a role in delivering mental health support services?”

                The poll was almost split evenly, with 49% of alumni responding ‘confident’ and 51% ‘apprehensive’ through a link on their smartphones.
                
                With such a divided response, the expert panellists were eager to share their knowledge on what the intersection of AI and mental health care looks like now and into the future.</p>
        </div>
        </div>
    </section>
    
    <script>
        // Add an event listener to each "Read More" link
document.querySelectorAll('.read-more').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent the link from navigating

        // Find the extended content related to this link
        const extendedContent = this.parentElement.querySelector('.extended-content');

        // Toggle the display of the extended content
        if (extendedContent.style.display === 'none' || extendedContent.style.display === '') {
            extendedContent.style.display = 'block';
        } else {
            extendedContent.style.display = 'none';
        }
    });
});
    </script>
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
