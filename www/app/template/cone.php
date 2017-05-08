<?php

$user = "postgres";
$password = "123";
$dbname = "Sicoter";
$port = "5432";
$host = "localhost";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
echo "";

$query = "select nombre,fecha,valor from tblvariables";

$resultado = pg_query($conexion, $query) or die("Error ");

$numReg = pg_num_rows($resultado);


pg_close($conexion);

?>