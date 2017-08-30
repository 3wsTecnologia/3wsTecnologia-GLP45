<?php
require_once("Model/_LayoutHead.php");

?>
<script src="Controller\JavaScript\chamacliente.js"></script>
<form method="post" action="Controller\Form\formped.php" required="name=quant">

	<div>
		
		<th><h2>Selecione o produto desejado</h2></th>

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
				<td><input type="radio" name="glp" value="P20"></td>
				<td><input type="radio" name="glp" value="P45"></td>
				
			</tr>
		</table>
	</div>
		
	<div>

		Quantidade:
		<br>
		<input type="number" name="quant" value="" min="1" max="50" onkeypress="return SomenteNumero(event)" >
		<br>
		Forma de pagamento:
		<br>
		<?php
		require_once("Controller/Php/formapaga.php");
		?>
	</div>
		
		<h2>Informe o cliente.</h2>

		<div>
		<table>
			<tr>
				<td>Nome/Razão social:</td>
				<td>Endereço:</td>
				<td>Numero:</td>
			</tr>
			<tr>
				<td><input type="text" id="nome" value="" placeholder="Nome/Razão social"></td>
				<td><input type="text" id="rua" value="" placeholder="Rua"></td>
				<td><input type="text" id="numero" value="" placeholder="N" onkeypress="return SomenteNumero(event)"></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" id="fone"></td>
			</tr>
		</table>
		<button type="button" onclick="return chamarPhpAjax()">Pesquisar</button>
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
	
	<input type="SUBMIT" value="Adicionar a venda">

</form>
<?php
require_once("Model/_LayoutFoot.php");
?>