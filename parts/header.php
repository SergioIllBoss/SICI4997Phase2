<!doctype html>
<html lang="en">
  <head>
    <main>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> UPRBOOKS </title>
	<link rel="stylesheet" href="format.css" />
	<link rel="icon" href="book.ico" type="image/x-icon"><!--Icono de pagina de titulo-->
</head>
	<div class="container">
  <header>
    <a href="#" id="logo"></a>
		<a href="index.php"><img src="http://www.upr.edu/ponce/wp-content/uploads/sites/11/2015/11/ponce-sello.png" id= "logo"
    alt="logo area" width="55" height="55" class="logo"/> </a>
	<nav>
    <a href="#" id="menu-icon"><img width="55" height="55" src="http://www.pvhc.net/img62/vfnjdeygotkilastcvci.png"> </a>
			<!--item para utilizar la pagina en dispositivos moviles-->
			<ul><!--Menu de la pagina-->
				<li><a href="index.php"> Inicio </a></li>
				<li><a href= "index.php?a=booking"> Libros </a></li>
				<?php if (!isset($loggedUser)){?>
<?php } ?>
				<?php if (isset($loggedUser)){ ?>
				<li><a href="index.php?a=perfil"> Perfil  </a></li>
				<li><a href="index.php?a=registerbook"> Registrar Libro</a></li>
				<?php } ?>


				<?php
if (!isset($loggedUser)) {
?>
      
					<li><a class="" href="index.php?a=register">Register</a></li>
          
        <li>  <a class="" href="index.php?a=login">Login</a>
			</li></ul>
<?php
} else {
  
  echo '<span style="color: white; font-weight: bold;">Hi ' . $loggedUser->nombre . '</span>';
?>
          <a class="A" href="index.php?a=logout">Logout</a>
<?php
}
?>
			     
		</nav>
		<!-- This line makes the next line clear of content-->
		<div class="clear"> </div>
    </main>
	</header>