<?php
    include "../../../config/koneksi.php";
    if ($_FILES['gambar']['size'] != 0)
    {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../img/".$_FILES['gambar']['name']);
        if($move)
        {
            mysqli_query($koneksi, "UPDATE stempel SET gambar='$fileName' WHERE id = '$_POST[id]'");
            header("location:../../stempel");
        }
    }

?>
