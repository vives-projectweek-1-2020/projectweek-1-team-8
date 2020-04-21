<?php
    $servername = "web0125.zxcs.be";
    $username = "u64108p68262_DylanMissu";
    $password = "3w0zW!c8Wj";
    $dbname = "u64108p68262_waitsmart";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM test_table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table>";
        while($row = $result->fetch_assoc()) {

            echo "<tr> <th>" . $row['name'] . "</th> <th>" . $row['lastname'] . "</th> <th>" . $row['id'] . "</th> </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>