<?php
$server = "localhost";
$user = "root";
$password ="";
$namadb = "donasi";

$db = mysqli_connect("localhost","root","","donasi");

if(!$db){
    die("Gagal terhubung dengan database :" . mysqli_connect_error());

}

?>