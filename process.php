<?php
// 1. Database connection details (Updated for XAMPP defaults and your new DB)
$servername = "localhost";
$username = "root"; // Default XAMPP username is usually 'root'
$password = "";     // Default XAMPP password is usually empty
$dbname = "cars";   // FIX: Changed from contact_form_db to cars

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Collect form data (These match the 'name' attributes in your HTML form)
$type = $_POST['type'];
$rim = $_POST['rim'];
$horsepower = $_POST['horsepower'];
$topspeed = $_POST['topspeed'];

// 3. Prepare SQL query 
// Notice the backticks ` ` around column names with spaces!
$sql = "INSERT INTO brand (Type, Rim, `Horse Power`, `Top Speed`) 
        VALUES ('$type', '$rim', '$horsepower', '$topspeed')";

// 4. Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "New car added to the database successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>