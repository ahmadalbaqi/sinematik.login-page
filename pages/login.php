<?php
   include '../database/connection.php';

   $login_message = "";
   
   if(isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

      $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $row = mysqli_fetch_assoc($result); 
        $_SESSION['pages'] = $row['username'];
        
        header("Location: dashboard.php");
    } else {
        $login_message = "*Username Dan Password Anda Salah";
    }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SinemaTIK - Login Page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
</head>
    <body> 
        <div class="body">
        <div class="logo">
            <img src="../assets/img/Logo SinemaTIK All BP Crop.jpg" alt="logo" width=400px height="80px">
        </div>

        <div class="container-sub">
            <a href="../index.php">&lt; Kembali</a>
        </div>

        <div class="container"> 
        <form action="login.php" method="POST">
            <h2>Login</h2>
            <div class="error-message"><?= $login_message ?></div> 

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username"/>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password"/>
            </div>

            <button type="submit" name="login">Login</button>
        </form>
        </div>
                
        <div class="footer">
            <p>&copy; 2025 Ahmad Albaqi. All Rights Reserved.</p>
        </div>
        </div>
    </body>
</html>