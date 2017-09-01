<?php
require_once("Model/_LayoutHead.php");

?>
<script src="Controller\JavaScript\chamacliente.js"></script>
<script src="Controller\JavaScript\valorprodutocliente.js"></script>

<form name="pedido" method="post" action="Controller\Form\formped.php">
		
		<h2>Informe o cliente.</h2>

		<div>
		<table>
			<tr>
				<td>CNPJ ou CPF:</td>
				<td>Nome/Razão social:</td>
			</tr>
			<tr>
				<td><input type="text" id="CNPJ" value="" maxlength="14" placeholder="CNPJ/CPF" onkeypress="return SomenteNumero(event)"></td>
				<td><input type="text" id="nome" value="" placeholder="Nome/Razão social"></td>
			</tr>
		</table>
		<button type="button" onclick="return chamarCliente()">Pesquisar</button>
	</div>
	<div id="pesqcliente">
		<table>
		<td><b>Nome</b></td>
		<td><b>Endereco</b></td>
		<td><b>Numero</b></td>
		<td><b>Fone</b></td><td>
		<b>Ultima Compra</b></td>
		</table>
	</div>
	
	<div>
		
		<th><h2>Selecione o produto desejado.</h2></th>

		<table style="width:50%">
			<tr>
				<td><h3>GLP 20</h3></td>
				<td><h3>GLP 45</h3></td>
			</tr>
			<tr>
				<td><br>imagem do GLP 20<br></td>
				<td><br>imagem do GLP 45<br></td>
			</tr>
			<tr>
				<td><input type="radio" id="glp" name="glp" value="P20" onclick="return VprodutoDif()"></td>
				<td><input type="radio" id="glp" name="glp" value="P45" onclick="return VprodutoDif()"></td>
			</tr>
		</table>
	</div>
		
	<div>

		Quantidade:
		<br>
		<input type="number" id="quant" name="quant" value="" min="1" max="50" onkeypress="return SomenteNumero(event)" onclick="return VprodutoDif()" onblur="return VprodutoDif()">
		<br>
		R$_Produto:
		<input type="number" id="valor" value="" readonly="true" onkeypress="" >
		R$_Valor Total:
		<input type="number" id="total" value="" readonly="true" onkeypress="" >
		<br>
		Forma de pagamento:
		<br>
		<select name="condicao">;
		
         <option value="1">Selecione a forma de pagamento:</option>;
		<?php
			require_once("Controller/Php/formapaga.php");
		?>
		</select>
		
	</div>
	
	<input type="SUBMIT" value="Adicionar a venda">

</form>
<?php
require_once("Model/_LayoutFoot.php");
?>