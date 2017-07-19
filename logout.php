<?php
  session_start();
  unset($_SESSION['username']);
  include("redirect_to_index.php");
?>