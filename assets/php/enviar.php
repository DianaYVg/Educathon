<?php
	$destino="dyvelazquez1@gmail.com";
	$nombre =$_POST["name"];
	$correo=$_POST["mail"];
	$mensaje=$_POST["mensaje"];
	$universidad=$_POST["universidad"];


	$contenido= "Nombre del profesor: ". $nombre."\nUniversidad: ".$universidad."\nCorreo: ".$correo."\nDejo su área de especialización : ".$mensaje;

	$invitado="Estimadx". $nombre." 
	\n\nGracias por tu interés y entusiasmo para participar en Educathon MX, el evento de educación para profesores de IBM México.\nEn breve recibirás todos los detalles sobre el lugar y el acceso, recuerda que el evento se llevará acabo en CDMX los días 10, 11 y 12 de Julio de 2019.\n\n¡Te esperamos!\nIBM Academic Initiative.";

	mail($correo, "¡Gracias por registrarte a Educathon!", $invitado);
	mail($destino,"Asistencia",$contenido);
	header("Location:confirmacion.html");
?>
