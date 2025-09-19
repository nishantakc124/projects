
<?php
session_start();
include './database.php';
if($_SERVER['REQUEST_METHOD']== 'POST'){
      $password = htmlspecialchars( $_POST['password']);
      $email = htmlspecialchars($_POST['email']);


      if (!$password == '' && !$email == '') {
        $sql = "SELECT * FROM logins WHERE email='$email' and password='$password'";
        $result = $conn->query($sql);
        $log = $result->fetch_assoc();
        if(isset($log)){
         $_SESSION['email'] = $log['email'];
         $_SESSION['psssword'] = $log['password'];
         header('location:./dashboard.php');
        }

      }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - ECommerce Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="gradient-bg">
  <div class="centered-container">
    <div class="auth-card">
      <div class="auth-icon">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/shop.png" alt="Store Icon"/>
      </div>
      <h2>Welcome Back</h2>
      <p class="subtitle">Sign in to your ecommerce dashboard</p>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Email</label>
        <input type="email" placeholder="admin@example.com" name="email" required>
        <label>Password</label>
        <div class="password-field">
          <input type="password" placeholder="Enter your password" name="password" required>
        </div>
        <button type="submit" class="primary-btn">Sign In</button>
      </form>
      <p class="switch-link">Don't have an account? <a href="./register.php">Sign up</a></p>
    </div>
  </div>
</body>
</html>
