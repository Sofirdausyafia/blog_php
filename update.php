<?php

try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=blog;","root","suicoden");
} catch (PDOException $e) {
	echo $e->GetMessage();
}
if (isset($_POST['submit'])) {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$penulis= $_POST['penulis'];

	$id = $_POST['id'];
$sql = "UPDATE artikel SET judul='$judul', isi='$isi', penulis='$penulis' WHERE id='$id'";
$judul = $koneksi -> prepare($sql);
$r = $judul ->execute();
	if($r){
		header("location:blog.php");
	}else{
		echo "gagal";
	}
}

?>