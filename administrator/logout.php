<?php
  session_start();
  session_destroy();
  echo "
  <script>
    window.alert('Anda Sukses Keluar Dari System.');
    window.location='../loginsystem'
  </script>";
  die();
?>
