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


    
$sql = "INSERT INTO persona( nombre,apellidoP, apellidoM, ci)
VALUES ('Juancito','Pinto','paredes',12345678);
VALUES ('alex','flores','candis',67834952);
VALUES ('Juancito','Pinto','paredes',12345678);
VALUES ('Julio','ramos','velarde',5742167);
VALUES ('Julio','ramos','velarde',5742167);
VALUES ('Juancito','Pinto','paredes',12345678);
VALUES ('alex','flores','candis',67834952);
VALUES ('Julio','ramos','velarde',57421678)
VALUES ('Juancito','Pinto','paredes',12345678);
VALUES ('alex','flores','candis',67834952);
VALUES ('Julio','ramos','velarde',57421678);
VALUES ('Juancito','Pinto','paredes',12345678);
VALUES ('alex','flores','candis',67834952);
VALUES ('Julio','ramos','velarde',57421678);
VALUES ('Juancito','Pinto','paredes',12345678);
VALUES ('alex','flores','candis',67834952);
VALUES ('Julio','ramos','velarde',57421678);
VALUES ('Juancito','Pinto','paredes',12345678);
VALUES ('alex','flores','candis',67834952);
VALUES ('Julio','ramos','velarde',57421678);
VALUES ('Juancito','Pinto','paredes',12345678);
VALUES ('alex','flores','candis',67834952);
VALUES ('Julio','ramos','velarde',57421678);
VALUES ('Juancito','Pinto','paredes',12345678);
VALUES ('alex','flores','candis',67834952);
VALUES ('Julio','ramos','v

?>