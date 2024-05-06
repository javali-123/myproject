<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <script src="login.js"></script>
    <div class="container">
      <h2>Login</h2>
      <form id="login-form" action="#" method="post">
        <input
          type="text"
          id="registration_no"
          name="registration_no"
          placeholder="Registration Number"
          required
        />
        <input type="password" id="password" name="password" placeholder="Password" required />
        <br />
        <p>Forgot password?</p>
        <button type="submit" name="loginbt">Login</button>
      </form>
      <div class="sign_up"><a class="signup-link" href="register.php">Sign up</a></div>
    </div>
    <script src="login.js"></script>
    <?php
        if (isset($_POST['loginbt'])){
        $conn = mysqli_connect("localhost", "root", "", "demophp");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $reg_no =  $_REQUEST['registration_no'];
        $password=$_REQUEST['password'];

        $sql = "SELECT * FROM registered WHERE Regd_No='$reg_no' and Password='$password'";
         $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Check if a matching user was found
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['username'] = $reg_no;
        echo '<script>window.location.href = "myhomepage.php";</script>';
        exit(); 
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
        // Close connection
        mysqli_close($conn);
        }
        ?>
  </body>
</html>