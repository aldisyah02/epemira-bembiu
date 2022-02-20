<?php 

$koneksi = mysqli_connect("localhost","root","","e-pemira");

if (mysqli_connect_error()){
	echo "koneksi database gagal" .mysqli_connect_error();
}

?>