<?php
try{
	$koneksi= new PDO("mysql:host=localhost;port=3306;dbname=blog;","root","suicoden");

		//PDO($conn_string,$user,$pass);
}catch(PDOException $e){
	echo $e->getMessage();
	}

$id = $_GET['id'];
$query = mysql_query("SELECT id AS id, judul, isi, tanggal, penulis ".
" FROM artikel WHERE id='$id' ");
while ($baris=mysql_fetch_row($kueri));

$judul = $koneksi->prepare($sql);
$r = $judul->execute();
if ($r){
	header ("location:single.php");
}else{
	echo "gagal";
}

}
?>