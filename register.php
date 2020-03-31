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
      <center><img src="img/<?php echo "$r[gambar]";?>" width="70px"><br><h2><?php echo "$r[title]";?></h2></center>
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-edit"></i> Form Permintaan Akun Perusahaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="aksi-reg.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama Perusahaan :</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="Tuliskan Nama Perusahaan Anda" name="a" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nama Pemilik :</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="Tuliskan Nama Pemilik Perusahaan" name="b" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Email :</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" placeholder="Tulikan Alamat Email Aktif" name="c" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Telepon :</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" placeholder="Tulikan Nomor Telepon Aktif" name="d" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-7">
                    <div class="checkbox">
                      <button type="submit" name="submit" class="btn btn-primary">Kirimkan Permintaan</button>
                      <a href="index.php" type="button" class="btn btn-danger">Batal</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
