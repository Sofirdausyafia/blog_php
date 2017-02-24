<?php
session_start();
try {
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=blog;","root","suicoden");
} catch (PDOException $e) {
    echo $e->GetMessage();
}

if (isset($_POST['submit'])){
	$id_artikel = $_POST['id_artikel'];
	$komentar = $_POST['komentar'];
	$komentator = $_POST['komentator'];


$sql = "INSERT INTO komentar(id_artikel, komentar, komentator) values ('$id_artikel', '$komentar', '$komentator')";
$table_insert = $koneksi->prepare($sql);
$r = $table_insert->execute();

if ($r){
header("location:../single.php?id=".$id_artikel);
}else{
	echo "gagal";
}

}

?>