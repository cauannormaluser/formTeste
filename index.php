<?php
	include("conecta.php");
	$busca = $con->prepare("SELECT * FROM clientes");
	$busca->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SiteTeste</title>
</head>
<body>
	<form method="POST" action="verifica.php">
		<fieldset>
			<legend>Cadastro</legend>
				<label>Nome</label>
                <input name="nome" type="text" placeholder="Ex: Sebastião"/></br></br>
                <label>CPF</label>
                <input name="cpf" type="text" placeholder="Ex: XXX.XXX.XXX-XX"/></br></br>
                <label>E-mail</label>
                <input name="email" type="text" placeholder="Ex: sebas123@gmail.com"/></br></br>
                <label>Endereço</label>
                <input name="endereco" type="text" placeholder="Ex: r. Maria Antonio 123"/></br></br>
                <button type="submit">Cadastrar</button>
		</fieldset>
	</form>
		</br>
	        <table border="1px" width="800px">
	            <tr>
	            <td>ID</td>
	            <td>CPF</td>
	            <td>Nome</td>
	            <td>Endereço</td>
	            <td>Email</td>
	            <td>Criado Em</td>
	            </tr>          
	            <?php
	                while($dado = $busca -> fetch()){ ?>
	                    <tr>
	                        <td><?php echo $dado[0]; ?></td>
	                        <td><?php echo $dado[1]; ?></td>
	                        <td><?php echo $dado[2]; ?></td>
	                        <td><?php echo $dado[3]; ?></td>
	                        <td><?php echo $dado[4]; ?></td>
	                        <td><?php echo $dado[5]; ?></td>
	                    </tr>
	            <?php } ?>
	        </table>
</body>
</html>