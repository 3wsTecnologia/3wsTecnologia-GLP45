<?php
	function valordiferenciado()
	{
		$client = $_POST['IdCliente'];
	    $prod = $_POST['Vproduto'];

	    require __DIR__ . "/../Msql/conn.php";

	    $prodStr = "SELECT valor FROM precocliente WHERE cliente = '". $client ."' AND produto = '" . $prod . "'";

	    $vl = $connection->prepare($prodStr);

	    if( $vl->execute() )
	    {
	    	if( $registro = $vl->fetch(PDO::FETCH_OBJ) )
	    	{
	    		echo $registro->valor;
	    	}
	    }
	}
	valordiferenciado();
?>