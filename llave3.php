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


// SQL para crear las tablas

if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada correctamente";
  } else {
    echo "Error al crear la tabla: " . $conexion->error;
  }
  
  $conexion->close();


$sql ="CREATE TABLE comisiones(
    id_comision INT(6) UNSIGNED AUTO_INCREMENT PRIMARY key,
    monto NUMERIC(10),
    concepto VARCHAR(40),
    fecha_comosion DATE (10),
    persona_id INT(6),
    
    foreign key fk_persona_id(persona_id)
    references persona(id_persona)
    )";

?>