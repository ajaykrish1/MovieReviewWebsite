 <?php  
      session_start();
 require 'dbconfig\config.php';
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
       $rate=$_POST['rating'];
      $movie_name=$_POST['movie_name'];
      $review=$_POST['review']; 
       $username=$_SESSION['username'];
      $query = "INSERT INTO movies(name,movie_name,review,username,rating) VALUES ('$file','$movie_name','$review','$username','$rate')";  

      if(mysqli_query($con, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 
 if(isset($_POST["delete"]))  
 { 
  $username=$_SESSION['username'];
  $moviename=$_POST['moviename'];
  $query1="DELETE FROM movies WHERE username='$username' and movie_name='$moviename'";
   if(mysqli_query($con, $query1))  
      {  
           echo '<script>alert("Record Deleted")</script>';  
      } 
 }
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Add movies</title>  
 
       
           
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
           <link rel="stylesheet" href="css\add_movies.css">


      </script>
      </head>  
      <body>  
        <table>
      <tr>
        <td> <h1>Welcome <?php echo $_SESSION['username'] ?>
        </h1>
        </td>
        <td>
             <div class="forms">
      <form  action="add.php" method="post">
        
        <input id="bttn" type="submit" name="logoutbttn" value="Logout">
      </form>
    <?php 
      if(isset($_POST["logoutbttn"]))
      {
        session_destroy();
        header('location:login.php');
        echo "bitch";
      }

       ?>
        </td>
      </tr>
    </table>

           <br /><br />  
           <div class="container" >  
            <div class="row">
                
                 
                <div class="col-md-8">
                 <div class="list">
                  <h1>Movies list</h1>
                <table class="table table-bordered">  
                       
                <?php  
                $username=$_SESSION['username'];
                $query = "SELECT * FROM movies where username='$username' ORDER BY id DESC";  
                $result = mysqli_query($con, $query);  
                $i=1;
                while($row = mysqli_fetch_array($result))  
                {  
                  

                   


                     echo "<b>".$i.") ".$row['movie_name']."</b>";
                    echo '<br>';echo '<br>';
                     echo '  
                           
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="300" width="238" class="img-thumnail" />  
                            
                     ';  
                      echo '<br>';echo '<br>';
                      echo "Review: ";
                     echo $row['review'];
                       echo '<br>';echo '<br>';
                    echo 'Rated: ';
                    echo $row['rating'];
                    echo ' star';
                        echo '<br>';  echo '<br>';echo '<br>';echo '<br>';echo '<br>';
                        $i++;
                }  
                ?>  
                </table>  
                 </div>

  </div>
<div class="col-md-4">

                <form method="post" enctype="multipart/form-data">  
                  <h1>Add movies to list</h1>
      <br><br><br>
                     <input type="file" name="image" id="image" required /> 

                     <button type="button" id="Movie_button" name=""><b>Add Image</b></button>
                      <span id=custom_text>No file chosen ,yet</span>
                      <br> 
                       <br>
      <label for="movie_name">Movie name:</label>
      <input type="text" id="movie_name" name="movie_name" value="">
      <br>
      <br>

      <label for="comment">Review:</label>
      <input type="text" id="comment" name="review" value="">
        <br>
      <br>
      <label for="Rating"><h2>Movie Ratings</h2></label>
      <br>
      <div class="star-wrapper">

        <label for="star-1">&#x2605;</label>
        <input type="radio" id="star-1" name="rating" value="1">
        <label for="star-2">&#x2605;</label>
        <input type="radio" id="star-2" name="rating" value="2">
        <label for="star-3">&#x2605;</label>
        <input type="radio" id="star-3" name="rating" value="3">
        <label for="star-4">&#x2605;</label>
        <input type="radio" id="star-4" name="rating" value="4">
        <label for="star-5">&#x2605;</label>
        <input type="radio" id="star-5" name="rating" value="5">



   
   
      </div>
      
     
                     <input id="submit" type="submit" name="insert" value="Submit">
                </form>  

<br>
<br><br>
                <form method="post" enctype="multipart/form-data">  
                  <h1>Delete Movies</h1>
                  <label for="moviename">Movie name:</label>
                 <input type="text" id="movie_name" name="moviename" value="">
                 <input id="submit" type="submit" name="delete" value="Delete">
                </form>
                </div>
           </div>  
           </div> 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     

     <script type="text/javascript" src="js\add.js"></script>

      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  