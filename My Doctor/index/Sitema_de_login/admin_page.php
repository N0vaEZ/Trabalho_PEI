<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pagina ADM</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">
   <div class="content">
      <h3>olá, <span>admin</span></h3>
      <h1>Bem Vindo <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Essa é a pagina de Admin</p>
      <a href="login_form.php" class="btn">Login</a>
      <a href="register_form.php" class="btn">Registrar</a>
      <a href="../index.html" class="btn">Site</a>
      <a href="logout.php" class="btn">Sair</a>
   </div>

</div>

</body>
</html>