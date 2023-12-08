<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "renta_de_autos";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Conexion fallida: " . $conn->connect_error);
}
$nombre_clientes = isset($_POST['nombre_cliente']) ? $_POST['nombre_cliente'] : "";
$telefonos = isset($_POST['telefonos']) ? $_POST['telefonos'] : "";
$direcciones = isset($_POST['direcciones']) ? $_POST['direcciones'] : "";

echo "imprimiendo nombre del cliente";

echo $nombre_clientes;

echo "imp tel";
echo $telefonos;

echo "imp direc";
echo $direcciones;

$sql = "INSERT INTO clientes (nombre_cliente, telefonos, direcciones ) VALUES ('$nombre_clientes', '$telefonos', '$direcciones')";
if($sql){
  echo"<scrpt lenguaje='JavaScript'>
  alert(''Los datos son correctos);
  ";
  header("Location:consulta2.php");
}else{
  echo"<scrpt lenguaje='JavaScript'>
  alert(''Los datos son incorrecto);
  ";
}

  
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "Connected successfully";
$conn->close();
?>