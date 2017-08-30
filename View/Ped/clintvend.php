
<script src="..\..\Controller\JavaScript\chamacliente.js"></script>

<h2>Informe o cliente.</h2>
<form method="post" action="..\..\Controller\Form\formped.php">
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