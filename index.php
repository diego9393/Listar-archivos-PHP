<?php
	$directorio = opendir(".");
	$ficheros = array();
	while ($archivo = readdir($directorio))
	{
		if (is_dir($archivo))
		{
			echo "[".$archivo . "]<br />";
		}
		else
		{
			$ficheros[] = $archivo;
		}
	}
	sort($ficheros,SORT_STRING);
	foreach ($ficheros as $clave => $valor) 
	{
		echo "<a href=/" . $valor . ">".$valor."</a><br>";
	}
?>
