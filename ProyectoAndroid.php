<?php
	$link = pg_connect("host=localhost dbname=gestiondecontenido user=posgres passwrod=camarut12")
		or die('no se ha podido conectar: '.pg_last_error());
	
	//ejemplo de consulta sql
	$query = 'SELECT * FROM "USUARIOS"';
	$result = pg_query($query) or die('La consulta fallos'. pg_last_error());
	
?>