<?php
include "koneksi.php";
$aksi=$_GET['action'];

if($aksi=="create"){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    
    $query="INSERT INTO pegawai SET nama='$nama', username='$username',password='$password',alamat='$alamat', nohp='$nohp'";
    $insert=mysqli_query($koneksi,$query);
}
header("location:../index.php?title=pegawai&page=pegawai");