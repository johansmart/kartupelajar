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
<body class="hold-transition skin-blue layout-top-nav" data-spy="scroll" data-target="#scrollspy">
<div class="wrapper">
  <?php include "menu.php" ?>

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Profil User
          <small>Aplikasi Katru Pelajar</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Layout</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-edit"></i>Form Ubah Data User</h3>
            </div>
            <div class="box-body">
              <?php
            $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users where id_session='$_GET[id]'"));
            ?>
            <!-- form start -->
            <form class='form-horizontal' role='form' method=POST action='aksi/user-ubah.php' enctype='multipart/form-data'>
              <div class='box-body'>
                <div class='form-group'>
                  <input type='hidden' name='id' value='<?php echo "$r[id_session]";?>'>
                  <label class='col-sm-3 control-label'>Foto saat ini :</label>
                  <div class='col-sm-6'>
                    <img class="img-responsive img-circle" alt="Responsive image" src="../img/<?php echo "$r[gambar]";?>" width="50px"> <?php echo "$r[gambar]";?>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Unggah Foto Baru :</label>
                  <div class='col-sm-6'>
                    <input type='file' class='form-control' name='gambar'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>username :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' placeholder='Tuliskan username' name='a' value="<?php echo "$r[username]";?>" disabled>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Ganti Password : </label>
                  <div class='col-sm-6'>
                    <input type='password' class='form-control' name="password">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Nama :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' name='b' value="<?php echo "$r[nama_lengkap]";?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Telepon :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' name='c' value="<?php echo "$r[no_telp]";?>">
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'>Email :</label>
                  <div class='col-sm-6'>
                    <input type='text' class='form-control' placeholder='Tuliskan alamat email' name='d' value="<?php echo "$r[email]";?>">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class='box-footer'>
                <div class='form-group'>
                  <label class='col-sm-3 control-label'></label>
                  <div class='col-sm-6'>
                    <button type='submit' class='btn btn-info' style='width: 100px'>SIMPAN</button>
                    <a href='manajemenuser' class='btn btn-success' style='width: 100px'>BATAL</a>
                  </div>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
            </div>
          </div>
      </section>
    </div>
  </div>

  <?php include "footer.php" ?>
</div>

<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/docs.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    $("#datemask2").inputmask("bb/hh/yyyy", {"placeholder": "bb/hh/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
