<?php
   
            if(isset($_POST["login"])){
       
          $email = $_POST['email'];
          $password = md5($_POST['password']);
            include "config.php";
            $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {  
              session_start();
              $_SESSION['email'] = $email;
             
             
                 header("Location: booking_suit.php");
                 }
                 $errors=array();
         if(empty( $email) OR empty(  $password)  ){
          array_push($errors,"All fields are required");
          echo " <script> alert('all felids are required')</script>";
         }
         
         else {   
             echo " <script> alert('Invalid email or password.')</script>";
             }
                 }
                 
                
                  
                
                    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
    <!-- <header class="header">
        <nav class="navbar">
            <a href="">home</a>
            <a href="">about</a>
            <a href="">service</a>
            <a href="">contact</a>
        </nav>
    </header> -->
    <div>
        <div class="container">
            <div class="content">
                <h2>HAILE RESORT</h1>
                    <div class="text">
                        <h2>welcome <br><span>to haile resort, ARBA-MINCH.</span> </h2>
                        <p>it is haile resort located in Arba-Minch,the place you are ever like.</p>
                    </div>
                    
            </div>
            <div class="logreg-box">
                <div class="form-box login">
                    <form action="signin.php" method="post">
                        <h2>Sign in</h2>
                        <div class="input-box">
                            <span class="icon"></span>
                            <input type="email" name="email" id="">
                            <label for="">email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"></span>
                            <input type="password" name="password" id="">
                            <label for="">password</label>
                        </div>
                        <input type="submit" class="btn" name="login" value="login">
                        <div class="login-register">
                            <p>don't have an account? <a href="signup.php" class="login-register">sign up</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        
</body>

</html>