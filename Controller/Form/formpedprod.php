<?php

	if(!isset($_POST["glp"]))
	{
		echo "Necessário selecionar um produto!";
	}
	else if(!isset($_POST["quant"]) || (strlen($_POST["quant"]) > 2) || (!filter_var($_POST["quant"], FILTER_VALIDATE_INT)))
	{
		echo "Quantidade invalida!";
	}
	echo $_POST["quant"];
?>