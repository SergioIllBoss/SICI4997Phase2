<!DOCTYPE html>
<html lang="en">
	<?php
include 'db.php';
include './classes/user.php';

if (isset($_SESSION['userID'])) {
    $loggedUser = User::loadFromID($_SESSION['userID']);
    
    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    } else {
        if ((time() - $_SESSION['loginTime']) >= $maxSessionTime) {
            session_destroy();
            session_start();
            $loggedUser = null;
        } else if ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            $loggedUser = null;
            //showError('Unauthorized access! Session destroyed!');
        }
    }
}




$action = (isset($_GET['a'])) ? $_GET['a'] : '';
if ($action == 'login') {
    include './parts/signin.php';
} else if ($action == 'logout') {
    session_destroy();
    header('Location: perfil.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromNumest($_POST['numest']);
    
    if (is_null($u)) {
        showError('The user doesn\'t exist.');
        include './parts/signin.php';
    } else if ($u->validatePassword($_POST['Contraseña'])) {
        $_SESSION['userID'] = $u->id;
        $_SESSION['loginTime'] = time();
        $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
        header('Location: perfil.php');
    } else {
        showError('The entered password is incorrect!');
        include './parts/signin.php';
    }
} else if ($action == 'register') {
    include './parts/signup.php';
} else if ($action == 'doRegister') {
    $u = User::loadFromNumest($_POST['numest']);
    
    if ($u) {
        showError('Numero de estudiante ya existe.');
        include './parts/signup.php';
    } else {
        $u = new User();
        
        $u->nombre = $_POST['nombre'];
        $u->apellidos = $_POST['apellidos'];
        $u->numest = $_POST['numest'];
        $u->tel = $_POST['tel'];
        $u->email = $_POST['email'];
        $u->Contraseña = $_POST['Contraseña'];
        $u->save();
        
        showSuccess('You Have Been Successfully registered!');
    }}
?>
<head> 
	<meta charset="utf-8"/>
	<title> Perfil </title>
	<link rel="stylesheet" href="format.css" />
	<link rel="icon" href="book.ico" type="image/x-icon"><!--Icono de pagina de titulo-->
</head>

<body>
	<main>

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
	</header>
	<br>
	<h1> Nombre del Usuario</h1>
	<h3>Perfil del Usuario</h3>
	<img src="https://d30y9cdsu7xlg0.cloudfront.net/png/17241-200.png"><br>

	
<br>
<hr>
<br><!--Pie de Pagina-->
	<footer class="page_footer"> 
		&copy; Copyright Reserve.
	</footer>
	</div>
	</main>
</body>

</html>