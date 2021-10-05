<?php
  require "koneksi.php";

  // jika tombol register ditekan
  if ( isset($_POST["signup"])) {

      if( registrasi($_POST) > 0) {
        echo "<script>
              alert('Registrasi Berhasil!');
              document.location.href = 'registrasi.php';
              </script>"; 
      } else {
        echo "<script>
              alert('Registrasi Gagal!');
              document.location.href = 'registrasi.php';
              </script>"; 
      }
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="form.css"/>
    <script src="https://kit.fontawesome.com/13696713a4.js" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>
  <body>
    <div class="container regis">
      <h4 class="text-center">Sign Up</h4>
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
          <label><h6>Email Address</h6></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-envelope"></i></div>
            </div>
            <input type="text" name="email" class="form-control" placeholder="Enter Your Email" />
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
        <div class="form-group">
          <label><h6>Confirmation Password</h6></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            <input type="password" name="re_password" class="form-control" placeholder="Confirmation Your Password" />
          </div>
        </div>
        <div>
        <button type="submit" name="signup" class="btn btn-primary">CREATE ACCOUNT</button>
        </div>
        <p class="join" >Already have an account?<a href="login.php">Login</a></p>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
