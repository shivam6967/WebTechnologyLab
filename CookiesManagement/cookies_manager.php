<?php
// Set cookie
if (isset($_POST['set_cookie'])) {
    $cookie_name = 'user';
    $cookie_value = $_POST['cookie_value'];
    $cookie_expiration = time() + (86400 * 30); // Cookie expires in 30 days
    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/"); // "/" means the cookie is available in the whole domain
    echo "Cookie '{$cookie_name}' is set to '{$cookie_value}'<br>";
}



// Delete cookie
if (isset($_POST['delete_cookie'])) {
    setcookie($cookie_name, "", time() - 3600, "/"); // Set expiration time to the past
    echo "Cookie '{$cookie_name}' is deleted.<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Management</title>
</head>
<body>
    <h1>Cookie Management</h1>
    <form method="post">
        <label for="cookie_value">Set Cookie Value:</label>
        <input type="text" id="cookie_value" name="cookie_value" required>
        <button type="submit" name="set_cookie">Set Cookie</button>
    </form>

    <form method="post">
        <button type="submit" name="delete_cookie">Delete Cookie</button>
    </form>
</body>
</html>
