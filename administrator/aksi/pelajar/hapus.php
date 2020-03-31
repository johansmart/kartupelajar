<?php
    include "../../../config/koneksi.php";
    mysqli_query($koneksi, "DELETE FROM users WHERE id_session ='$_GET[id]'");
    echo "<script>window.alert('Data Berhasil di Hapus.');
                window.location='allpelajar'</script>";
?>
