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
		<a href="index.php"><img src="http://www.upr.edu/ponce/wp-content/uploads/sites/11/2015/11/ponce-sello.png" alt="logo area" 
		width="55" height="55" class="logo"/> </a>
	<nav>
			<a href="index.php" id="menu-icon"> </a><!--item para utilizar la pagina en dispositivos moviles-->
			<ul><!--Menu de la pagina-->
				<li><a href="index.php"> Inicio </a></li>
				<li><a href= "booking.php"> Libros </a></li>
				<li><a href="perfil.php"> Perfil  </a>
          	</li>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
				&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
				&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
				<?php
if (!isset($loggedUser)) {
?>
					<li> <a class="" href="index.php?a=register">Register</a></li>
          
        <li>  <a class="" href="index.php?a=login">Login</a>
			</li></ul>
<?php
} else {
  
  echo '<span style="color: white; font-weight: bold;">Hi ' . $loggedUser->nombre . '</span>&nbsp;&nbsp;&nbsp;';
?>
          <a class="btn btn-outline-danger my-2 my-sm-0" href="index.php?a=logout">Logout</a>
<?php
}
?>
			     
		</nav>
		<!-- This line makes the next line clear of content-->
		<div class="clear"> </div>
    </main>
	</header>
	</header>