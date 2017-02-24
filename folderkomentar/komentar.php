<?php
$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * from komentar where id_artikel='$id'");
$data->execute();
$komen = $data->fetchAll();

?>
<style>

.all{
	background-color: #FFFFFF; 
}

.panel2{
	background-color: white;
    font-family: impact; 
    font-size: 18px;
    font-family: 'Arial'; 
    display: block;
    margin-left: 25px;
    margin-right: 25px;
    position: relative;
    line-height: 15.4px;
    position: relative;
    border: 2px solid #003366;
    border-radius: 8px;
    margin-top: 20px;
}

.isi2{
    padding: 20px;
    background-color: white;
    color: black;
    font-family: 'Arial';
    font-size: 11pt;
}

.bawah2{
	width: 900px;
    background-color: white;
    color: blue;
    height: 30px;
}

</style>




<div class="all">

<?php
foreach ($komen as $key){
?>
<br>
<div class="panel2">
		<div class="isi2" style="display: block;">
			<?= $key['komentar'];?>
		</div>
		<hr>

		<div class="bawah2">
			<p><h5> by : <?php echo $currentUser['email'] ?>
   			
   			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
			
			Tanggal :  <?=$key['tanggal'];?></h5></p>
		</div>
</div>


<?php
}
?>
<br>
<br>
</div>