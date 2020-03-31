<?php
    include "../../../config/koneksi.php";

        if ($_FILES['gambar']['size'] != 0)
        {
            $fileName = $_FILES['gambar']['name'];
            $move = move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../img/".$_FILES['gambar']['name']);
            if($move)
            {
            mysqli_query($koneksi, "UPDATE users SET nama_lengkap='$_POST[b]', no_telp='$_POST[c]', email='$_POST[d]', gambar='$fileName' WHERE id_session = '$_POST[id]'");
            header("location:../../manajemenuser");
            }
        }
        if($_POST['password']!=''){
            mysqli_query($koneksi, "UPDATE users SET password='$_POST[password]', nama_lengkap='$_POST[b]', no_telp='$_POST[c]', email='$_POST[d]' WHERE id_session = '$_POST[id]'");
            header("location:../../manajemenuser");
        }
         else{
            mysqli_query($koneksi, "UPDATE users SET nama_lengkap='$_POST[b]', no_telp='$_POST[c]', email='$_POST[d]' WHERE id_session = '$_POST[id]'");
            header("location:../../manajemenuser");
        }
?>
