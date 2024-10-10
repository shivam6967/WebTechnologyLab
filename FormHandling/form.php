<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>

<h2>Student Information</h2>

<form action="form.php" method="post">
    <label for="name">Enter your Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Enter your Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // htmlspecialchars is used to prevent XSS (Cross-Site Scripting) by escaping special characters.

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));

    
    echo "<h3>Submitted Data</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";

}
?>

</body>
</html>
