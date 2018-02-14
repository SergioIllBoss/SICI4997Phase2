	<div class="center">
	<main>
		<br>
	<h1> Nombre del Usuario</h1>
	<br>
	<h3>Perfil del Usuario<br></h3><br>
	<img src="https://d30y9cdsu7xlg0.cloudfront.net/png/17241-200.png"><br><br>
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

$sql = "SELECT id, nombre, apellidos, numest, tel, email  FROM `user`";
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        if($row["id"]==$loggedUser->id){
        echo  "<h4><br> Nombre: " . $row["nombre"] ." ". $row["apellidos"] . "<br>
		 Número de Estudiante: " . $row["numest"] . "<br> Teléfono: " . $row["tel"] . "<br>
		 E-mail: </b>" . $row["email"]."<br></h4>";
    }
}
}
?>
<br><br><br>
</main>
	</div>