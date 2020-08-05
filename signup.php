<?php 

 require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css\signup.css">
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
      <form  class="" action="signup.php" method="post">
        
  <br>
        <label for="">Username:</label>

        <input type="text" name="username" value="" required>
  <br>
        <label for="">Password:</label>

        <input type="password" name="password" value="" required>
  <br>
        <label for="">Confirm Password:</label>

        <input type="password" name="cpassword" value="" required>
        <br>
        <input id="submit" type="submit" name="button" value="Signup">
       
        <a href="login.php"><input id="loginbutton" type="button" name="loginbutton" value="Back"></a>

       
        
      </form>

    <?php 

        if(isset($_POST['button']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
           

          if ($password==$cpassword) {

            $query="select * from user where username='$username'";
            $query_run=mysqli_query($con,$query);

            if(mysqli_num_rows($query_run)>0){

                echo'<script   type="text/javascript" >alert("Username already exist.. try another one")</script>';

            }
            else{
              $query1="insert into user values('$username','$password')";
              $query_run1=mysqli_query($con,$query1);

              if($query_run1)
              {
                   echo'<script   type="text/javascript" >alert("User registered")</script>';

              }
              else
              {
                 echo'<script   type="text/javascript" >alert("error")</script>';

              }
            }
          }
          else
          {
                echo'<script  type="text/javascript" >alert("password does not match")</script>';
          }
        }
     ?>
    </div>

    
    
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
