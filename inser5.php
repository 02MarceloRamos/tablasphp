<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtablas";

// Creando la conexion
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificando la conexion
if ($conexion->connect_error) {
  die("Falló la conexión: " . $conexion->connect_error);
}
echo "Conexión correcta";


// SQL para insertar datos

if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada correctamente";
  } else {
    echo "Error al crear la tabla: " . $conexion->error;
  }
  
  $conexion->close();


   ="INSERT INTO area(area) 
  VALUES('gerencia');
  VALUES('ADMINISTRATIVO');
  VALUES('RECURSOS HUMANOS');
  VALUES('SISTEMAS');
  VALUES('MANTENIMIENTO')";
  

?>