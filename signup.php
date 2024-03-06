<?php
      if(isset($_POST["submit"])){
       $fname=$_POST["username"];
        $email=$_POST["email"];
         $password=$_POST["password"];
         $passwordRepeat=$_POST["repeat_password"];
     
         $errors=array();
         if(empty( $fname) OR empty( $email) OR empty(  $password)  ){
          array_push($errors,"All fields are required");
        echo " <script> alert('all felids are required')</script>";

         }
        else if(!filter_var( $email,FILTER_VALIDATE_EMAIL)){
          array_push(  $errors,"Email is not valid");
        echo " <script> alert('email is not valid.')</script>";
        } 
        else if(strlen($password)<8){
         array_push($errors,"Password must be at least 8 characters long");
        echo " <script> alert('Password must be at least 8 characters long')</script>";
        }
        else if($password!==$passwordRepeat){
			array_push($errors, "password does not  match");
            echo " <script> alert('password does not  match')</script>";
        }
        include "config.php";
     
 $sql="SELECT * FROM login WHERE email='$email'";
	  $result=mysqli_query($conn, $sql) ;
	  $rowcount=mysqli_num_rows($result);
	  if($rowcount>0){
		array_push($errors,"Email already exists");
        echo " <script> alert('email already exist')</script>";

	  }

        if (count($errors)>0){
          foreach($errors as $errors){
           
            // echo " <script> alert('wrong information')</script>";
          }
         }
         
         
         else {
            $password=md5($password);
          $sql ="INSERT INTO login(username, email, password) VALUES(?,?,?)";
          $stmt=mysqli_stmt_init($conn);
          $preparestmt=mysqli_stmt_prepare($stmt,$sql);
         if($preparestmt) {
          mysqli_stmt_bind_param($stmt,"sss",$fname,  $email, $password);
          mysqli_stmt_execute($stmt);
          echo" <script> alert('you are registered successfully')</script>";
          session_start();
          header("location: signin.php");
         }else{
          die("something went wrong");
         }

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
                    <form action="" method="post">
                        <h2>Sign up</h2>
                        <div class="input-box">
                            
                            <input type="text" name="username" id="">
                            <label for="">username</label>
                        </div>
                        <div class="input-box">
                            
                            <input type="email" name="email" id="">
                            <label for="">email</label>
                        </div>
                        <div class="input-box">
                            
                            <input type="password" name="password" id="">
                            <label for="">password</label>
                        </div>
                        <div class="input-box">
                            
                            <input type="password" name="repeat_password" id="">
                            <label for="">confirm password</label>
                        </div>
                        <input type="submit" class="btn" name="submit" value="sign up">
                        <div class="login-register">
                            <p>already have an account? <a href="signin.php" class="login-register">sign in</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        
</body>

</html>