<?php

$conn = mysqli_connect("localhost", "root", "", "registrasi");

function registrasi($data) {
    global $conn;

    $username = mysqli_real_escape_string($conn, $data["username"]);
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["re_password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!');
              </script>";
      return false;
    }


    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }
    
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke data base
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);
}

?>