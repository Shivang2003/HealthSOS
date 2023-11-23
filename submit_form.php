<?php
// Database Connection Configuration
$db_host = "localhost";      // Change to your database host
$db_user = "root";           // Change to your database username
$db_pass = "";               // Change to your database password
$db_name = "login_sample_db";     // Change to your database name

// Create a database connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $message = $_POST["message"];

    // Insert data into the appointments table
    $sql = "INSERT INTO appointments (name, email, phone, date, time, message)
            VALUES ('$name', '$email', '$phone', '$date', '$time', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Appointment booked successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
