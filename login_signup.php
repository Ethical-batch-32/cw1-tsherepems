<?php

@include 'config.php';

session_start();

if(isset($_POST['login'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['admin'];
         header('location:teacher.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:userpage.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }
}
   if(isset($_POST['register'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = ($_POST['password']);
    $cpass = ($_POST['cpassword']);
    // $user_type = "user";
 
    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
       $error[] = 'user already exist!';
 
    }else{
 
       if($pass != $cpass){
          $error[] = 'password not matched!';
       }else{
          $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$pass')";
          mysqli_query($conn, $insert);
          // header('location:login_form.php');
          $error[] = 'You have been register successfully';
       }
    }
};

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Signup</title>
  <link rel="stylesheet" href="./login/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
      <!--Data or Content-->
      <div class="box-1">
          <div class="content-holder">
              <h2>Hello!</h2>
             
              <button class="button-1" onclick="signup()">Sign up</button>
              <button class="button-2" onclick="login()">Login</button>
          </div>
      </div>

      <!--Forms-->
      <div class="box-2">
      <form action="" method="post">
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
        
          <div class="login-form-container">
              <h1>Login Form</h1>
              <input type="email" name="email" placeholder="email" class="input-field">
              <br><br>
              <input type="password" name="password" placeholder="Password" class="input-field">
              <br><br>
              <input class="login-button"  type="submit" name="login" value="Login">

              <!-- <button class="login-button" name="login" type="button">Login</button> -->
          </div>
</form>

<!--Create Container for Signup form-->
      <div class="signup-form-container">
          <h1>Sign Up Form</h1>
      <form action="" method="post">

          <input type="text"name="name" placeholder="Username" class="input-field">
          <br><br>
          <input type="email" name="email" placeholder="Email" class="input-field">
          <br><br>
          <input type="password" name="password" placeholder="Password" class="input-field">
          <br><br>
          <input type="password" name="cpassword" placeholder="Password" class="input-field">
          <br><br>
          <input  required class="signup-button"  type="submit" name="register" value="Sign Up">

          <!-- <button class="signup-button"  name="register" type="button">Sign Up</button> -->
      </div>

      </form>


      </div>
<!-- partial -->
  <script  src="./login/login.js"></script>

</body>
</html>
