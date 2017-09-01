<?php
function pesqclientes()

{

  echo "<table>";
          echo "<td></td><td><b>Nome</b></td><td><b>Endereco</b></td><td><b>Numero</b></td><td><b>Fone</b></td><td><b>CNPJ/CPF</b></td>";

    require __DIR__ . "/../Msql/conn.php";
    
    $cnpj = $_POST['pesqcnpj'];
    $nome = $_POST['pesqnome'];
    $strSql = "SELECT CODIGO, Nome, Endereco, Numero, Fone, CNPJ FROM Clientes WHERE";

    if ($cnpj != "")
    {
          $strSql = $strSql . " CNPJ LIKE '" . $cnpj ."%'";
    }
    if ($nome != "")
    {
          if ($cnpj == "")
          {
                $strSql = $strSql . " Nome LIKE '" . $nome ."%'";
          }
          else
          {
                $strSql = $strSql . " AND Nome Like '" . $nome ."%'";
          }
    }

    $rs = $connection->prepare($strSql);
    
    if( $rs->execute() )
        {
            while( $registro = $rs->fetch(PDO::FETCH_OBJ) )
            {
                 echo "<tr><td><input type='radio' id='cliente' name='cliente' value='" . $registro->CODIGO . "' onclick='return VprodutoDif()'> </td><td>" . $registro->Nome ."</td><td>" . $registro->Endereco ."</td><td>" . $registro->Numero . "</td><td>" . $registro->Fone ."</td><td>" . $registro->CNPJ . "</td></tr>";
            }
          echo "</table>";
        }
}

pesqclientes();
?>