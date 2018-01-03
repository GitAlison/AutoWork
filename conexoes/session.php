<?php

if (!isset($_SESSION['loguser'])) {
  header('Location: login.php');
  session_destroy();
}
?>
