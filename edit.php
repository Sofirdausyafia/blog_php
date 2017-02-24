<?php
//koneksi
try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=blog;","root","suicoden");
} catch (PDOException $e) {
	echo $e->GetMessage();
}

$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * FROM  artikel WHERE id='$id'");
$data->execute();
$row = $data->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
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

	<title>Edit</title>

</head>

<body class="background">
    <form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?=$row->id;?>">
    	<table>
    		<tr>
    			<td>Judul :		    </td>
    			<td><input class="input" type="text" name="judul" placeholder="Judul" value="<?=$row->judul;?>"></td>
    		</tr>

    		<tr>
    			<td>Isi :		    </td>
    			<td><textarea class="input-isi" type="text" name="isi" placeholder="Isi"><?=$row->isi;?>><?=$row->isi;?></textarea></td>
    		</tr>
    		
    		<tr>
    			<td>Author :		</td>
    			<td><input class="input" type="text" name="penulis" placeholder="Penulis" value="<?=$row->penulis;?>"></td>
    		</tr>
    			<tr>

    			<tr>
    				<td><button name="submit" type="submit">Update</button></td>
    			</tr>
    		</tr>
    	</table>
    </form>

<style>
	
.background{
	background-color:#c3c3e5;
}

	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    height: 50px;
    overflow: hidden;
    font-family: 'Trebuchet MS';
    background-color: #003366;
}

li {
    float: left;
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
    height: 20px;
}

li.dropdown {
    display: inline-block;
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
}

.dropdown:hover .dropdown-content {
    display: block;
}

.input{
    width: 100%;
    height: 35px;
    padding: 5px;
    width: 380px;
    background-color:#9fc5e8;
    border: 2px solid #1f253d;
    color: #003366;
    font-family: "Ubuntu";
    font-size: 12pt;
    border-radius: 3px;
    transition: all 0.5s;
    text-align: justify;
    cursor: default;	
}

	
.input1{
    width: 100%;
    height: 200px;
    padding: 5px;
    background-color: #9fc5e8;
    border: 2px solid #1f253d;
    color: #003366;
    font-family: "Ubuntu";
    font-size: 12pt;
    border-radius: 3px;
    transition: all 0.5s;
}


.input-isi{
    width: 100%;
    height: 200px;
    width: 900px;
    padding: 5px;
    background-color: #9fc5e8;
    border: 2px solid #1f253d;
    color: #003366;
    font-family: "Ubuntu";
    font-size: 12pt;
    border-radius: 3px;
}

</style>

</body>
</html>