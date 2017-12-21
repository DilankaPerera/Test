<?php session_start(); ?>
<?php include ('inc/db.php');?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" name="form1" action="" method="post">
    <p><input type="text" placeholder="Email" name="username"></p>
    <p><input type="password" placeholder="Password" name="password"></p>
    <p><input type="submit" value="Log in" name="submit"></p>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    <?php
        if (isset($_POST['submit'])){
            $username=mysqli_real_escape_string($conn,$_POST['username']);
            $password=mysqli_real_escape_string($conn,$_POST['password']);
            $query="SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result))
            {
                $_SESSION["admin"]=$row['username'];
                $_SESSION["id"]=$row['id'];

            ?>
            <script type="text/javascript">
                window.location="dashboard.php";
            </script>
    <?php
            }
        }

    ?>
    
    
  </body>
</html>
