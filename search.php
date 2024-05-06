<?php
        if (isset($_POST['search'])){
        $conn = mysqli_connect("localhost", "root", "", "demophp");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $search_q =  $_REQUEST['searchq'];

        $sql = "SELECT * FROM registered WHERE Regd_No LIKE '%" . mysqli_real_escape_string($conn, $search_q) . "%'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Display search results
    
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
    
        // Close connection
        mysqli_close($conn);
        }
        ?>