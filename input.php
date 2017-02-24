<!DOCTYPE html>
<html>
    <form method="POST" action="save.php"
	       enctype="multipart/form-data">
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

<title>Tambah</title>

</head>

<body class="background">
    <h1 class="h">Tambahkan Artikel!</h1>
	<table>
		<tr>
		
			<td>Judul :		</td>
			<td><input class="input" type="text" name="judul" placeholder="Judul"></td>
		</tr>

		<tr>
			<td>Isi :		</td>
			<td><textarea class="textarea" type="text" name="isi" placeholder="Isi"></textarea></td>
		</tr>
			
		
	
		<tr>
			<td>Author:		</td>
			<td><input class="input" type="text" name="penulis" placeholder="Penulis"></td>
			
		</tr>

				
		<tr>
			 <td></td>
			 <td><button class="inputbutton" name="submit" type="submit">Submit +</button></td>

		</tr>
			
		
	</table>
</body>

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
	

.input{
    width: 100%;
    height: 35px;
    padding: 5px;
    width: 1000px;
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

	
.textarea{
    width: 100%;
    height: 200px;
    width: 1000px;
    padding: 5px;
    background-color: #9fc5e8;
    border: 2px solid #1f253d;
    color: #003366;
    font-family: "Ubuntu";
    font-size: 12pt;
    border-radius: 3px;
    transition: all 0.5s;
}


.h{
    color: #003366;
    font-family: 'Ubuntu';
    font-size: 35pt;
}

.inputbutton{
 
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #003366;
    width: 20%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
    margin-top: 5px;
    position: right;
}


button:hover, button:active, button:focus {  
    background: #9fc5e8;
}


</style>

    </form>
    
</html>