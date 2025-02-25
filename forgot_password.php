<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($result->num_rows > 0) {
        echo "A password reset link will be sent to your email.";
    } else {
        echo "Email not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Forgot Password?</h2>
        <form method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Reset Password</button>
            <p><a href="login.php">Back to Login</a></p>
        </form>
    </div>
</body>
</html>
