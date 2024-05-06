<html>

<head>
    <title>Events1</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
    <style>
        body {
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

        .banner {
            position: relative;
            width: 100%;
            height: 500px;
        }

        .banner img {
            object-fit: cover;
        }

        .banner .text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            margin-top: 50px;
        }

        .banner h1 {
            font-size: 48px;
        }

        .banner p {
            font-size: 24px;
        }

        .banner button {
            margin: 10px;
            padding: 10px;
            border: none;
            background-color: white;
            color: red;
        }

        .box {
            align-items: center;
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 100%;
            /* max-width: 800px; */
            padding: 5px;
            background: transparent;
            
            font-family: Arial, sans-serif;
            color: white;
            line-height: 1.4;
            margin-left: 20px;
            transform: translateY(32%);
        }

        .blah {
            padding: 5px;
            font-family: Arial, sans-serif;
            font-size: 20px;
            border-radius: 30px;
            color: #000;
            background-color: rgba(177, 177, 177,0.4);
            transform: translateY(120%);
        }

        .blah button {
            color: white;
            background-color: #000;
            border-radius: 30px;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .text {
            font-size: 20px;
            padding-left: 20px;
        }

        body .container1,
        body .container2 {
            max-width: 100vw;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 35px;
            margin: 0 auto;
            padding: 40px 0;
        }

        body .container1 .card,
        body .container2 .card {
            position: relative;
            width: 450px;
            height: 400px;
            margin: 0 auto;
            background: #000;
            border-radius: 15px;

        }

        body .container1 .card .face,
        body .container2 .card .face {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        body .container1 .card .face.face1,
        body .container2 .card .face.face1 {
            box-sizing: border-box;
            padding: 20px;
        }

        body .container1 .card .face.face1 h2,
        body .container2 .card .face.face1 h2 {
            margin: 0;
            padding: 0;
        }

        body .container1 .card .face.face1 .java,
        body .container2 .card .face.face1 .java {
            background-color: #fffc00;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        body .container1 .card .face.face1 .python,
        body .container2 .card .face.face1 .python {
            background-color: #00fffc;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        body .container1 .card .face.face1 .cSharp,
        body .container2 .card .face.face1 .cSharp {
            background-color: #fc00ff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        body .container1 .card .face.face1 .inno,
        body .container2 .card .face.face1 .inno {
            background-color: #FFF8DC;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        body .container1 .card .face.face2,
        body .container2 .card .face.face2 {
            transition: 0.5s;
        }

        body .container1 .card .face.face2 h2,
        body .container2 .card .face.face2 h2 {
            margin: 0;
            padding: 0;
            font-size: 3em;
            color: #fff;
            transition: 0.5s;
            z-index: 10;
        }

        body .container1 .card:hover .face.face2,
        body .container2 .card:hover .face.face2 {
            height: 60px;
        }

        body .container1 .card:hover .face.face2 h2,
        body .container2 .card:hover .face.face2 h2 {
            font-size: 1.5em;
        }

        body .container1 .card:nth-child(1) .face.face2 {
            background-image: url('./images/cri.jpeg');
            background-size: 45em;
            border-radius: 15px;
        }

        body .container1 .card:nth-child(2) .face.face2 {
            background-image: url('./images/confe.jpeg');
            background-size: 48em;
            border-radius: 15px;
        }

        body .container2 .card:nth-child(1) .face.face2 {
            background-image: url('./images/farewell.jpeg');
            background-size: 45em;
            border-radius: 15px;
        }

        body .container2 .card:nth-child(2) .face.face2 {
            background-image: url('./images/innov1.jpeg');
            background-size: 48em;
            border-radius: 15px;
        }

        .maroon1 {
            background-color: maroon;
            color: white;
            padding: 70px;
        }
        .foot{
    padding:10px;
    background-color: black;
}
    </style>
    <meta charset="UTF-8">
    <title>CodePen - Cards Hover Effect -&gt; HTML &amp; CSS </title>
    <script>
        function redirect(){
            window.location.href = "payment.php";
        }
        function register(){
            alert("Registered Successfully");
        }
    </script>
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
            <a><input type="text" id="profileField" name="username" value="<?php 
            session_start();
            echo isset($_SESSION['username']) ? $_SESSION['username'] : 'My Profile';
            ?>" disabled>
            <span class="material-icons-outlined">
                account_circle
            </span>
            </a>
                    &emsp;&emsp;&emsp;&emsp;<a style="color: white;text-decoration: none;font-family: 'Roboto', sans-serif;font-weight: 500;transition: color 0.3s ease;"  href="index.php">Logout</a>
        </div>
            </div>
    <div class="banner">
        <img src="./images/sbea.jpeg" width="1570px" height="800px">
        <div class="text">
            <h1 style="font-family:luminari; font-size:60px;"><b>Reunion Homecoming Event<b></h1>
            <h1>August 23-31, 2023</h1>
            <h1>Together, Again!</h1>
            <div class="box">
                <h2 style="text-align:center;"><b>Alumni Events On Stanford Alumni Groups</b></h2>
                <p>Find events hosted by alumni clubs & groups on the new Stanford Alumni Groups site - a place for
                    alumni communities, events and conversation.</p>
            </div>
            <div class="blah">
                <p>Early bird pricing available. Dinner on the quad will sell out.</p>
                <button onclick="register()">Register</button>
                <button>Look who's coming</button><br>
            </div>
        </div>
    </div><br>
    <!-- <br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br> -->

    <br><br><br><br><br>
    <h1 style="text-align:center; font-size:40px; font-family:TimesNewRoman;"><b>UPCOMING EVENTS</b></h1>
    <pre style="text-align:center; font-size:20px; font-family:TimesNewRoman;">There are two upcoming events... Opportunities for your entire class to reunite occur
only once every five years. So, please participate and enjoy everyone. Wondering what’s in store? Keep reading!</pre>
    <br><br><br>
    <br>
    <div class="container">
        <div class="image">
            <img src="./images/seve.jpg" width="450px" height="300px">
        </div>
        <div class="text">
            <h1 style="font-family:TimesNewRoman;"><b>Meetings & Event Venue</b></h1>
            <pre style="font-family:TimesNewRoman;">
		Venue: Meetings & Event Venue
		Event Time: starts from 5:00pm and lasts till 11:00 PM
		Date: 28th August
		Dinner Hours: 7:00 PM-10:00 PM 
		Bar and Lounge: Also available
	</pre>
        </div>
    </div><br>
    <br><br><br>
    <br>
    <div class="container">
        <div class="image">
            <img src="./images/speoimg.jpeg" width="450px" height="300px">
        </div>
        <div class="text">
            <h1 style="font-family:TimesNewRoman;"><b>Convocation day</b></h1>
            <pre style="font-family:TimesNewRoman;">
		Venue: Schedule at a Glance
		Event Time: starts from 8:00 AM and lasts till 5:30 PM
		Date: 10th September
		Lunch Hours: 12:00 PM-2:00 PM 
		Juices and Staters: Also available
	</pre>
        </div>
    </div><br>
    <br><br><br>
    <h1 style="text-align:center; font-size:40px;font-family:TimesNewRoman;"><b>PAST EVENTS</b></h1>
    <pre style="text-align:center; font-size:20px;font-family:TimesNewRoman;">The events which are happened in the past...
beautiful memories. Have a look on this!!</pre>
    <br><br><br>
    <div class="container1">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <span class="stars"></span>
                    <h1 class="java">CRICKET</h1>
                    <p class="java" style="font-size:18px;">Ever since the live-telecast wave hit the sport, cricket
                        celebrations have not been as subtle as they used to be. Especially with the added entertainment
                        value with the cash-rich leagues around the world, the plethora of signature celebrations have
                        also found their way into the international scene. Post the turn of the first decade of the
                        millennium, cricket is far from being the gentleman's sport, what with the overwhelming
                        theatrics and all. </p>
                </div>
            </div>
            <div class="face face2">
                <h2>Cricket Tournament</h2>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <span class="stars"></span>
                    <h1 class="python">CONFERENCE</h1>
                    <p class="python" style="font-size:18px;">An academic conference is a one-day or multiday event
                        during which researchers present their work to each other. Conferences are an important way
                        researchers stay connected to others in their field and learn about cutting-edge
                        scholarship.Academic conferences present valuable opportunities to learn about cutting edge
                        research, meet new people, and build strong professional relationships with others in your
                        field.</p>
                </div>
            </div>
            <div class="face face2">
                <h2>Conference</h2>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container2">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <span class="stars"></span>
                    <h1 class="csharp">FAREWELL</h1>
                    <p class="csharp" style="font-size:18px;">This is a free, home-based fall prevention program. An
                        occupational therapist will come to your home to look at risk factors for falls. Farewell,
                        everyone's joy! Stanford produced many orchestral songs. With the exception of the Songs of the
                        Sea and the Songs of the Fleet, which were originally conceived for voice and orchestra (and
                        chorus), all of Stanford’s songs with orchestral accompaniment were arrangements of works
                        initially conceived for piano.</p>
                </div>
            </div>
            <div class="face face2">
                <h2>Farewell</h2>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <span class="stars"></span>
                    <h1 class="inno">INNOVATION PROGRAM</h1>
                    <p class="inno" style="font-size:18px;">Undergraduate Research also encourages current student
                        volunteers to present their project posters or to speak about their project experiences to
                        students who are not yet engaged in these pursuits. Some of these info session events may be
                        dorm presentations with Undergraduate Research staff, and you may like to consider contributing
                        especially to your first year or sophomore year dorms. Please indicate the sites where you would
                        like to give such a presentation.</p>
                </div>
            </div>
            <div class="face face2">
                <h2>Innovation Program</h2>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="maroon1">
        <h1 style="text-align:center; font-size:40px">Stanford Alumni Association Members Receive 10% off Reunion
            Registration</h1>
        <pre style="text-align:center; font-size:20px">Purchase a lifetime membership now, 
and you’ll also receive a $100 discount on the regular $695 price.</pre>
        <button onclick="redirect()" style="margin-left:625px; font-size: 18px;">Purchase a membership</button>
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