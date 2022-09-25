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


$sql = "CREATE TABLE cargo(
    id_cargo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cargo VARCHAR(12),
    sueldo NUMERIC(8),
    persona_id INT(6),
    area_id INT(6),
    
    foreign key fk_persona_id(persona_id)
    references persona(id_persona),
    
    foreign key fk_area_id(area_id)
    references area(id_area)
    
    )";

?>