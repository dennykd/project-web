<?php

require ('koneksi.php');

if( isset($_POST["login"]) ) {

  $username = $_POST["$username"];
  $password = $_POST["$password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
  // cek username
  if( mysqli_num_rows($result) == 1 ) {
  // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify( $password, $row["$password"])) {
          header("location: index.php");
          exit;
        }

  }
  
  $error = true;
} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/13696713a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="form.css"/>
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="text-box col-md-4 text-center border-end">
          <h4 class="text-white">WELCOME TO</h4>
          <h1 class="text-white">INFINITY CAFE</h1>
        </div>
        <div class="login-box col-md-4">
          <h4 class="text-center">Please Login</h4>
            <form action="" method="post">
              <div class="form-group">
                <label><h6>Username</h6></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                  </div>
                  <input type="text" name="username" class="form-control" placeholder="Enter Your Username" />
                </div>
              </div>
              <div class="form-group">
                <label><h6>Password</h6></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Enter Your Password" />
                </div>
              </div>
              <button type="submit" name="login" class="btn btn-primary">LOGIN</button>
              <a class="daftar" href="registrasi.php">Create Account</a>
            </form>
        </div>
      </div>
    </div>
  </body>
