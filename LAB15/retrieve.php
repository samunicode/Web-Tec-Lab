<!DOCTYPE html>
<html lang="en">

<head>
    <title>Retrieve Data from myDB</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from database
    $sql = "SELECT * FROM registration";
    $result = $conn->query($sql);

    // Display data in HTML table
    if ($result->num_rows > 0) {
        echo "<table><tr><th>First Name</th><th>Last Name</th><th>Registration Number</th><th>Phone Number</th><th>Branch</th><th>Event</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["regno"] . "</td><td>" . $row["phno"] . "</td><td>" . $row["branch"] . "</td><td>" . $row["event"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();

    ?>
</body>

</html>