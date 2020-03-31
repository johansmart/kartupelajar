<?php
    include "../../config/koneksi.php";
    if ($_FILES['gambar']['size'] != 0)
    {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], "../../img/".$_FILES['gambar']['name']);
        if($move)
        {
            mysqli_query($koneksi, "UPDATE users SET nama_lengkap='$_POST[b]', nis='$_POST[c]', nisn='$_POST[d]', tmp_lhr='$_POST[e]', tgl_lhr='$_POST[f]', jk='$_POST[g]', no_telp='$_POST[h]', email='$_POST[i]', alamat='$_POST[j]', gambar='$fileName' WHERE id_session = '$_POST[id]'");
            echo "<script>window.alert('Data Berhasil di Ubah.');
                window.location='../home'</script>";
        }
    }
        else
    {
            mysqli_query($koneksi, "UPDATE users SET nama_lengkap='$_POST[b]', nis='$_POST[c]', nisn='$_POST[d]', tmp_lhr='$_POST[e]', tgl_lhr='$_POST[f]', jk='$_POST[g]', no_telp='$_POST[h]', email='$_POST[i]', alamat='$_POST[j]' WHERE id_session = '$_POST[id]'");
            echo "<script>window.alert('Data Berhasil di Ubah.');
                window.location='../home'</script>";
        }

?>
