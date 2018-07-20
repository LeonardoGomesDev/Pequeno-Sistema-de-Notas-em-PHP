<!DOCTYPE html>
<html>
<head>
	<title>Sisteminha de Notas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<style type="text/css">
		.ll{
		border: 1px solid;
		background-color: #000;
		color: #fff;
		width: 500px;
		margin: 20px auto;
		padding: 20px;
    	box-shadow: 1px 1px 10px rgb(70,117,176);	
		}
</style>
<body>
<div class="ll">
<?php
		echo "<h3>Seus Resultados</h3>";
		echo "<br>A primeira nota você tirou: "  . $_POST["campo1"];
		echo "<br>A segunda nota você tirou: "  . $_POST["campo2"];
		echo "<br>";
		$campo1 = $_POST["campo1"];
		$campo2 = $_POST["campo2"];
		echo "Sua média é: " . ($campo1+$campo2) /2;
		echo "<br>";
		if($campo1+$campo2 /2 >=6){
			echo "Aprovado";
		}else if ($campo1+$campo2 /2 <6) {
			echo "Reprovado";
		}	
		echo "<br><br>";
?>		
		<a href="index.php"><input type="submit" name="btn" class="btn btn-primary" value="Voltar"></a>
</div>
</body>
</html>

