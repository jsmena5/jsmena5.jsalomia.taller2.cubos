<?php
/*
 * provincias.php
 * 
 * Copyright 2017 ESPE <ESPE@LAPTOP_DELL>
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> TALLER CUBOS</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

include_once "./Continentes/America.php";
include_once "./Continentes/Europa.php";
include_once "./Continentes/Africa.php";
include_once "./Continentes/Asia.php";
include_once "./Continentes/Oceania.php";

	include_once "Imprimir.php";

	$titulo = ["AMERICA","EUROPA","AFRICA","ASIA","OCEANIA"];
	$Cubos = [$America,$Europa,$Africa,$Asia,$Oceania];
?>

<form method="POST" action="Imprimir.php">
	<label for="continente">Seleccione un continente:</label>
	<select name="continente" id="continente">
		<?php
		for ($i = 0; $i < count($titulo); $i++) {
			echo '<option value="' . $i . '">' . $titulo[$i] . '</option>';
		}
		?>
	</select>
	<button type="submit" name="Imprimir">Imprimir</button>
</form>

</body>

</html>
