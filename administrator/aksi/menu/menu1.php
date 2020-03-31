<?php
    include "../../../config/koneksi.php";

            mysqli_query($koneksi, "UPDATE menu SET link='$_POST[a]' WHERE id = '$_POST[id]'");
            header("location:../../setmenucetakkartupelajar");


?>
