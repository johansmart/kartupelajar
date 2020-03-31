<table border="1">
  <tr style="height: 30px;color:#fff;">
    <th style="background: #13A6FC;">No.</th>
    <th style="background: #13A6FC;">Username</th>
    <th style="background: #13A6FC;">Password</th>
    <th style="background: #13A6FC;">NIS</th>
    <th style="background: #13A6FC;">NISN</th>
    <th style="background: #13A6FC;">Nama</th>
    <th style="background: #13A6FC;">Tempat Lahir</th>
    <th style="background: #13A6FC;">Tanggal Lahir</th>
    <th style="background: #13A6FC;">JK</th>
    <th style="background: #13A6FC;">Alamat</th>
    <th style="background: #13A6FC;">Email</th>
    <th style="background: #13A6FC;">No. Telp</th>
    <th style="background: #13A6FC;">Foto</th>
    <th style="background: #13A6FC;">ID</th>
  <?php
  // Fungsi Mengirimkan Raw Ke Excel
  header("Content-type: application/vnd-ms-excel");
  // Mendefinisikan Nama File Excel.xls
  header("Content-Disposition: attachment; filename=Tabel Data Pelajar.xls");
  error_reporting(1);
  include "../../config/koneksi.php";
  session_start();

  if (trim($_SESSION['leveluser'])=='')
  {
    echo "<script>document.location='index.php';</script>";
  }
  else
  {

      $tampil = mysqli_query($koneksi, "SELECT * FROM users WHERE level='user' ORDER BY nis ASC");
          $no=1;
          while ($r=mysqli_fetch_assoc($tampil))
          {
            $tt = date("d - m - Y", strtotime($r['tgl_lhr']));
            echo "
              <tr>
                <td><center>$no.</center></td>
                <td>$r[username]</td>
                <td>$r[password]</td>
                <td>$r[nis]</td>
                <td>$r[nisn]</td>
                <td>$r[nama_lengkap]</td>
                <td>$r[tmp_lhr]</td>
                <td><center>$tt</center></td>
                <td>$r[jk]</td>
                <td>$r[alamat]</td>
                <td>$r[email]</td>
                <td>$r[no_telp]</td>
                <td>$r[gambar]</td>
                <td>$r[id_session]</td>
              </tr>";
              $no++;
          }
      }

?>
</table>
