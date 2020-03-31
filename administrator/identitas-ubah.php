<?php
  session_start();
  error_reporting(1);
  include '../config/koneksi.php';
  ob_start;
  if (trim($_SESSION['leveluser'])=='')
  {
    echo "<script>document.location='../';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM identitas WHERE id = '1'")); ?>
  <link rel="shortcut icon" href="../img/<?php echo "$r[gambar]";?>">
  <title style="text-transform: uppercase;"><?php echo "$r[title]";?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini" data-spy="scroll" data-target="#scrollspy">
<div class="wrapper">
  <!-- Star menu -->
  <?php include "menu.php";?>
  <!-- End menu -->

  <!-- Start content -->
  <div class='content-wrapper'>
    <!-- Content Header (Page header) -->
    <section class='content-header'>
      <h1>
        Pengaturan
        <small>Control panel</small>
      </h1>
      <ol class='breadcrumb'>
        <li><a href='admin.php'><i class='fa fa-dashboard'></i> Home</a></li>
        <li class='active'>Identitas Aplikasi Sekolah</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class='content'>
      <!-- Small boxes (Stat box) -->
      <div class='row'>
        <div class='col-md-12'>
          <div class='box box-info'>
            <div class='box-header with-border'>
              <h3 class='box-title'><i class='fa fa-edit'></i> Form Identitas Aplikasi</h3>
            </div>
            <!-- /.box-header -->
            <?php
            $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM identitas WHERE id = '1'"));
            ?>
            <!-- form start -->
            <form class='form-horizontal' role='form' method=POST action='aksi/identitas/ubah.php' enctype='multipart/form-data'>
              <div class='box-body'>
                <div class='form-group'>
                  <input type='hidden' name='id' value='<?php echo "$r[id]";?>'>
                  <label class='col-sm-3 control-label'>Logo Saat Ini :</label>
                  <div class='col-sm-6'>
                    <img class="img-responsive img" alt="Responsive image" src="../img/<?php echo "$r[gambar]";?>" width="50px"> <?php echo "$r[gambar]";?>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Ganti Logo :</label>
                  <div class='col-sm-6'>
                    <input type='file' class='form-control' name='gambar'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Nama Aplikasi :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' placeholder='Tuliskan nama title website'  name='title' value='<?php echo "$r[title]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Nama Sekolah :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' placeholder='Tuliskan nama dinas'  name='a' value='<?php echo "$r[sekolah]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Alamat :</label>
                  <label class='col-sm-1 control-label'>Jalan</label>
                  <div class='col-sm-5'>
                  <input type='text' class='form-control'  name='b' value='<?php echo "$r[jln]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'></label>
                  <label class='col-sm-1 control-label'>Kelurahan</label>
                  <div class='col-sm-5'>
                    <input type='text' class='form-control' name='c' value='<?php echo "$r[kel]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'></label>
                  <label class='col-sm-1 control-label'>Kecamatan</label>
                  <div class='col-sm-5'>
                    <input type='text' class='form-control' name='d' value='<?php echo "$r[kec]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'></label>
                  <label class='col-sm-1 control-label'>Kab/Kota</label>
                  <div class='col-sm-5'>
                    <input type='text' class='form-control' placeholder='Tuliskan nama kabupaten/kota'  name='e' value='<?php echo "$r[kab]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'></label>
                  <label class='col-sm-1 control-label'>Provinsi</label>
                  <div class='col-sm-5'>
                    <input type='text' class='form-control' placeholder='Tuliskan nomor kode pos'  name='f' value='<?php echo "$r[prov]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Kode Pos :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' placeholder='Tuliskan nama provinsi'  name='g' value='<?php echo "$r[pos]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Nomor Telepon :</label>
                  <div class='col-sm-6'>
                    <input type='number' class='form-control' placeholder='Tuliskan nomor telepon kantor'  name='h' value='<?php echo "$r[telp]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Email :</label>
                  <div class='col-sm-6'>
                    <input type='email' class='form-control' placeholder='Tuliskan alamat email'  name='i' value='<?php echo "$r[email]";?>'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Website :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' placeholder='Tuliskan url website'  name='j' value='<?php echo "$r[web]";?>'>
                  </div></div>
                  <div class='form-group'>
                  <label class='col-sm-3 control-label'>Nama Kepala Sekolah :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' placeholder='Tuliskan Nama Kepala Sekolak'  name='k' value='<?php echo "$r[kepsek]";?>'>
                  </div></div>
                  <div class='form-group'>
                  <label class='col-sm-3 control-label'>NIP Kepala Sekolah :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' placeholder='Tuliskan NIP Kepala Sekolah'  name='l' value='<?php echo "$r[nip]";?>'>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class='box-footer'>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'></label>
                  <div class='col-sm-6'>
                    <button type='submit' class='btn btn-flat btn-info' style='width: 100px'>SIMPAN</button>
                    <a href='admin.php' class='btn btn-flat btn-success' style='width: 100px'>BATAL</a>
                  </div>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
<!-- End content -->



  <!-- Start footer -->
  <?php include "footer.php";?>
  <!-- End footer -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/docs.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
