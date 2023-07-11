<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//cek apakah tombol donasi sudah diklik atau belum?
if($_POST['donasi']){

    //ambil data dari form-donasi 
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $jenisDonasi = $_POST['jenisDonasi'];
    $pengkhususanDonasi = $_POST['pengkhususanDonasi'];
    $metodePembayaran = $_POST['metodePembayaran'];
    $jumlahRp = $_POST['jumlahRp'];

// buat query 
$sql = "INSERT INTO formdonasi (nama, telepon, email, jenisDonasi,
 pengkhususanDonasi, metodePembayaran, jumlahRp)
VALUE ('$nama','$telepon','$email','$jenisDonasi','$pengkhususanDonasi','$metodePembayaran','$jumlahRp')"; 
$query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

//apakah query simpan berhasil?
if($query) {
    //kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: table.php?status=sukses');
}else {
    //kalau gagal alihkan ke halaman index.php dengan status=gagal
    header('Location: table.php?status=gagal');
}

}else {
    die("Akses dilarang...");
}
?>