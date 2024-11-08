<?php
session_start();
$user=$_POST['username'];
// $pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
$pass=$_POST['password'];

//cari di tabel pegawai username dan password yang sesuai dengan yang diinput

include "db/koneksi.php";

$query="SELECT * FROM pegawai WHERE username='$user' AND password='$pass'";
$login=mysqli_query($koneksi,$query);

$baris=mysqli_num_rows($login);
$data=mysqli_fetch_array($login);

if($baris===1){
    echo "berhasil";
    $_SESSION['username']=$data['username'];
    $_SESSION['id']=$data['id'];
    $_SESSION['nama']=$data['nama'];
    $_SESSION['login_status']=true;
    header('location:index.php');
}else{
    header("location:login.php?pesan=Gagal");
}
