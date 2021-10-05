<?php
  $varglobal = 0;

  function test () {
    // syntax
    if ($GLOBALS['varglobal'] > 0) {
      $vartest = 'Ini variable lokal lebih dari 1';
    } else {
      $vartest = 'Ini variable lokal kurang dari 1';
    }
    return $vartest;
  }
  echo $varglobal;
  echo test();

  echo '<br>';

  $var1 = 1;
  $var2 = '1';

  if ($var1 === $var2) {
    echo 'Ini sama';
  } else {
    echo 'Ini beda';
  }

  /*
    ini komentar line 1
    ini komentar line 2
    ..
  */
  // satu lini
  $varA = 1;
  $vara = 0;
  if ($varA > 0) {
?>
    <h1>Ini halaman Pertama</h1>
<?php
  } else {
?>
    <h1>Ini halaman Kedua</h1>
<?php
  }
?>


asdjhasjhaksdhajksdha