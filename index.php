<?php include('koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('./parts/inc_meta.php');?>
  <title>Infinity Cafe</title>
</head>
<body>
  <!-- header -->
  <header>
    <?php include('./parts/inc_nav.php');?>
  </header>
  <!-- body -->
  <main>
    <div class="my-5">
      <?php include('./pages.php');?>
    </div>
  </main>
  <!-- footer -->
  <footer class="py-5 bg-dark text-light">
    <?php include('./parts/inc_footer.php');?>
  </footer>
  <!-- js -->
  <?php require_once('./parts/inc_js.php');?>
</body>
</html>