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
	else if(!isset($_POST["cliente"]))
	{
		echo "Necessário informar um cliente!";
	}
	else
	{
		try
        {
            require __DIR__ . "/../Msql/conn.php";
        }
        catch(PDOException $e)
        {
            echo "Falha: " . $e->getMessage();
            exit();
        }
        
        $sql = "INSERT INTO pedido (cliente, formapago, produto, quantidade)
                VALUES (?, ?, ?, ?)";
                                
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1, $_POST["cliente"]);
        $stmt->bindParam(2, $_POST["condicao"]);
        $stmt->bindParam(3, $_POST["glp"]);
        $stmt->bindParam(4, $_POST["quant"]);
        
        $stmt->execute();
        
        if( $stmt->errorCode() != "00000" )
        {
            $resultado = "Erro código " . $stmt->errorCode() . ": ";
            $resultado .= implode(",", $stmt->errorInfo());
        }
        
    }

?>