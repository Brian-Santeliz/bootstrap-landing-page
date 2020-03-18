<?php
include 'conexion.php';

$email= $_POST["email"];

$insertar = "INSERT INTO registro (email) VALUES ('$email')";

echo mysqli_query($conexion, $insertar);
// if(!$resultado){
// 	echo 'Error al Registrar';
// }
// else{
// 	echo '<script>
// 	alert("Usuario Agregado Satisfactoriamente");
// 	window.history.go(-1);
// 	</script>';
// }
// mysqli_close($conexion);
?>