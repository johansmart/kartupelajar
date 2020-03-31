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
    <meta charset="utf-8">
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
  <body class="hold-transition login-page" style="background-image: url('img/bg3.png');">
    <?php
      if (!empty($_SESSION['leveluser']))
      {
        echo "<script>document.location='administrator';</script>";
      }

      if (isset($_POST['submit']))
      {
        $username = anti_injection($_POST['username']);
        $pass     = anti_injection($_POST['password']);

        if (!ctype_alnum($username) OR !ctype_alnum($pass))
        {
          ?>
          <div class='container'>
            <div class='row'>
                <div class='col-12'>
                   <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <center><h4><i class='fa fa-warning '></i> PERINGATAN!</h4><i>Sorry Maz and Mba Bro, Login-nya tidak bisa FULL-INJEKSI lho. Silahkan masukkan kembali username dan password..!</i></center>
                    </div>
                </div>
            </div>
          </div>
          <?php
        }
        else
        {
          $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$pass' AND blokir='N'");
          if(mysqli_num_rows($result) > 0)
          {
            $r= mysqli_fetch_array($result);
            session_start();
            $_SESSION['namauser']     = $r['username'];
            $_SESSION['namalengkap']  = $r['nama_lengkap'];
            $_SESSION['email']        = $r['email'];
            $_SESSION['passuser']     = $r['password'];
            $_SESSION['sessid']       = $r['id_session'];
            $_SESSION['nama_perusahaan']       = $r['nama_perusahaan'];
            $_SESSION['leveluser']    = $r['level'];
            $_SESSION['upload_image_file_manager'] = true;
            if($_SESSION["leveluser"] == "admin")
            {
            echo "<script>document.location='administrator';</script>";
            }
            else if($_SESSION["leveluser"] == "user")
            {
            echo "<script>document.location='user';</script>";
            }
          }
          else
          {
          ?>
          <div class='container'>
            <div class='row'>
                <div class='col-12'>
                   <div class='alert alert-info alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <center><h4><i class='fa fa-info-circle'></i> INFORMASI LOGIN</h4><i>Username atau Password yang anda masukkan salah atau tidak sesuai. Silahkan coba kembali..!</i></center>
                    </div>
                </div>
            </div>
          </div>
          <?php
          }
        }
      }
    ?>
    <div class="login-box" style="margin-top: 40px;">
      <div class="login-logo">
        <center><img class="img-responsive img" alt="Responsive image" src="img/<?php echo "$r[gambar]";?>"" width="90px"></center>
        <b style="text-transform: uppercase;"><?php echo "$r[title]";?><br></b>
      </div>
      <div  class="login-box-body" style="border-top: 10px solid #3c8dbc;border-top-left-radius: 20px; box-shadow: 0px 3px 6px 0px #3c8dbc;">
        <p class="login-box-msg"><b>L O G I N system</b></p>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Masukkan Username Anda" name="username">
            <span class="fa fa-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password">
            <span class="fa fa-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Ingat saya
                </label>
              </div>
            </div>
            <div class="col-xs-12">
              <button type="submit" name="submit" class="btn btn-primary btn-block"><i class="glyphicon glyphicon-log-in"></i> Login</button>
              <a target="blank" href="https://www.whatsup.com" class="btn btn-success btn-block"><i class="glyphicon glyphicon-lock"></i> Lupa Password?</a>
            </div>
          </div>
        </form>
      </div>

      <p class="text-center" style="background-color: #3c8dbc; color: #FFFFFF; border-bottom-right-radius: 20px; box-shadow: 0px 1px 6px 0px #3c8dbc;">
        <?php echo "$r[title]";?> - <?php echo "$r[sekolah]";?><br> Versi 2.0 <i class="fa fa-copyright"></i> Copyright <?php echo date("Y");?><br>
        <marquee>Powered by <a target="_blank" href="https://www.tomstone.id"><b style="color: #ffffff;">tomstone.id</b></marquee></a>
      </p>
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
