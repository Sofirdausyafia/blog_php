<?php  
session_start();
if(isset($_SESSION['email'])){
    header('location:index.php');
}


    // Lampirkan db dan User
    require_once "aksi/db.php";
    require_once "user.php";

    //Buat object user
    $user = new User($db);

    

    //jika ada data yg dikirim
    if(isset($_POST['kirim'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Proses login user
        if($user->login($email, $password)){
            header("location: index.php");
        }else{
            // Jika login gagal, ambil pesan error
            $error = $user->getLastError();
        }
    }
 ?>


<!DOCTYPE html>  
<html class="background">  
    <head>
    <style>

.background{
    background-color:#003366;
}

.login-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
}
 .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    box-shadow: 2px 4px 8px #c3c3e5;
}
.form .error {
    color: #FFFFFF;
    background: #ef3b3a;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
}
.form .success {
    color: #FFFFFF;
    background: #30A2A0;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
}

 
 .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }

button {  
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #003366;
    width: 50%;
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
    background: #9fc5e8;
}
    </style>
        <title>Login</title>
    </head>
    <body>
        <div class="login-page">
          <div class="form">
            <form class="login-form" method="post">
              <?php if (isset($error)): ?>
                  <div class="error">
                      <?php echo $error ?>
                  </div>
                  
              <?php endif; ?>
              <input type="email" name="email" placeholder="Email" required/>
              <input type="password" name="password" placeholder="Password" required/>
              <button type="submit" name="kirim">login</button>
              <p class="message">Not registered? <a href="register.php">Create an account</a></p>
            </form>
          </div>
        </div>
    </body>
</html>  