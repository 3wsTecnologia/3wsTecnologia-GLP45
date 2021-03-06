<?php

    if(!isset($_POST["cliente"]))
	{
		echo "<script> alert('Informe o cliente!'); window.history.back()</script>";
	}
	else if(!isset($_POST["glp"]))
	{
		echo "<script> alert('Selecione um produto!'); window.history.back()</script>";
	}
	else if(!isset($_POST["quant"]) || (strlen($_POST["quant"]) > 2) || (!filter_var($_POST["quant"], FILTER_VALIDATE_INT)))
	{
		echo "<script> alert('Digite a quantidade!'); window.history.back()</script>";
	}
	else if(!isset($_POST["condicao"]) || ($_POST["condicao"] == 1))
	{
		echo "<script> alert('Necessário informar a forma de pagamento!'); window.history.back()</script>";
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
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i');

        $sql = "INSERT INTO pedido (cliente, formapago, produto, quantidade, Dt_Emite, Hr_Emite)
                VALUES (?, ?, ?, ?, ?, ?)";
                                
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1, $_POST["cliente"]);
        $stmt->bindParam(2, $_POST["condicao"]);
        $stmt->bindParam(3, $_POST["glp"]);
        $stmt->bindParam(4, $_POST["quant"]);
        $stmt->bindParam(5, $date);
        $stmt->bindParam(6, $date);
        
        $stmt->execute();
        
        if( $stmt->errorCode() != "00000" )
        {
            $resultado = "Erro código " . $stmt->errorCode() . ": ";
            $resultado .= implode(",", $stmt->errorInfo());
        }
        echo "<script> alert('Dados gerados com sucesso!') </script>";
		echo "<script>window.location.replace('http://". $_SERVER['SERVER_ADDR'] ."')</script>";
    }

?>