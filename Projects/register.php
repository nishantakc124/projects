<?php 
session_start();
include './database.php';
    $errorfirst = '';
    $errorsecond = '';
    $errorthird = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       $_SESSION['fullname'] = $fullname = htmlspecialchars($_POST['name']);
        $_SESSION['password']=$password = htmlspecialchars( $_POST['password']);
        // $_SESSION['compassword']=$compassword = htmlspecialchars( $_POST['compassword']);
        $_SESSION['email']=$email = htmlspecialchars($_POST['email']);


        if($fullname == ''){
            $errorfirst = "The fullname is required";
        }
        if($password == '' ){
            $errorsecond = "The password  is required";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errorthird = "Enter a valid Email";
        }
        $sql1 = "SELECT * FROM logins WHERE email='$email'"; 
        $result1 = $conn->query($sql1);
        if($result1===TRUE){
          echo "already exist";
        }
        if(!$fullname == '' && !$password == '' &&  filter_var($email, FILTER_VALIDATE_EMAIL) && $result1 === false){
          
            $sql = "INSERT INTO logins(fullname,password,compassword,email) VALUES ('$fullname','$password','$compassword','$email')";
            $result = $conn->query($sql);
            if($result === TRUE){
                  $_SESSION['fullname'] = $fullname;
                  $_SESSION['password'] = $password;
                  $_SESSION['email'] = $email;
                  header("location: ./login.php");
            }

          
        }


    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - ECommerce Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="gradient-bg">
  <div class="centered-container">
    <div class="auth-card">
      <div class="auth-icon">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/shop.png" alt="Store Icon"/>
      </div>
      <h2>Create Account</h2>
      <p class="subtitle">Sign up to start managing your ecommerce store</p>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>Full Name <?php echo $errorfirst ?></label>
        <input type="text" placeholder="Name" required name="name">
        <?php echo $errorfirst ?>
        <label>Email</label>
        <input type="email" placeholder="john@example.com" required name="email">
        <?php echo $errorthird ?>
        <label>Password</label>
        <div class="password-field">
          <input type="password" placeholder="Create a password" required name="password">
          <?php echo $errorsecond ?>
        </div>
        <!-- <label>Confirm Password</label>
        <input type="password" placeholder="Confirm your password" name="compassword" required> -->
        <button type="submit" class="primary-btn">Create Account</button>
      </form>
      <p class="switch-link">Already have an account? <a href="./login.php">Sign in</a></p>
    </div>
  </div>
</body>
</html>
