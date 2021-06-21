<?php
	include_once('address.php');
	$address = getAddress();
?>
<html>
<link rel="stylesheet" href="style.css">
	<title> MEU CEP </title>
	<body> 
		<form action="index.php" method="post">
		<p>Insira o cep</p>
        <input type="text" placeholder="Digite um cep..." name="cep">
        <input type="submit">
        <input type="text" placeholder="rua" name="rua" value="<?php echo $address -> logradouro?> ">
        <input type="text" placeholder="bairro" name="bairro">
        <input type="text" placeholder="cidade" name="cidade">
        <input type="text" placeholder="estado" name="estado">
	</body>
</html>

