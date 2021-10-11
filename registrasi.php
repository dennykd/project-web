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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/13696713a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="form.css"/>
    <title>Sign Up</title>
  </head>
  <body>
    <div class="container">
      <!-- <h4 class="text-center">Sign Up</h4>
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
    </div> -->
    <div class="row justify-content-center">
        <div class="text-box col-md-4 text-center border-end">
          <h4 class="text-white">WELCOME TO</h4>
          <h1 class="text-white">INFINITY CAFE</h1>
        </div>
        <div class="login-box col-md-4">
          <h4 class="text-center">Sign Up</h4>
            <form action="" method="post">
              <div class="form-group-regis">
                <label><h6>Username</h6></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                  </div>
                  <input type="text" name="username" class="form-control" placeholder="Enter Your Username" />
                </div>
              </div>
              <div class="form-group-regis">
                <label><h6>Email Address</h6></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Enter Your Email" /> 
                  </div>
              </div>
              <div class="form-group-regis">
                <label><h6>Password</h6></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Enter Your Password" />
                </div>
              </div>
              <div class="btn-regis">
              <button type="submit" name="signup" class="btn btn-primary">CREATE ACCOUNT</button>
              </div>
              <p>Already have an account?<a class="daftar-regis" href="login.php">Login</a></p>
            </form>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
