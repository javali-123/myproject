<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registration Form</title>
        <style>
            *{
  font-family: kanit;
}
body {
  font-family: Roboto;
  background: url(./images/rut-miit-YIdkWynJdSk-unsplash1.jpg) no-repeat;
  background-size: cover;
  /* backdrop-filter: blur(0px); */
  margin: 0;
  padding: 0;
  justify-content: center;
  align-items: center;
  display: flex;
  height: 100vh;
}

.container {
  /* background-color: rgba(230, 230, 230, 0.5); */
  background: transparent;
  backdrop-filter: blur(5px);
  border-radius: 20px;
  padding:20px;
  width: 300px;
  height: 525px;
  text-align: center;
  border: 1px solid rgb(162, 162, 162);
}

h2 {
  margin-top: -5px;
  font-family: Kanit regular;
  font-size: 35px;
  color: rgb(52, 8, 8);
  margin-bottom: 20px;
}

input {
  background:none;
  width: 75%;
  padding: 1px 0;
  margin: 20px 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  border-bottom: 1px solid rgb(52, 8, 8);
  /* border-radius: 10px; */
}

::placeholder {
  margin-left: px;
  color: rgb(52, 8, 8);
}
p{
  color: rgb(52, 8, 8);
  font-size: 14px;
  margin-left: -147px;
  margin-top: -5px;
}
p:hover{
  text-decoration: underline;
  color: rgb(0, 85, 255);
}
.submit {
  margin-top: 20px;
  width: 50%;
  background-color: rgb(52, 8, 8);
  color: rgb(255, 255, 255);
  border: none;
  font-family: kanit;
  font-weight: 600;
  border-radius: 30px;
  padding: 15px 10px;
  cursor: pointer;
  font-size: 16px;
  border: 0.025rem solid rgb(70, 12, 12);
}

.submit:hover {
  background:none;
  color: rgb(70, 12, 12);
}

.signup-link {
  margin-top: 15px;
  color: #E0E1E4;
  text-decoration: none;
}

.login{
  font-size: 20px;
  font-family: roboto;
  font-weight: bold;
  margin-top: 20px;
  color: rgb(70, 12, 12);
}
.login:hover{
  text-decoration:underline;
  color:  #E0E1E4;
}
.file-upload-input {
    border-bottom: none;
    margin-left: -70px;
}
#upload_button {
    padding: 7px 7px;
    margin-left: -150px;
    border-radius: 5px;
    border: none;
    background-color:rgb(70, 12, 12);
    color: white;
}
        </style>
        <script>
        document.addEventListener("DOMContentLoaded", function () {
  const signupForm = document.getElementById("signup-form");
  const passwordInput = document.getElementById("password");
  const confirmPasswordInput = document.getElementById("confirmPassword");
  const emailInput = document.getElementById("emailId");
  const regnoInput = document.getElementById("regNo");
  const linkedinInput = document.getElementById("linkedIn");
  const fileInput = document.getElementById('img');
  const form = document.getElementById('signup-form');


  signupForm.addEventListener("submit", function (event) {
    if (passwordInput.value !== confirmPasswordInput.value) {
      event.preventDefault();
      alert("Passwords didn't match. Please make sure they match.");
    }

    const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.{8,})/;
    if (!passwordPattern.test(passwordInput.value)) {
      event.preventDefault();
      alert(
        "Password must contain at least 8 characters, one lowercase letter, one uppercase letter, one digit, and one special symbol."
      );
    }

    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(emailInput.value)) {
      event.preventDefault();
      alert("Invalid email format. Please enter a valid email.");
    }

    const linkedinPattern = /^[a-zA-Z0-9]{5,30}$/;
    if (!linkedinPattern.test(linkedinInput.value)) {
      event.preventDefault();
      alert("Invalid LinkedIn ID. Please enter a valid one.");
    }

    const regnoPattern = /^\d{3}[A-Za-z]{2}\d{5}$/;
    if (!regnoPattern.test(regnoInput.value)) {
      event.preventDefault();
      alert("Enter a valid registration number.");
    }
    
    if (fileInput.value === '') {
        event.preventDefault();
        alert('Please select a file to upload.');
        }
    }
  });
});

        </script>
    </head>
    <body>
        <div class="container">
      <h2>Sign Up</h2>
      <form id="signup-form" action="#" method="post" enctype="multipart/form-data">
        <input type="text" id="regNo" name="regNo" placeholder="Registration No." required />
        <input
          type="email"
          id="emailId"
          name="emailId"
          placeholder="Email"
          required
        />
        <input 
         type="text"  
         id="linkedIn"
         name="linkedIn"
         placeholder="LinkedIn Id"
         required
        /> 
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Create Password"
          required
        />
        <input
          type="password"
          id="confirmPassword"
          name="confirmPassword"
          placeholder="Confirm Password"
          required
          /><br>
        ***Upload your Image***<br>
        <!--<button id="upload_button">+ Upload</button>-->
        &emsp;&emsp;&emsp;&emsp;<input class="file-upload-input" type="file" id="imgfile" name="imgfile" accept="Image/*"><br>
        <button type="submit" name="submit" class="submit">Sign Up</button>
      </form>
      <div class="login">
        <a class="signup-link" href="login.php">Login</a>
      </div>
    </div>
        <?php
        if (isset($_POST['submit'])){
        $conn = mysqli_connect("localhost", "root", "", "demophp");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $reg_no =  $_REQUEST['regNo'];
        $email = $_REQUEST['emailId'];
        $linkedin= $_REQUEST['linkedIn'];
        $password=$_REQUEST['password'];
        $imgfile = $_FILES['imgfile']['tmp_name'];
        $imgData = file_get_contents($imgfile);

       $sql = "INSERT INTO registered (Regd_No, Email, LinkedIn, Password, img) VALUES ('$reg_no', '$email', '$linkedin', '$password', ?)";
        $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $imgData);

    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Inserted Successfully")</script>';
    }
        else{
            echo '<script>alert("There is an error");</script>';
        }
        // Close connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        }
        ?>
        <script src="upload.js"></script>
    </body>
</html>
