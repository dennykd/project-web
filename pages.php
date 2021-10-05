<?php
  $_pages = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
  switch ($_pages) {
    case "home":
      include('./pages/home.php');
      break;
    case "contact":
      include('./pages/contact.php');
      break;
    case "galeri":
      include('./pages/gallery.php');
      break;
    default:
      include('./pages/default.php');
  }
?>