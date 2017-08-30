<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="ufcidade.js"></script>
</head>

<body>

			<form action="php.php" method="POST" accept-charset="utf-8">
			Nome completo <br> <input type="text" name="nome" required="name=nome" maxlength="50"> <br>
				
			Nome de usuário <br> <input type="text" name="usuario" required="name=usuario" maxlength="20"> <br>

			E-mail <br> <input type="email" name="email" required="name=email" maxlength="50"> <br>
			
			Senha <input type="password" name="senha" required="nome=senha" maxlength="20"> <br>
			
			<p></p>Agora insira o seu endereço <br></p>
			Tipo: <select name="tipo">
				<option>Rua</option>
				<option>Av</option>
				<option>Trav</option>
			</select> <br>
			Logadouro: <br><input type="text" name="rua" required="name=rua" maxlength="50"> N: <input type="number" name="numero" required="name=numero" maxlength="4"> <br>
			Estado(UF):
			
			<select name="uf">
				<option>Selecione</option>
				<option>AC</option>
				<option>AL</option>
				<option>AP</option>
				<option>AM</option>
				<option>BA</option>
				<option>CE</option>
				<option>DF</option>
				<option>ES</option>
				<option>GO</option>
				<option>MA</option>
				<option>MT</option>
				<option>MS</option>
				<option>MG</option>
				<option>PA</option>
				<option>PB</option>
				<option>PR</option>
				<option>PE</option>
				<option>PI</option>
				<option>RJ</option>
				<option>RN</option>
				<option>RS</option>
				<option>RO</option>
				<option>RR</option>
				<option>SC</option>
				<option>SP</option>
				<option>SE</option>
				<option>TO</option>
			</select>
				<br>
			Cidade: <br> <input type="text" name="cidade" required="name=cidade" maxlength="20"> <br>
			Bairro: <br> <input type="text" name="bairro" required="name=bairro" maxlength="20"> <br>

			Telefone: <br> <input type="tel" name="fone" required="name=fone"> <br>

			<input type="submit" name="botao" value="Salvar">
			</form>

</body>
</html>