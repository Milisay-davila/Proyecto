<?php
$asunto =$_GET['asunto'];
$mensaje =$_GET['mensaje'];
$documentoIdentidad =$_GET['documento'];
$nombre =$_GET['nombre'];
$apellido =$_GET['apellido'];
$edad=$_GET['edad'];
$direccion =$_GET['direccion'];
$fecha =$_GET['fecha'];
$CitaMedica=$_GET['citamedica'];
$sintomas=$_GET['Sintomas'];

//Permite enviar la informacion al servidor

echo "<h2> Informacion recibida desde php</h2>";
echo "<p>El asunto recibido es:</p>". $asunto; "<br>";
echo "<p>El mensaje recibido es:</p>". $mensaje; "<br>"; 
echo "<p>El documento de identidad recibido es:</p>". $documentoIdentidad; "<br>";
echo "<p>El apellido recibido es:</p>". $apellido; "<br>";
echo "<p>La edad recibida es:</p>". $edad; "<br>";
echo "<p>La direccion recibida es:</p>". $direccion; "<br>";
echo "<p>La fecha recibida es:</p>". $fecha; "<br>";
echo "<p>La cita medica recibida es:</p>". $CitaMedica; "<br>";
echo "<p>Los sintomas registrado es:</p>". $sintomas; "<br>";


//Imprime el texto en pantalla

echo "<strong> <h1> ¡Gracias por preferir Compensar!</h1> </strong>";
?>







