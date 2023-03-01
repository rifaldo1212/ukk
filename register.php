<?php 
include "koneksi.php";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username =$_POST['username'];
$password =$_POST['password'];
$telp =$_POST['telp'];

// var_dump($_POST);
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $koneksi->query("INSERT INTO `masyarakat` VALUES ('$nik','$nama','$username','$password','$telp')");
 
    header('location:home.php');
   
?>