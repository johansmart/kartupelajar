 <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>ALT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo "$r[title]";?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="home">
              <span><?php
              $tanggal = date ("d");
              $bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
              $bulan = $bulan[date("n")];
              $tahun = date("Y");
              echo $tanggal ." ". $bulan ." ". $tahun;
              date_default_timezone_set('Asia/Jakarta');
              $jam=date("H:i");
              echo " - ". $jam." "."";
              $a = date ("H");
               if (($a>=1) && ($a<=10)){
              echo " Selamat Pagi";
              }
              else if(($a>10) && ($a<=13))
              {
              echo " Selamat Siang";
              }
              else if (($a>13) && ($a<=15))
              {
              echo " Selamat Sore";
              }
              else if (($a>15) && ($a<=17))
              {
              echo " Selamat Petang";
              }
              else { echo " Selamat Malam";
              }
              ?></span>
            </a>
          </li>
          <li class="bg-yellow">
            <a href="logoutsystem">
              <i class="fa fa-power-off"></i> <span> KELUAR</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php $users=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users")); ?>
          <img src="../img/<?php if (trim($users['gambar']) == ''){ echo "blank.png"; }else{ echo $users['gambar']; } ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo "$users[nama_lengkap]"; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU NAVIGASI</li>
        <li class="treeview">
          <a href="home">
            <i class="fa fa-dashboard"></i>
            <span>DASHBOARD</span>
          </a>
        </li>
        <li class="treeview">
          <a href="inputpelajar">
            <i class="fa fa-edit"></i>
            <span>INPUT DATA PELAJAR</span>
          </a>
        </li>
        <li class="treeview">
          <a href="allpelajar">
            <i class="fa fa-book"></i> <span>DATA PELAJAR</span>
          </a>
        </li>
        <li class="treeview">
          <a href="uploadpelajar">
            <i class="fa fa-upload"></i>
            <span>UNGGAH DATA PELAJAR</span>
          </a>
        </li>
        <li class="treeview">
          <a target="blank" href="downloadpelajar">
            <i class="fa fa-download"></i>
            <span>UNDUH DATA PELAJAR</span>
          </a>
        </li>
        <li class="treeview">
          <a href="printkartupelajar">
            <i class="fa fa-print"></i> <span>CETAK KARTU PELAJAR</span>
          </a>
        </li>
        <li class="treeview">
          <a href="printkartuperpus">
            <i class="fa fa-print"></i> <span>CETAK KARTU PERPUS</span>
          </a>
        </li>
        <li class="treeview">
          <a href="designkartu">
            <i class="fa fa-bars"></i> <span>DESAIN KARTU</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="templatekapel"><i class="fa fa-circle-o text-aqua"></i> KARTU PELAJAR</a></li>
            <li><a href="templatekaper"><i class="fa fa-circle-o text-aqua"></i> KARTU PERPUSTAKAAN</a></li>
            <li><a href="tandatangan"><i class="fa fa-circle-o text-aqua"></i> TANDA TANGAN</a></li>
            <li><a href="stempel"><i class="fa fa-circle-o text-aqua"></i> STEMPEL</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-info-circle"></i> <span>PEMBERITAHUAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="data-permintaan-akun.php"><i class="fa fa-circle-o text-aqua"></i> PERMINTAAN AKUN</a></li>
            <li><a href="data-lupa-password.php"><i class="fa fa-circle-o text-aqua"></i> LUPA PASSWORD</a></li>
          </ul>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>PENGATURAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="updateindentitas"><i class="fa fa-circle-o text-aqua"></i> IDENTITAS SEKOLAH</a></li>
            <li><a href="manajemenuser"><i class="fa fa-circle-o text-aqua"></i> MANAJEMEN USER</a></li>
            <li><a href="setmenucetakkartupelajar"><i class="fa fa-circle-o text-aqua"></i> MENU CETAK KAPEL</a></li>
            <li><a href="setmenucetakkartuperpus"><i class="fa fa-circle-o text-aqua"></i> MENU CETAK KAPER</a></li>
          </ul>
        </li>
        <li>
          <a href="logoutsystem">
            <i class="fa fa-power-off"></i> <span>KELUAR</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
