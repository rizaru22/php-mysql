<?php
include "koneksi.php";
$aksi=$_GET['action'];

if($aksi=="create"){
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    
    $query="INSERT INTO siswa SET nisn='$nisn', nama='$nama', alamat='$alamat', nohp='$nohp'";
    $insert=mysqli_query($koneksi,$query);
    header("location:../index.php?title=siswa&page=siswa");
}