<?php

//Database connection parameters
$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "kamva"; // Default XAMPP username
$password = ""; // Default XAMPP password is empty
$dbname = "contact_form_db"; // The name of your database

//create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//collect form data using the $_POST superglobal array
$firstName = $_POST['first_name'];
$surname   = $_POST['surname'];
$email     = $_POST['email'];
$message = $_POST['message];'];

// This file will handle the form submission and process the data
?>