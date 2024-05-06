<!DOCTYPE html>
<html>
<head>
    <title>Testimonals</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
<style>
body {font-family: Arial, Helvetica, sans-serif;
margin: 0px;}

/* The Modal (background) */
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
header{
    background-image: url("./images/test-bg2.jpg");
    /* object-fit: cover; */
    background-size: cover;
    text-align: center;
    color: rgb(255, 255, 255);
    padding: 50px 0;
}
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; 
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4); 
}
/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.testimonial-image {
  width: 170px;
  height: 170px;
  border-radius: 50%;
  object-fit: cover;
  margin: 0 auto;
  display: block;
}
* {
  box-sizing: border-box;
}
.column {
  float:left;
  width: 33.33%;
  padding: 15px;
  text-align: center;
  margin-bottom: 20px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}

.testimonial-name {
  font-size: 18px;
  font-weight: bold;
  margin-top: 10px;
  text-align: center;
}

.testimonial-degree {
  font-size: 14px;
  color: #666;
  text-align: center;

}

.testimonial-occupation {
  font-size: 16px;
  color: #333;
  text-align: center;
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
  <h2 style="text-align: center;">ALUMNI TESTIMONIALS</h2>
    </header>
  <div class="row">
    <div class="column">
      <img src="./images/sushet.jpeg" alt="Open Modal" class="testimonial-image" id="myImg1">
      <div class="testimonial-name">Sushet Gautam</div>
      <div class="testimonial-degree">MBA Healthcare, Batch of '11</div>
      <div class="testimonial-occupation">Senior Consultant with PwC</div>
      <a href="#" onclick="openModal(1)">Read more</a>
      <!-- The Modal -->
      <div id="myModal1" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close" onclick="closeModal(1)">&times;</span>
          <h3 style="font-size:16px; font-weight:bold;">Sushet Gautam</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>MBA Healthcare</span>
                                    <br/>
                                    Batch 2009-11<br/>
                                    Senior Consultant<br/>Healthcare Practice with PwC
                                </p>
                              </h4>
          <p>Being a part of new beginnings is always special and so is my journey in Healthcare as it kicked off along with Chitkara University &#8217;s &#8220;Founders Batch &#8221;of MBA Healthcare Management. Looking back, I can certainly say that Chitkara was the most important milestone in shaping my career. MBA Healthcare Management provides an innovative course design, best in class faculty from industry and hands on experience from various training (especially Fortis Hospital visits). Throughout the academic sessions, I was challenged to discover capabilities that I never knew I had. Along with academics, the University focuses on personality development which helped me build a rewarding career.</p>
          <p>Currently, I am working in Healthcare consulting practice for PwC with a goal to build strong and sustainable solutions to complicated healthcare problems. It has been an unforgettable journey since I joined Chitkara University and I owe my success to my Alma Mater.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <img src="./images/chandan-bagai.jpeg" alt="Open Modal" class="testimonial-image" id="myImg2">
      <div class="testimonial-name">Chandan Bagai</div>
<div class="testimonial-degree">B.Tech Computer Science & Engineering, Batch of '12</div>
<div class="testimonial-occupation">Cyber Security Consultant with Candela</div>
<a href="#" onclick="openModal(2)">Read more</a>
      <div id="myModal2" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal(2)">&times;</span>
        <h3 style="font-size:16px; font-weight:bold;">Chandan Bagai</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>B.Tech Computer Science &#038;Engineering</span>
                                    <br/>
                                    Batch 2008-12<br/>
                                    Cyber Security Consultant<br/>
                                    Accenture<br/>Canada
                                </p>
                              </h4>
                                <p>I am currently working as Senior Cyber Security Consultant at Accenture in Toronto, Canada. I recently got featured as one of the top volunteers in the National Volunteer Week and all credit goes to rigorous training and overall development at “Chitkara &#8221;. I must say University is one of the prestigious Institutions of the country imparting the industry leading education with in-house expertise driving excellence.” Thanks for everything to my Alma Mater</p>
        </div>
      </div>
    </div>

    <div class="column">
      <img src="./images/jagbir.jpeg" alt="Open Modal" class="testimonial-image" id="myImg3">
      <div class="testimonial-name">Jagbir kaur</div>
      <div class="testimonial-degree">B.Tech Computer Science & Engineering,Batch 2009-13</div>
      <div class="testimonial-occupation">Senior Risk Consultant<br/>Mckinsey &#038;Company, New York</div>
      <a href="#" onclick="openModal(3)">Read more</a>
      <div id="myModal3" class="modal">
        <div class="modal-content">
          <span class="close" onclick="closeModal(3)">&times;</span>
          <h3 style="font-size:16px; font-weight:bold;">Jagbir Kaur</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>B.Tech Computer Science &#038;Engineering</span>
                                    <br/>
                                    Batch 2009-13<br/>
                                    Senior Risk Consultant<br/>Mckinsey &#038;Company, New York
                                </p>
                            </h4>
                            <p>I completed my Post graduation from School of Business at University of Connecticut and I am currently working as Senior Analytics Fellow (Senior Risk Consultant) at Mckinsey &#038;Company, New York. I would just like to say that have faith in your abilities and never lose hope. It’s never too late. Chitkara University has provided me roots to follow my dreams and passion and I am exploring my potential in every sphere of life. I owe gratitude to my Alma Mater for enabling each one of us to be believe that we are special and preparing us to embrace the ever evolving Global Challenges.</p>                  
        </div>
      </div>
    </div>
    <div class="column">
      <img src="./images/amit-dogra.jpeg" alt="Open Modal" class="testimonial-image" id="myImg4">
      <div class="testimonial-name">Amit Dogra</div>
      <div class="testimonial-degree">B.Tech Computer Science &#038;Engineering,Batch 2004-08</div>
      <div class="testimonial-occupation">CEO &#038;Co-Founder &#8211;Orion eSolutions</div>
      <a href="#" onclick="openModal(4)">Read more</a>
      <div id="myModal4" class="modal">
        <div class="modal-content">
          <span class="close" onclick="closeModal(4)">&times;</span>
          <h3 style="font-size:16px; font-weight:bold;">Amit Dogra</h3>
          <h4 style="font-size:14px; font-weight:400;line-height:25px;">
              <p>
                  <span>B.Tech Computer Science &#038;Engineering </span>
                  <br/>
                  Batch 2004-08<br/>CEO &#038;Co-Founder &#8211;Orion eSolutions
              </p>
          </h4>
          <p>I was fortunate enough to have studied from Chitkara &#038;currently working as CEO &#038;Co-Founder of Orion eSolutions, an IT company based out in USA and India. I co-founded the company in 2012 in India and then 2015 in Phoenix, USA. I spent my initial 3 years of corporate life with one of the world &#8217;s largest consultancy firm McKinsey and Company where I got opportunity to work with Fortune 500 clients and understands ethics &#038;values of a business entity.</p>
          <p>I turned down the offer of moving to USA through McKinsey in 2012 and established our self-funded start up merely with 2 employees. Later I moved to USA in 2015 to open my very own company. Since our inception, we have grown to 80+ Employees with clients serving almost every corner of the world. Other than Orion eSolutions, I have lately co-founded another start up dealing with Real Estate problems for Developers, Brokers and Consumers in India. And for all this, I just owe my heartfelt gratitude to me Alma Mater and it’s great to connect back now and forever.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <img src="./images/atul-gandhi.jpeg" alt="Open Modal" class="testimonial-image" id="myImg5">
      <div class="testimonial-name">Atul gandhi</div>
      <div class="testimonial-degree">B.Tech Electrical Engineering,batch 2005-09</div>
      <div class="testimonial-occupation">Ernst &#038;Young (EY), Gurgaon</div>
      <a href="#" onclick="openModal(5)">Read more</a>
      <div id="myModal5" class="modal">
        <div class="modal-content">
          <span class="close" onclick="closeModal(5)">&times;</span>
          <h3 style="font-size:16px; font-weight:bold;">Atul Gandhi</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>B.Tech Electrical Engineering </span>
                                    <br/>
                                    Batch 2005-09<br/>Ernst &#038;Young (EY), Gurgaon
                                </p>
                            </h4>
                            <p>I am working as a Senior Analyst in EY and profoundly would like to share that “Genesis” is an important word and I must say “Chitkara Inst. of Engineering &#038;Technology” is one place where it all started for me. Graduation was just a certificate but journey that made us capable of going that one extra mile can’t be summarized in few words, Apart from lecture rooms, labs or any international level infrastructure we could ask for, our mentors and Chitkara’s vision to enable its student with industry level capabilities made the difference. It’s been 9 years since I am working for an industry where knowledge and discipline towards profession is an essence. I extend my heartfelt thanks to my alma-mater and mentors for their selfless efforts &#038;also Chitkara Alumni Network from bringing all the Chitkarian &#8217;s on one platform.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <img src="./images/anuj-gupta.jpeg" alt="Open Modal" class="testimonial-image" id="myImg6">
      <div class="testimonial-name">Anuj Gupta</div>
<div class="testimonial-degree">B.Tech Computer Science & Engineering, Batch of '07</div>
<div class="testimonial-occupation">Ekpathshaala, K12 Education &#038;Career Counseling, Pan India</div>
<a href="#" onclick="openModal(6)">Read more</a>
      <div id="myModal6" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal(6)">&times;</span>
        <h3 style="font-size:16px; font-weight:bold;">Anuj Gupta</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>B.Tech Electrical Engineering </span>
                                    <br/>
                                    Batch 2003-07<br/>Ekpathshaala, K12 Education &#038;Career Counseling, Pan India
                                </p>
                            </h4>
                            <p>
                              I was placed from Campus with Birla Soft as an Associate Software Engineer, but chose to be an Entrepreneur following our Motto &#8220;Explore Your potential &#8221;and thinking &#8220;Out of Box &#8221;. As Chandigarh is all about education, I started my own venture Ekpathshaala in 2008, which now shares a strong reputation among the market stake holders and students with data base of more than 20000 successful students trained, who are doing great in Corporates, MBA, Education and other fields. We are into K12 education and career counseling, guiding students to find their right career options, working with all leading brands for training students for MBA, Campus placements on Pan India level both in offline and online model.<br/>And I owe all this to my Alma Mater for imbibing us with the wisdom of educational pearls and making us tread on the path of success.
                          </p>
                      </div>
      </div>
    </div>

    <div class="column">
      <img src="./images/Gurleen-CCP.webp" alt="Open Modal" class="testimonial-image" id="myImg7">
      <div class="testimonial-name">GurleenKaur</div>
<div class="testimonial-degree">B.Pharma , Batch of '17</div>
<div class="testimonial-occupation">Centennial College,Canada</div>
<a href="#" onclick="openModal(7)">Read more</a>
      <div id="myModal7" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal(7)">&times;</span>
        <h3 style="font-size:16px; font-weight:bold;">GurleenKaur</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>B.Pharma </span>
                                    <br/>
                                    Batch 2013-17<br/>
                                    Centennial College<br/>Canada
                                </p>
                            </h4>
                            <p>From MUN Conference at Harvard University, Boston, Massachusetts USA to Vancouver Summer Program, University of British Columbia, Canada, I had the privilege of representing India at International Level from Chitkara University and I just can &#8217;t thank enough Chitkara, my Alma Mater for giving me wings to fly and be a part of this ever evolving global diversity. Having tasted the International educational flavour, I thought of pursuing higher education abroad and currently I am pursuing my Post Graduation at Centennial College, Canada. I was the first student of Chitkara College of Pharmacy to get the opportunities of going abroad. I am a proud Alum of Chitkara and sincerely thank my University for giving all of us a platform of academic excellence besides our all around development.</p>
                </div>
      </div>
    </div>

    <div class="column">
      <img src="./images/nidhi-bharti.jpeg" alt="Open Modal" class="testimonial-image" id="myImg8">
      <div class="testimonial-name">Nidhi Bharti</div>
<div class="testimonial-degree">B.Tech Computer Science &#038;Engineering,Batch of '13</div>
<div class="testimonial-occupation">News Anchor/Producer</div>
<a href="#" onclick="openModal(8)">Read more</a>
      <div id="myModal8" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal(8)">&times;</span>
        <h3 style="font-size:16px; font-weight:bold;">Nidhi Bharti</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>B.Tech Computer Science &#038;Engineering</span>
                                    <br/>
                                    Batch 2009-13<br/>News Anchor/Producer
                                </p>
                            </h4>
                            <p>Getting into Engineering was by profession but Media World was my passion. Right from the beginning at Chitkara, I had been actively involved in exploring my potential. From reviving student chapters of Technical societies in college to managing National Level fest of the University, I have always gone where there is no path and left a trail for others to follow with touch of creativity, and for all this grooming and learning, I express my gratitude to my Alma Mater. Following my passion, I pursued studies in the field of Mass Communication. From hosting various stage events to establishing as a News Anchor/ Producer with reputed brands in Electronic Media industry; I have come a long way in a short span of time with pearls of wisdom I gathered at Chitkara University.</p>
                            <p>I am on News Bulletin Anchoring (Zee TV Canada, Alpha ETC Punjabi, Global Punjab TV).</p>
                        </div>
      </div>
    </div>

    <div class="column">
      <img src="./images/amrit-gurinder.jpeg" alt="Open Modal" class="testimonial-image" id="myImg9">
      <div class="testimonial-name">Amrit &#038;Gurinder</div>
<div class="testimonial-degree">B.Tech Computer Science &#038;Engineering,Batc-2007-11</div>
<div class="testimonial-occupation">Associate Consultant,TCS<br/>
  HR Recruiter<br/>Hexaware, Chennai</div>
<a href="#" onclick="openModal(9)">Read more</a>
      <div id="myModal9" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal(9)">&times;</span>
        <h3 style="font-size:16px; font-weight:bold;">Amrit &#038;Gurinder</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>B.Tech Mechanical Engineering</span>
                                    <br/>
                                    Batch 2007-11<br/>
                                    Associate Consultant<br/>TCS
                                </p>
                                <p>
                                    <span>MBA Batch 2010-12</span>
                                    <br/>
                                    HR Recruiter<br/>Hexaware, Chennai
                                </p>
                            </h4>
                            <p>Chitkara not only gave us an excellent platform to study and excel in our professional lives but also on the personal front, we are together in marital bliss. We fondly and very vividly remember our Alma Mater. We both are doing exceptionally well in our respective Professional domains which is all because of the training, grooming, motivation and inspiration that enabled and helped us in pursuing excellence in education and becoming thorough professionals. The mentorship provided in a variety of contexts, and the myriad of other ways greatly &#038;positively affected us and shaped &#038;prepared us for the outside World. We thank Chitkara Alumni Network for connecting the dots on Chitkara &#8217;s Canvas making each one of us a part of that painting.</p>
                </div>
      </div>
    </div>

    <div class="column">
      <img src="./images/jas-angad.jpeg" alt="Open Modal" class="testimonial-image" id="myImg10">
      <div class="testimonial-name"> Jas Angad singh</div>
<div class="testimonial-degree">B.Tech Computer Science &#038;Engineering,Batch-2008-12</div>
<div class="testimonial-occupation">Innovation Labs </div>
<a href="#" onclick="openModal(10)">Read more</a>
      <div id="myModal10" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal(10)">&times;</span>
        <h3 style="font-size:16px; font-weight:bold;">Jas Angad Singh</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>B.Tech Computer Science &#038;Engineering </span>
                                    <br/>
                                    Batch 2008-12<br/>Founder &#8220;Innovation Labs &#8221;
                                </p>
                            </h4>
                            <p>Following the vision of always trying to explore my potential, my very first job was at Tanzania (Africa) into the export sector. After having spent a while there, I got to contribute to the education system and four years down the line, catching the Entrepreneur bug, I am a part of a Start up which sets up &#8220;Innovation Laboratories &#8221;for Schools and Colleges. We are based out of Bangalore and New Delhi, nurturing scientific temperament within students. It has been truly amazing learning graph at Chitkara and I would be much elated to connect back to contribute to all Chitkara Institutions. Just keep encouraging so that we can make our Alma Mater proud of our achievements.</p>
                </div>
      </div>
    </div>

    <div class="column">
      <img src="./images/Aomploy-CSH.webp" alt="Open Modal" class="testimonial-image" id="myImg11">
      <div class="testimonial-name">Aomploy Ployvaranon</div>
<div class="testimonial-degree">Hospitality,Batch-2013-16</div>
<div class="testimonial-occupation">Marriott Marquis Bangkok Queen &#8217;s Park &#8221;<br/>Bangkok</div>
<a href="#" onclick="openModal(11)">Read more</a>
      <div id="myModal11" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal(11)">&times;</span>
        <h3 style="font-size:16px; font-weight:bold;">Aomploy Ployvaranon</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>Hospitality </span>
                                    <br/>
                                    Batch 2013-16<br/>
                                    Marriott Marquis Bangkok Queen &#8217;s Park &#8221;<br/>Bangkok
                                </p>
                            </h4>
                            <p>Sawadika Chitkara. I was the first ever student joining from Thailand in Chitkara School of Hospitality, Chitkara University. I stayed in the beautiful Campus, home away from home that gave me enough opportunities to prepare for the Hospitality World. I am working with &#8220;Marriott Marquis Bangkok Queen &#8217;s Park &#8221;in Bangkok and I owe my success to my Alma Mater for making me learn the nuances of the Hospitality world with such precision. I always look forward to connect back and also welcome everyone from Chitkara to Bangkok.</p>
                          </div>
      </div>
    </div>
    <div class="column">
      <img src="./images/neha-pandey.jpg" alt="Open Modal" class="testimonial-image" id="myImg12">
      <div class="testimonial-name">Neha pandey</div>
<div class="testimonial-degree">BBA,Batch 2013-16</div>
<div class="testimonial-occupation">Recipient of Govt. of India SAARC Silver Jubilee Scholarship</div>
<a href="#" onclick="openModal(12)">Read more</a>
      <div id="myModal12" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal(12)">&times;</span>
        <h3 style="font-size:16px; font-weight:bold;">Neha Pandey</h3>
                            <h4 style="font-size:14px; font-weight:400;line-height:25px;">
                                <p>
                                    <span>BBA</span>
                                    <br/>
                                    Batch 2013-16<br/>Recipient of Govt. of India SAARC Silver Jubilee Scholarship
                                </p>
                            </h4>
                            <p>From being a Nepalese Student Topper of 2013 BBA Batch at Chitkara to proud recipient of Govt. of India SAARC Silver Jubilee Scholarship to complete M.A. in Development Economics from South Asian University, New Delhi, it has been a journey of life time. It &#8217;s an immense pleasure to count myself as an Alumni of Chitkara University. I learnt and gained extensive experiences which helped throughout my studies in all my thick and thin. The knowledge and discipline we get from this University is phenomenal which helps you to succeed all the endeavors. And I &#8217;m sure it will help me in my further studies as well as in professional world. I owe a huge vote of thanks to every opportunity given to me to explore my personality and potential at Chitkara University.</p>
                          </div>
      </div>
    </div>
  </div>
  
  <script>
  // Function to open the modal
  function openModal(modalId) {
    var modal = document.getElementById("myModal" + modalId);
    modal.style.display = "block";
  }
  
  // Function to close the modal
  function closeModal(modalId) {
    var modal = document.getElementById("myModal" + modalId);
    modal.style.display = "none";
  }
  window.onclick = function(event) {
  var modals = document.querySelectorAll('.modal');
  for (var i = 0; i < modals.length; i++) {
    if (event.target == modals[i]) {
      modals[i].style.display = "none";
    }
  }
}

  // Get the "Read more" links
  var readMoreLinks = document.querySelectorAll('a[href="#"]');
  // Add click event listeners to the "Read more" links
  for (var i = 0; i < readMoreLinks.length; i++) {
  readMoreLinks[i].addEventListener('click', function(e) {
    e.preventDefault();
    var modalId = this.getAttribute('data-modal');
    openModal(modalId);
  });
}
  // Get the images that open the modal
  var img1 = document.getElementById("myImg1");
  var img2 = document.getElementById("myImg2");
  var img3 = document.getElementById("myImg3");
  var img4 = document.getElementById("myImg4");
  var img5 = document.getElementById("myImg5");
  var img6 = document.getElementById("myImg6");
  var img7 = document.getElementById("myImg7");
  var img8 = document.getElementById("myImg8");
  var img9 = document.getElementById("myImg9");
  var img10 = document.getElementById("myImg10");
  var img11= document.getElementById("myImg11");
  var img12 = document.getElementById("myImg12");
  // Add click event listeners to the images
  img1.onclick = function() {
    openModal(1);
  }
  img2.onclick = function() {
    openModal(2);
  }
  img3.onclick = function() {
    openModal(3);
  }
  img4.onclick = function() {
    openModal(4);
  }
  img5.onclick = function() {
    openModal(5);
  }
  img6.onclick = function() {
    openModal(6);
  }
  img7.onclick = function() {
    openModal(7);
  }
  img8.onclick = function() {
    openModal(8);
  }
  img9.onclick = function() {
    openModal(9);
  }
  img10.onclick = function() {
    openModal(10);
  }
  img11.onclick = function() {
    openModal(11);
  }
  img12.onclick = function() {
    openModal(12);
  }
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