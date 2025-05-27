<?php
    session_start();
    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SinemaTIK - Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="body-logout">
    <div class="logout">
        <form action="dashboard.php" method="POST">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>

    <!-- <div class="footer">
        <p>&copy; 2025 Ahmad Albaqi. All Rights Reserved.</p>
    </div> -->

    </div>
</body>
</html>