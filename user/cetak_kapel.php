<?php error_reporting(1);
    include '../config/koneksi.php';
    $tem=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tkapel WHERE id = '1'"));
?>
<!DOCTYPE html>
<html> <!-- Bagian halaman HTML yang akan konvert -->
<head>
    <meta charset='UTF-8'>
    <link rel="shortcut icon" href="../img/<?php echo "$r[gambar]";?>">
    <title>Cetak Kartu Pelajar</title>
</head>
<body onload='window.print()' style="font-family: arial;font-size: 12px;position:absolute;">
    <?php
        $i=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM identitas WHERE id = '1'"));
        $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users where id_session='$_GET[id]'"));$t = date("d - m - Y", strtotime($r['tgl_lhr']));
    ?>
<div style="width: 750px;height: 243px;margin: 50px;background-image: url('../img/<?php echo "$tem[gambar]";?>');">
    <img style="position: absolute;padding-left: 12px;padding-top: 5px;" class="img-responsive img" alt="Responsive image" src="../img/<?php echo "$i[gambar]";?>" width="40px">
    <img style="position: absolute;padding-left: 312px;padding-top: 5px;" class="img-responsive img" alt="Responsive image" src="../img/twh.png" width="50px">
    <p style="position: absolute; font-family: arial; font-size: 10px; color: #fff; padding-left: 85px;text-transform: uppercase; text-align: center;"> Pemerintah Provinsi <?php echo $i["prov"];?><br>Kabupaten <?php echo $i["kab"];?><br>Dinas Pendidikan<br><b style="font-size: 12px"><?php echo $i["sekolah"];?></b></p>
    <p style="padding-left: 123px;padding-top: 70px; "><b>KARTU PELAJAR</b></p>
    <img style="border: 1px solid #ffffff;position: absolute;margin-left: 20px;margin-top: -20px;" src="../img/<?php echo "$r[gambar]";?>" width="80px">
        <table style="margin-top: -10px;padding-left: 120px; position: relative;font-family: arial;font-size: 11px;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo "$r[nama_lengkap]";?></td>
            </tr><tr>
                <td>NIS/NISN</td>
                <td>:</td>
                <td><?php echo "$r[nis]";?>/<?php echo "$r[nisn]";?></td>
            </tr>
            </tr><tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?php echo "$r[tmp_lhr]";?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo "$t";?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo "$r[jk]";?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo "$r[alamat]";?></td>
            </tr>
            <tr>
                <td>Berlaku</td>
                <td>:</td>
                <td>Selama Menjadi Siswa/i</td>
            </tr>
        </table>
        <p style="padding-left: 10px;font-size: 8px; font-family: arial;position: absolute;">Alamat: Jl. <?php echo "$i[jln]";?> Desa <?php echo "$i[kel]";?> Kec. <?php echo "$i[kec]";?> - Kode Pos <?php echo "$i[pos]";?><br> Email: <?php echo "$i[email]";?> | Telp. <?php echo "$i[telp]";?> | Website: <?php echo "$i[web]";?></p>
        <p style="margin-top: -200px;padding-left: 480px;padding-top: 10px;"><b>TATA TERTIB SEKOLAH</b><br>
<ol style="padding-left: 400px;color: #FFFFFF; font-family: arial;font-size: 11px;text-align: justify;padding-right: 10px">
                      <li>Bertakqwa kepada Tuhan Yang Maha Esa</a></li>
                      <li>Menggalang kesatuan kerukunan pelajar</li>
                      <li>Belajar hidup berorganisasi untuk menyiapkan diri dalam mental, moral budi pekerti yang luhur, meningkatkan kecerdasan dan keterampilan</li>
                      <li>Dapat menduduki fungsinya sebagai pewaris, penerus perjuangan bangsa dan pancasila yang penuh dengan kratif, aktif dan disiplin Nasional demi suksesnya program pendidikan sekolah</li>
                    </ol>
        </p><br>
        <p style="position: absolute;padding-left: 550px;margin-top: -10px;font-size: 10px; font-family: arial;">
           <?php echo "$i[prov]";?>, <?php
                $tanggal = date ("j");
                $bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
                $bulan = $bulan[date("n")];
                $tahun = date("Y");
                echo $tanggal ." ". $bulan ." ". $tahun;
            ?>
        </p>
        <?php
            $t=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM ttangan WHERE id = '1'"));
        ?><br>
        <p style="position: absolute;padding-left: 550px;margin-top: -10px;font-size: 10px; font-family: arial;">Mengetahui, <br>Kepala Sekolah</p>
        <img style="position: absolute;padding-left: 530px;padding-top: 5px;" class="img-responsive img" alt="Responsive image" src="../img/<?php echo "$t[gambar]";?>" width="70px">
        <?php
            $s=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM stempel WHERE id = '1'"));
        ?><br><img style="position: absolute;padding-left: 530px;margin-top: -20px;" class="img-responsive img" alt="Responsive image" src="../img/<?php echo "$s[gambar]";?>" width="50px">
        <p style="position: absolute;padding-left: 550px;margin-top: 20px;font-size: 10px; font-family: arial;"><b><u><?php echo "$i[kepsek]";?></u></b><br>NIP. <?php echo "$i[nip]";?></p>
</div>


</body>
</html>
