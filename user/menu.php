<?php $users= mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users where username='".$_SESSION['namauser']."'")); ?>
<?php $x= mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM menu where id='1'")); ?>
<?php $y= mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM menu where id='2'")); ?>
<header class="main-header" style="border-bottom: 2px solid #fff;">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
          <a href="home" class="navbar-brand"><b>Aplikasi Kartu Pelajar</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="home"><i class="fa fa-home"></i><span class="sr-only">(current)</span></a></li>
          <li><a href="updatepelajar?id=<?php echo $users["id_session"];?>"><i class="fa fa-edit"></i> UPDATE IDENTITAS PELAJAR</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> CETAK KARTU<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a target="blank" href="<?php echo $x["link"];?>?id=<?php echo $users["id_session"];?>">KARTU PELAJAR</a></li>
              <li><a target="blank" href="<?php echo $y["link"];?>?id=<?php echo $users["id_session"];?>">KARTU PERPUSTAKAAN</a></li>
            </ul>
          </li>
        </ul>


      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu bg-purple">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <i class="glyphicon glyphicon-user"></i><span class="hidden-xs"><?php echo "$users[nama_lengkap]"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../img/<?php echo "$users[gambar]"; ?>" class="img-circle" alt="User Image" width="20px" alt="user image">
                <p>
                  <?php echo "$users[nama_lengkap]"; ?><br>
                  NIS <?php echo "$users[nis]"; ?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="updateakun?id=<?php echo "$users[id_session]"; ?>" class="btn btn-info btn-flat"><i class="fa fa-edit"></i> Edit Akun Saya</a>
                </div>
              </li>
            </ul>
          </li>
           <li class=""><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> KELUAR</a></li>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>
