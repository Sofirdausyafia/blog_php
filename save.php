<?php  

try{
	$koneksi= new PDO("mysql:host=localhost;port=3306;dbname=blog;","root","suicoden");

		//PDO($conn_string,$user,$pass);
}catch(PDOException $e){
	echo $e->getMessage();
	}

if(isset($_POST['submit'])){
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];

$sql = "INSERT INTO artikel(judul, isi, penulis) values('$judul', '$isi', '$penulis')";

$judul = $koneksi->prepare($sql);
$r = $judul->execute();
if ($r){
	header ("location:blog.php");
}else{
	echo "gagal";
}

}
?>