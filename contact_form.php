<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input { padding: 8px; width: 300px; }
        button { padding: 10px 15px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .success-message { color: green; font-weight: bold; margin-bottom: 20px; }
    </style>
</head>
<body>

    <h2>Enter Your Details</h2>

    <?php
    // This block only runs if the form was actually submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Grab the data from the form using the $_POST superglobal array
        // htmlspecialchars() is a security measure to prevent malicious code injection
        $firstName = htmlspecialchars($_POST['first_name']);
        $surname   = htmlspecialchars($_POST['surname']);
        $email     = htmlspecialchars($_POST['email']);
        $cellphone = htmlspecialchars($_POST['cellphone']);

        // Display the captured data back to the user
        echo "<div class='success-message'>";
        echo "Form submitted successfully!<br><br>";
        echo "<strong>First Name:</strong> " . $firstName . "<br>";
        echo "<strong>Surname:</strong> " . $surname . "<br>";
        echo "<strong>Email:</strong> " . $email . "<br>";
        echo "<strong>Cellphone:</strong> " . $cellphone . "<br>";
        echo "</div><hr>";
    }
    ?>

    <form method="POST" action="">
        
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>

        <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="cellphone">Cellphone Number:</label>
            <input type="tel" id="cellphone" name="cellphone" required>
        </div>

        <button type="submit">Submit Details</button>

    </form>

</body>
</html>