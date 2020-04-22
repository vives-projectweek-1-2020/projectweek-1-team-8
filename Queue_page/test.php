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

    $sql = "SELECT * FROM test_table WHERE state != 'not_in_queue' ORDER BY time_entered DESC LIMIT 20";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table id='queue'>";
        echo "<tr> <th>First name</th> <th>Last name</th> <th>Apply date</th> </tr>";
        while($row = $result->fetch_assoc()) {
            if ($row['state'] == "in_shop"){
                echo "<tr style='background-color: lightgreen;'> <td>" . $row['name'] . "</td> <td>" . $row['lastname'] . "</td> <td>" . $row['time_entered'] . "</td> </tr>";
            } else if ($row['state'] == "in_queue"){
                echo "<tr style='background-color: lightsalmon;'> <td>" . $row['name'] . "</td> <td>" . $row['lastname'] . "</td> <td>" . $row['time_entered'] . "</td> </tr>";
            }
        }
        echo "</table>";

    } else {
        echo "0 results";
    }
    $conn->close();
?>