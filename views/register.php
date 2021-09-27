<?php include "../controls/Database.php" ?>
<?php

$db = new Database();
  // $users = new Users();
  if(isset($_POST['submit'])){
  $create = $db->insertRecord($_POST,"patients");
    if($create)
    {
      echo "<script>alert('Registration succesfull');</script>";
      echo "<script>window.location.href = 'login.php';</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Registration</title>
    <link rel="icon" href="../images/hms.svg">
  </head>
  <body>
    <header class="header-area">
      <div class="title">
        <h1 class="head"><a href="../home.php">Hospital Management System</a> </h1>
      </div>
     
      <div class="navigation">
        <nav class="menu">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Contact Us</a></li>
          
          </ul>
        </nav>
      </div>
    </header>
    
  <div class="auth-content">

 <form action="register.php" method="post">
  <h2 class="form-title">Register</h2>
  <?php 
    // if(isset($error_msg))
    //    {
    //      echo"<span class='error'>".$error_msg."</span>";
    //     //  echo"<span class='error'>".$error_msg['username']."</span>";
    //    }
    include "../controls/errors.php";
    $db = new Database();
  ?>
 
 

  <div>
    <label>Username</label>
    <input type="text" name="username" class="text-input" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '';?>"> <!-- Keep field values after refresh -->
   
    
  </div>
  <div>
    <label>Email</label>
    <input type="text" name="email" class="text-input" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
    
  </div>
  <div>
    <label>Password</label>
    <input type="password" name="password" class="text-input">
  
  </div>
  <div>
    <label>Password Confirmation</label>
    <input type="password" name="passwordConf" class="text-input">
    
  </div>
  <div>
    <button type="submit" name="submit" class="btn btn-big">Register</button>
  </div>
  <p>Already a member? <a href="login.php">Sign In</a></p>
</form>

</div>
   
  </body>
</html>
