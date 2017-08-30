<?php
function testeOnclick()

{

  echo "<table>";
          echo "<td></td><td><b>Nome</b></td><td><b>Endereco</b></td><td><b>Numero</b></td><td><b>Fone</b></td><td><b>Ultima Compra</b></td>";

    require __DIR__ . "/../Msql/conn.php";
    
    $nome = $_POST['pesqnome'];
    $rua = $_POST['pesqrua'];
    $numero = $_POST['pesqnumero'];
    $telefone = $_POST['pesqfone'];
    $strSql = "SELECT CODIGO, Nome, Endereco, Numero, Fone, UltimaCompra FROM Clientes WHERE";

    if ($nome != "")
    {
          $strSql = $strSql . " Nome LIKE '" . $nome ."%'";
    }
    if ($rua != "")
    {
          if ($nome == "")
          {
                $strSql = $strSql . " Endereco LIKE '" . $rua ."%'";
          }
          else
          {
                $strSql = $strSql . " AND Endereco Like '" . $rua ."%'";
          }
    }
    if ($numero != "")
    {                        
          if ($rua == "")
          {
                exit("<script>alert('Informe o endereço!')</script>");
          }
          else if ($nome != "")
          {
            exit("<script>alert('Informe o endereço!')</script>");
          }
          else
          {
                $strSql = $strSql . " AND Numero Like '" . $numero ."%'";
          }
    }
    if ($telefone != "")
    {
          if ($nome == "" && $rua == "" && $numero == "")
          {
                $strSql = $strSql . " Fone LIKE '" . $telefone ."%'";
          }
          else
          {
                $strSql = $strSql . " AND Fone Like '" . $telefone ."%'";
          }
    }

    $rs = $connection->prepare($strSql);
    
    if( $rs->execute() )
        {
            while( $registro = $rs->fetch(PDO::FETCH_OBJ) )
            {
                 echo "<tr><td><input type='radio' name='cliente' value='" . $registro->CODIGO . "'> </td><td>" . $registro->Nome ."</td><td>" . $registro->Endereco ."</td><td>" . $registro->Numero . "</td><td>" . $registro->Fone ."</td><td>" . $registro->UltimaCompra . "</td></tr>";
            }
          echo "</table>";
        }
}

testeOnclick();
?>