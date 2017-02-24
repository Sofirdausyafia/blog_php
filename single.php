<?php
//koneksi
session_start();
try {
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=blog;","root","suicoden");
} catch (PDOException $e) {
    echo $e->getMessage();
}

$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * FROM  artikel WHERE id='$id'");
$data->execute();
$row = $data->fetch(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html>


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
    background-color:#003366 ;
    font-family: impact; 
    font-size: 20px; 
    height: 70px;
    position: relative;
    display: block;
    padding-top: 4px;
    padding-bottom: 4px;
    color: white;
   

}

.panel{
    background-color: #9fc5e8;
    font-family: impact; 
    font-size: 18px;
    font-family: 'Arial'; 
    display: block;
    margin-left: 25px;
    margin-right: 25px;
    position: relative;
    line-height: 15.4px;
    position: relative;
}


.isi{
    background-color: #9fc5e8;
    padding-right: 15px;
    padding-left: 15px;
}

.bawah{
    width: 900px;
    background-color:  #9fc5e8;
    height: 30px;
    
}

.footer{

    background-color: #003366;
    text-align: center;
    font-family: "Ubuntu";
    color: white;
    height: 5%;
    padding-top: 10px;
    margin-bottom: 10px;
    width:  100%;
    bottom: 0;
}



.isikomen{
    width: 100%;
    height: 200px;
    width: 1000px;
    padding: 5px;
    background-color: white;
    border: 2px solid #1f253d;
    color: #003366;
    font-family: "Ubuntu";
    font-size: 12pt;
    border-radius: 3px;
    transition: all 0.5s;
    margin-left: 10%;
    margin-right: 10%;
}

.h{
    font-size: 12pt;
    font-family: 'Ubuntu';
    color: black;
}

.fkomen{
    margin-top: 50px;

}

.jkomen{
    background-color: #9fc5e8;
    
   }

.jkomen2{
    background-color:#003366;
    height:40px;
    color: white;
    font-family: 'Ubuntu';
}

.allkomen{
    margin-right: 3%;
    margin-left: 3%; 
}

.submitkomen{
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #003366;
    width: 100px;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
    margin-top: 5px;
}

button:hover, button:active, button:focus {  
    background: gray;
}


</style>

    <title></title>
</head>
<body class="background">
<ul>
  <li><a href="index.php"><b>Home</b></a></li>
  <li><a href="blog.php">Blog</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Pilihan</a>
        <div class="dropdown-content">
         <a href="input.php">Tambah Artikel</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>

           
        <div class="panel">

            <div class="heading">
                  <h3><center><?=$row->judul;?></center></h3>
            </div>
           

            <div class="content">
            
                 <div class="isi">
                    <h5><?=$row->isi;?></h5>
                 </div>
            <hr>
           
           
               
            <div class="bawah"><h5><b> Tanggal :<?=$row->tanggal;?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                Author : <?=$row->penulis;?></b></h5></div>

            </div>
            
        </div>


<form class="fkomen" method="POST" action="folderkomentar/postkomentar.php">
    <input type="hidden" name="id_artikel" value="<?=$row->id;?>">
    <input type="hidden" name="komentator" value="<?=$_POST['email'];?>">

  
    <div class="allkomen">
    <div class="jkomen2">
       <center>Komentar tentang artikel terkait.</center> 
    </div>
       <div class="jkomen">
    <table>
        <tr>
            <td><textarea class="isikomen" name="komentar" placeholder="Tulis komentar Anda..." 
            type="text"></textarea></td>
        </tr>

        <tr>
            <td><br></td>
        </tr>

        <tr>
            <td><button class="submitkomen" name="submit" type="submit">Post</button></td>
        </tr>
    </table>
        </div>
    </div>

    </form>
    <br>
    <?php

        include 'folderkomentar/komentar.php'; 

    ?>
<br>

 <div class="footer">Copyright ©2017 | Sophia Firdausya</div>
</body>
</html>