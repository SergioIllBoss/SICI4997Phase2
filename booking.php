<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"/>
	<title> Libros </title>
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
		
	<!-- main info -->
	
	<div class="bckColor">
		
<div class="home">
<br>
<h1>UPR Books</h1><br>
<div class="center">
	<h2>Registrar Libro</h2>
	
	<?php include 'db.php';
	include './classes/book.php';
	$action = (isset($_GET['a'])) ? $_GET['a'] : '';
	if($action == 'registerbook') {
    include './parts/registerbook.php';
} if ($action == 'doregisterbook') {
        $b = new book();
        
        $b->titulo = $_POST['titulo'];
        $b->autor = $_POST['autor'];
        $b->dept = $_POST['dept'];
        $b->ISBN = $_POST['ISBN'];
        $b->estado = $_POST['estado'];
        $b->precio = $_POST['precio'];
        $b->save();
        
        showSuccess('You Have Successfully registered your book for sale.');
    }
	function showSuccess($msg) {
    echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
}?>
	<br><a class="" href="booking.php?a=registerbook">Register Book</a>
        
    </div>

<h3>Esta es el catalogo de libros publicados para la venta o intercambio</h3><br><br><br><br>

<style>
table, th, td {
    border: 1px solid black;
}
</style>


<?php
$dbHostname = 'localhost';
$dbDatabase = 'sergio_rios1';
$dbUsername = 'sergio.rios1';
$dbPassword = '6505';

// Create connection
$conn = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbDatabase);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `book`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table style="color: black";<tr>
	<th style="color: white; background-color: #990000;">Titulo</th>
	<th style="color: white; background-color: #990000;">Autor</th>
	<th style="color: white; background-color: #990000;">Departamento/es</th>
	<th style="color: white; background-color: #990000;">ISBN</th>
	<th style="color: white; background-color: #990000";>Estado</th>
	<th style="color: white; background-color: #990000";>Precio</th></tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
		<td style="background-color: white;">' . $row["titulo"]. '</td>
		<td style="background-color: white;">' . $row["autor"]. '</td>
		<td style="background-color: white;">' . $row["dept"]. '</td>
		<td style="background-color: white;">' . $row["ISBN"]. '</td>
		<td style="background-color: white;">' . $row["estado"]. '</td>
		<td style="background-color: white;">' . $row["precio"]. '</td></tr>';
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 

</>

</div>
</div>
<br>
<hr>
<br><!--Pie de Pagina-->
	<footer class="page_footer"> 
		&copy; Copyright Reserve.
	</footer>
	</div> 
	</div>
	</main>
</body>

</html>