<main>
<div class="bckColor">
		
<div class="home">
<br>
<h1>UPRP Books</h1><br>
<div class="center">
    
<br>
<h3>Esta es el catálogo de libros publicados para la venta o intercambio</h3><br><br><br><br>

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
	<th style="color: white; background-color: #990000";>Precio</th>
	<th style="color: white; background-color: #990000";>Imagen</th></tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
		<td style="background-color: white;">' . $row["titulo"]. '</td>
		<td style="background-color: white;">' . $row["autor"]. '</td>
		<td style="background-color: white;">' . $row["dept"]. '</td>
		<td style="background-color: white;">' . $row["ISBN"]. '</td>
		<td style="background-color: white;">' . $row["estado"]. '</td>
		<td style="background-color: white;">$' . $row["precio"]. '.00</td>
		<td style="background-color: white;"><a href="' . $row["img"]. '">
        <img src="https://slack-files2.s3-us-west-2.amazonaws.com/avatars/2016-02-07/20571250386_71941049554e60f94db8_512.png" width="65"></a></td></tr>';
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>



<div id="content">
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
$i=1;
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo  "<h3>$i</h3><h4><br> Titulo: <u>" . $row["titulo"] ."</u><br>Autor: ". $row["autor"] . "<br>
		 Departamento: " . $row["dept"] . "<br> Teléfono: " . $row["ISBN"] . "<br>
		 Estado: </b>" . $row["estado"]."<br> 
		 Precio: </b>" . $row["precio"]."<br></h4>
<a href=" . $row["img"]. "> Imagen </a> <br><br> <hr><br>";
$i+=1;
    }
}

?>
    
</div>

	</main>
</div>
</div>
	</div> 
	</div>
</div>
</body>

