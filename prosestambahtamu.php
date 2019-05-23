<?php
    include'config/koneksi.php';
    $nomer = $_POST ['nomer'];
    $nama = $_POST ['nama'];
    $pekerjaan        = $_POST ['pekerjaan'];
    $alamat       = $_POST['alamat'];
    $ganti = "insert into buku_tamu set  nomer='$nomer',nama='$nama', pekerjaan='$pekerjaan', alamat='$alamat';";
    $query = $mysqli->query($ganti);
    if ($query) {
        header("location:bukutamu.php");
    } else {
        echo "gagal menambah data";
    }

?>