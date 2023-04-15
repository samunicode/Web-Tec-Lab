<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Insertion to DB</title>
</head>

<body>
    <?php
    // Database connection
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database_name";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $regno = $_POST['regno'];
    $phno = $_POST['phno'];
    $branch = $_POST['branch'];
    $event = $_POST['event'];

    // Insert the data into the database
    $sql = "INSERT INTO registration (firstname, lastname, regno, phno, branch, event)
            VALUES ('$firstname', '$lastname', '$regno', '$phno', '$branch', '$event')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>
</body>
</html>