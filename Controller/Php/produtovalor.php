<?php
	function valorproduto()
	{
	    $prod = $_POST['Vproduto'];

	    require __DIR__ . "/../Msql/conn.php";

	    $prodStr = "SELECT Preco FROM produtos WHERE CodProduto = '". $prod ."'";

	    $vl = $connection->prepare($prodStr);

	    if( $vl->execute() )
	    {
	    	if( $registro = $vl->fetch(PDO::FETCH_OBJ) )
	    	{
	    		echo $registro->Preco;
	    	}
	    }
	}
	valorproduto();
?>