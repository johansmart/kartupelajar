<?php
  session_start();
  error_reporting(1);
  include "config/koneksi.php";
  include "config/library.php";
  include "config/fungsi_indotgl.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-7">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM identitas WHERE id = '1'")); ?>
  <link rel="shortcut icon" href="img/<?php echo "$r[gambar]";?>">
    <title style="text-transform: uppercase;"><?php echo "$r[title]";?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <script language="javascript">
    function validasi(form){
      if (form.username.value == "")
      {
        alert("Anda belum mengisikan Username.");
        form.username.focus();
        return (false);
      }

      if (form.password.value == "")
      {
        alert("Anda belum mengisikan Password.");
        form.password.focus();
        return (false);
      }
    </script>
  </head>
  <body class="hold-transition login-page" style="background-image: url('img/bg1.png');">

  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="alert alert-warning" role="alert">
            <h2><center><i class="fa fa-info-circle"></i> Informasi</center></h2>
            <strong>Permintaan Password Anda!</strong> Berhasil dikirim, selanjutnya anda akan menerima email tentang akun dan password anda dari system. klik <a href="index.php"><strong><i>disini</i></strong></a> untuk login.
        </div>
      </div>
    </div>
  </div>


  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
  </body>
</html>
