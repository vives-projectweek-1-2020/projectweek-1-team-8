<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exercises";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT first_name FROM exam";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row['first_name'] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>