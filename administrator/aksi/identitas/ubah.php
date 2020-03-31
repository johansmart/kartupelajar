<?php
    include "../../../config/koneksi.php";

    if ($_FILES['gambar']['size'] != 0)
    {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../img/".$_FILES['gambar']['name']);
        if($move)
        {
        mysqli_query($koneksi, "UPDATE identitas SET title='$_POST[title]', sekolah='$_POST[a]', jln='$_POST[b]', kel='$_POST[c]', kec='$_POST[d]', kab='$_POST[e]', prov='$_POST[f]', pos='$_POST[g]', telp='$_POST[h]', email='$_POST[i]', web='$_POST[j]', kepsek='$_POST[k]', nip='$_POST[l]', gambar='$fileName' WHERE id = '$_POST[id]'");
        }
    }
    else
    {
        mysqli_query($koneksi, "UPDATE identitas SET title='$_POST[title]', sekolah='$_POST[a]', jln='$_POST[b]', kel='$_POST[c]', kec='$_POST[d]', kab='$_POST[e]', prov='$_POST[f]', pos='$_POST[g]', telp='$_POST[h]', email='$_POST[i]', web='$_POST[j]', kepsek='$_POST[k]', nip='$_POST[l]' WHERE id = '$_POST[id]'");
    }
        echo "<script>window.alert('Data Berhasil di Update.');
                window.location='../../updateindentitas'</script>";
?>
