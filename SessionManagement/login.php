<?php
session_start(); // Start the session

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    
    // Username: shivam, Password: shivam :- if the Crediantials are not true then show the error message 
    if ($username === 'shivam' && $password === 'shivam') {
        $_SESSION['username'] = $username; // Store username in session
        header("Location: welcome.php"); // Redirect to welcome page
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<h2>Login</h2>

<?php
if (isset($error)) {
    echo "<p style='color: red;'>$error</p>";
}
?>

<form action="login.php" method="post">
    <h1>Student Login WCE SANGLI</h1>
    <label for="username">Enter your Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Enter yur Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Login">

</form>

</body>
</html>
