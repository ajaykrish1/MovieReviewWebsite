<?php 

  require 'dbconfig\config.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/loginn.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-4 col-xs-6 "><img src="images/3.jpg" alt=""></div>
        <div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/4.jpg" alt=""></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/1.jpg" alt=""></div>
            <div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/2.jpg" alt=""></div>

              <div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/5.jpg" alt=""></div>

              <div class="col-lg-2 col-sm-4 col-xs-6 "><img src="images/9.jpg" alt=""></div>


<div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/new1.jpg" alt=""></div>
<div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/new2.jpg" alt=""></div>

    <div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/new3.jpg" alt=""></div>

      <div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/new4.png" alt=""></div>
        <div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/new5.jpg" alt=""></div>
        <div class="col-lg-2 col-sm-4 col-xs-6"><img src="images/new6.jpg" alt=""></div>

      </div>

    </div>
    <div class="forms">
      <form class=""  action="login.php" method="post"><br>
         <label for="username">Username</label>
         <input type="text" name="username" value="" required><br>
         <label for="">Password</label>
         <input type="text" name="password" value="" required><br>

         <input id="submit" type="submit" name="submitbttn" value="Login">
          
        
         <a href="signup.php"><input id="bttn" type="button" name="" value="Register"></a>
      </form>
        <?php 

            if(isset($_POST['submitbttn']))
            {

              $username=$_POST['username'];
              $password=$_POST['password'];

              $query1="select * from user where username='$username' and password='$password'";
              $query_run1=mysqli_query($con,$query1);

              if(mysqli_num_rows($query_run1)>0)
              {
                  session_start();
                  $_SESSION['username']=$username;
                  
                  header('location:add.php');
              }
              else
              {
                echo'<script   type="text/javascript" >alert("Invalid credentials")</script>';
              }
            }

         ?>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
