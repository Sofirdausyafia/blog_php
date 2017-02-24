<?php
session_start();
if(empty($_SESSION['email'])){
    header('location:login.php');
}

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
<html>
<head>



<style>


.background{
    background-color:#c3c3e5;   
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
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
.heading{
    background-color: #003366;
    font-family: impact; 
    font-size: 20px; 
    width: 100%;
    height: 60px;
    position: relative;
    border-bottom: 6px solid red;
    color: white;
    border-top:  2px solid ;
    border-radius: 8px;
    
    

}

.panel{
    background-color: #9fc5e8;
    font-family: impact; 
    font-size: 15px;
    font-family: 'Arial'; 
    width: 1115px;
    margin-left: 85px;
    position: relative;
    border: 2px solid ;
    border-radius: 8px;
    margin-top: 20px;

}

.bawah{
    width: 900px;
    background-color: ;
    
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

	<title></title>

</head>

<body class="background">
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

        <?php

           foreach ($data as $key){
            ?>


        <div class="panel">

            <div class="heading">
                 <h3><center><?= $key['judul']?></center></h3>
            </div>
           

            <div class="content">
             
            <div class="isi">
                <h5><?= substr($key['isi'], 0, 150)?> . . .</h5>
                <br><a class="readmore" href="single.php?id=<?=$key['id'];?>">Readmore</a>
            </div>
            <hr>
           
               
            <div class="bawah"><h5><b> Tanggal : <?= $key['tanggal']?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                Author : <?= $key['penulis']?></b></h5></div>

            </div>

            
        </div>   
<?php

           }

?>

 <br /><br />

 <div class="footer">Copyright ©2017 | Sophia Firdausya</div>
 
</body>
</html>