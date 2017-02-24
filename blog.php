<?php

try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=blog;","root","suicoden");
} catch (PDOException $e) {
	echo $e->GetMessage();
}

$hasil = $koneksi->prepare("SELECT * FROM artikel");
$hasil->execute();
$data = $hasil->fetchAll();
?>

<!DOCTYPE html>
<html class="background">
<head>

<ul>
  <li><a href="index.php"><b>Home</b></a></li>
  <li><a href="blog.php">Admin</a></li>
     <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Pilihan</a>
            <div class="dropdown-content">
                <a href="input.php">Tambah Artikel</a>
                <a href="logout.php">Logout</a>
            </div>
    </li>
</ul>

<style>

.background{
    background-color:#c3c3e5;	
}

ul {
    list-style-type: none;
    margin: 0;
    height: 10%;
    overflow: hidden;
    font-family: 'Trebuchet MS';
    background-color: #003366;
    margin-bottom: 50px;
    z-index: 1030;
    -moz-user-select: none;
    overflow: hidden;
    overflow-x: hidden;
    overflow-y: hidden;
}

li {
    float: left;
    height:10%;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    font-family: 'Trebuchet MS';
    font-size: 20px; 
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:#c3c3e5;
    height: 40px;
}

li.dropdown {
    display: inline-block;
    height: 10%;
}

html,body{
    height: 100%;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #c3c3e5;
    text-decoration: none;
    font-family: 'Trebuchet MS';
    font-size: 10px; 
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    height: 20px;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    font-size: 20px; 
    background-color: #003366;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #c3c3e5;
    font-family: 'Trebuchet MS';
    height: 20px;
}

.dropdown:hover .dropdown-content {
    display: block;
}
    

table, td, th {
    border: 1px solid black;
    
}

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    height: 50px;
    vertical-align: bottom;
    background-color: #9fc5e8;
    font-family: 'Ubuntu';
    text-align: left;
    vertical-align: center;

}

.th{
    background-color: #003366 ;
    height: 50px;
    color: white;
}

.h{
    color: #003366;
    font-family: 'Ubuntu';
    font-size: 35pt;
}

.delete{
    color: red;
}

.footer{

    background-color: #003366;
    text-align: center;
    font-family: "Ubuntu";
    color: white;
    height: 30px;
    padding-top: 10px;
    margin-bottom: 10px;
    width:  100%;
    bottom: 0;
}

</style>

	<title>Latihan CRUD</title>
	
</head>

<body>
    <h1 class="h"><center>Panel Admin</center></h1>
<table class="table">
<thead>
	<tr>
		<th class="th">Judul</th>
		<th class="th">Tanggal</th>
		<br>
		<br>
		<th class="th">Penulis</th>
		<th class="th" colspan="8">Action</th>
	</tr>
</thead>

	<tbody>
		<?php
			// for($i = 0; $i<sizeof($data);$i++){
			// 	echo $data[$i]['nama'];
			// }
			// foreach ($data as $key ) {
			// 	echo $key['nama'];
			// }
			foreach ($data as $key) {
				?>
				<tr>
					<td><b><center><?= $key['judul']?></center></b></td>
					<td><?= $key['tanggal']?></td>
					<td><center><?= $key['penulis']?></center></td>
					<td colspan="4"><center><a href="edit.php?id=<?=$key['id'];?>">Edit</a></center></td>
					<td><center><a class="delete" onclick="return confirm('Yakin Ingin Menghapus  Data Dengan Judul <?=$key['judul'];?> ?')"
					href="delete.php?id=<?=$key['id'];?>">Delete</a></center></td>
				</tr>
			<?php
			}
			
			?>
	</tbody>
</table>
</body>

        <br>
        <br>

<div class="footer">Copyright ©2017 | Sophia Firdausya</div>

</html>