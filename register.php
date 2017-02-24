<?php  
    // Lampirkan db dan User
    require_once "aksi/db.php";
    require_once "user.php";

    // Buat object user
    $user = new User($db);

    // Jika sudah login
    if($user->isLoggedIn()){
        header("location: index.php"); //Redirect ke index
    }

    //Jika ada data dikirim
    if(isset($_POST['kirim'])){
        $useremail = $_POST['email'];
        $userpassword = $_POST['password'];

        // Registrasi user baru
        if($user->register($useremail, $userpassword)){
            // Jika berhasil set variable success ke true
            $success = true;
        }else{
            // Jika gagal, ambil pesan error
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

  .form .success {
    color: #FFFFFF;
    background: #30A2A0;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
  }

  .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
}

.form .message a {
    color: #4CAF50;
    text-decoration: none;
}
.register-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
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
        
        <title>Register</title>
        
    </head>
    <body>
          <div class="register-page">
            <div class="form">
              <form class="register-form" method="post">
              <?php if (isset($error)): ?>

                 <!--  <div class="error">
                      <?php echo $error ?>
                  </div>
              <?php endif; ?>
              <!--  -->

              <?php if (isset($success)): ?>
                  <div class="success">
                      Berhasil mendaftar. Silakan <a href="login.php">masuk</a>
                  </div>
              <?php endif; ?>
               <input type="email" name="email" placeholder="Email address" required/>
               <input type="password" name="password" placeholder="Password" required/>
               <button class="button" type="submit" name="kirim">create</button>
               <p class="message">Already registered? <a href="login.php">Sign In</a></p>
             </form>
             </div>
             </div>
          
    </body>
</html>  

