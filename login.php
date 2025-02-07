<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

    <h2>Login</h2>
    
    <form action="login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

</body>
</html>

<?php
// Hardcoded credentials (Replace these with your database credentials)
$valid_username = "admin";
$valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the credentials are valid
    if ($username == $valid_username && $password == $valid_password) {
        echo "<h3>Login successful!</h3>";
    } else {
        echo "<h3>Invalid username or password. Please try again.</h3>";
    }
}
?>
