
	<select name="condicao">;
         <option value="1">Selecione a forma de pagamento:</option>;

<?php
            require __DIR__ . "/../Msql/conn.php";
        
        $rs = $connection->prepare("SELECT tipo, nome FROM FormaPago");
            
            if( $rs->execute() )
            {
                while( $registro = $rs->fetch(PDO::FETCH_OBJ) )
                {
                    echo "<option value='" . $registro->tipo . "'> " . $registro->nome . " </option>";
                }
            }
    echo	"</select>";
?>
