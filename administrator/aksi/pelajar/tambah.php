<?php
    include "../../../config/koneksi.php";

    $data=md5($_POST['password']);
    $pass=hash("sha512",$data);
    if ($_FILES['gambar']['size'] != 0)
    {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../img/".$_FILES['gambar']['name']);
        if($move)
        {
        mysqli_query($koneksi, "INSERT INTO users (username, password, gambar, nama_lengkap, nis, nisn, tmp_lhr, tgl_lhr, jk, no_telp, email, alamat, id_session) VALUES ('$_POST[a]', '$pass', '$fileName', '$_POST[b]', '$_POST[c]', '$_POST[d]', '$_POST[e]', '$_POST[f]', '$_POST[g]', '$_POST[h]', '$_POST[i]', '$_POST[j]', '$pass')");
        echo "<script>window.alert('Data Berhasil di Tambahkan!');
                window.location='../../allpelajar'</script>";
        }
    }
    else
    {
        mysqli_query($koneksi, "INSERT INTO users (username, password, nama_lengkap, nis, nisn, tmp_lhr, tgl_lhr, jk, no_telp, email, alamat, id_session) VALUES ('$_POST[a]', '$pass', '$_POST[b]', '$_POST[c]', '$_POST[d]', '$_POST[e]', '$_POST[f]', '$_POST[g]', '$_POST[h]', '$_POST[i]', '$_POST[j]', '$pass')");
        echo "<script>window.alert('Data Berhasil di Tambahkan!');
                window.location='../../allpelajar'</script>";
    }
?>
