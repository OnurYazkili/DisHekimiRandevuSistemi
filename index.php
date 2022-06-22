<?php
    session_start(); 
    if(isset($_SESSION['login'])) { 
      header('LOCATION:anasayfa.php');  
	  die(); 
    }
?>

<html>
   <head>
     <title>Giriş</title>
     <meta name="viewport"content="width=device-width, initial-scale=1">
      <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <meta charset="utf-8">
   </head>
<body>
<center>
    <h3>Yetkili Girişi</h3>
    <?php
      if(isset($_POST['submit'])){  
        $username = $_POST['username'];
		$password = $_POST['password']; 
		
        if($username === 'admin' && $password === 'onuryazkili'){ 
          $_SESSION['login'] = true; 
		  header('LOCATION:anasayfa.php'); 
		  die(); 
        } 
          echo "<font color=red>Kullanıcı adı veya parola yanlış!</font>"; 
       
        
      }
    ?>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <br />
        Kullanıcı Adı
        <br />
        <input type="text"  id="username" name="username"> <br /><br />
        <br />
        Parola
        <br />
        <input type="password" id="pwd" name="password" > <br /><br />
        <br />
        <button type="submit" class="btn btn-warning" name="submit">Giriş Yap</button>
    </form>
</center>
</body>
</html>