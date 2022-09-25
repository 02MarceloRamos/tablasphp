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


  $sql ="INSERT INTO cargo(cargo, sueldo)
  VALUES('gerente',8450);
  VALUES('soporte',2500);
  VALUES('administrativo',3600);
  VALUES('CONTADOR',3600);
  VALUES('resepcion',2100);
  VALUES('soporte',2500);
  VALUES('administrativo',3600);
  VALUES('CONTADOR',3600);
  VALUES('resepcion',2100);
  VALUES('soporte',2500);
  VALUES('administrativo',3600);
  VALUES('CONTADOR',3600);
  VALUES('resepcion',2100);
  VALUES('soporte',2500);
  VALUES('administrativo',3600);
  VALUES('CONTADOR',3600);
  VALUES('resepcion',2100);
  VALUES('soporte',2500);
  VALUES('administrativo',3600);
  VALUES('CONTADOR',3600);
  VALUES('resepcion',2100);
  VALUES('soporte',2500);
  VALUES('administrativo',3600);
  VALUES('CONTADOR',3600);
  VALUES('resepcion',2100);
  VALUES('soporte',2500);
  VALUES('administrativo',3600);
  VALUES('CONTADOR',3600);
  VALUES('resepcion',2100)";
  

?>