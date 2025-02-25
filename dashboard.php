<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, <?php echo $_SESSION["name"]; ?>!</h2>
        <p>Your Role: <?php echo ucfirst($_SESSION["role"]); ?></p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
