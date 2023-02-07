
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles/header.css">
</head>
<header class="header">
  <div class="header-box-item">
   <a href="../index.php"> <i class="fa-solid fa-house"></i></a>
   <a href=""> <i class="fa-solid fa-cart-shopping"></i></a>
 </div>
 <div class="header-box-item">
  <h1>D&M Store</h1>
 </div>
 <div class="header-box-item">
  <?php if(!isset($_SESSION['user_logado']) || $_SESSION['user_logado'] == false): ?>
          <a href="../pages/login.php" class="btn-login">Login</a>
        <?php endif; ?>

     
  <?php if(isset($_SESSION['user_logado']) && $_SESSION['user_logado'] == true): ?>
     <a href="../pages/perfil.php"> <i class="fa-solid fa-circle-user"></i></a>
    <a href="../actions/logoutAction.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
   <?php endif; ?>
 </div>
</header>