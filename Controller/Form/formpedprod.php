<?php

	if(!isset($_POST["glp"]))
	{
		echo "Necessário selecionar um produto!";
	}
	else if(!isset($_POST["quant"]) || (strlen($_POST["quant"]) > 2) || (!filter_var($_POST["quant"], FILTER_VALIDATE_INT)))
	{
		echo "Quantidade invalida!";
	}
	else if(!isset($_POST["condicao"]) || ($_POST["condicao"] == 1))
	{
		echo "Necessário informar a forma de pagamento!";
	}
	else
	{
	}

?>