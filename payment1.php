<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="payment.css">
</head>
<body>

    <div class="mainscreen">
        <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg" class="bgimg" alt="">-->
        <div class="card medium-card">
            <div class="leftside">
                <img
                    src="https://images.pexels.com/photos/7972506/pexels-photo-7972506.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="product"
                    alt="Fashion Item"
                />
            </div>
            <div class="rightside">
                <form method="post">
                    <h2>Payment Details</h2>
                    <p>Cardholder's Name</p>
                    <input type="text" class="inputbox" name="name" required />
                    <p>Card Number</p>
                    <input type="number" class="inputbox" name="card_number" id="card_number" required />

                    <p>Card Type</p>
                    <select class="inputbox" name="card_type" id="card_type" required>
                        <option value="">--Select Card Type--</option>
                        <option value="Visa">Visa</option>
                        <option value="MasterCard">MasterCard</option>
                        <option value="AmericanExpress">American Express</option>
                    </select>

                    <div class="expcvv">
                        <p class="expcvv_text">Expiry Date</p>
                        <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

                        <p class="expcvv_text2">CVV</p>
                        <input type="password" class="inputbox" name="cvv" id="cvv" required />
                    </div>
                    <p>Total Price: $500</p>
                    <button type="submit" name="complete_purchase" class="button">Complete Purchase</button>
                </form>
            </div>
        </div>
    </div>
<?php
        if (isset($_POST['complete_purchase'])){
        $conn = mysqli_connect("localhost", "root", "", "demophp");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $reg_no =  $_REQUEST['name'];
        $c_number = $_REQUEST['card_number'];
        $c_type= $_REQUEST['card_type'];
        $cvv=$_REQUEST['cvv'];
        
        $sql = "SELECT * FROM purchased WHERE Regd_No='$reg_no'";
        $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Check if a matching user was found
    if (mysqli_num_rows($result) == 1) {
        echo '<script>alert("Already Purchased")</script>';
    } else {
       $sql1 = "INSERT INTO purchased (Regd_No, Card_Number, Card_Type, CVV) VALUES ('$reg_no', '$c_number', '$c_type', '$cvv')";
        $stmt = mysqli_prepare($conn, $sql1);
    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Purchased Successfully")</script>';
        echo '<script>window.location.href = "events.php";</script>';

    }
        else{
            echo '<script>alert("There is an error");</script>';
        }
    }        
        // Close connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        }
        ?>
</body>
</html>
