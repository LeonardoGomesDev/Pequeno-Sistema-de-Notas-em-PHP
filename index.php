<!DOCTYPE html>
<html>
<head>
	<title>Sisteminha de Notas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<style type="text/css">
	form{
		border: 1px solid;
		background-color: #000;
		color: #fff;
		width: 500px;
		margin: 20px auto;
		    padding: 20px;
    box-shadow: 1px 1px 10px rgb(70,117,176);
	}
	h3{
		margin: 10px;
	}
	input{
		margin: 10px;
		width: 300px;
	}

</style>
<body>
		<form action='processa.php' method='post'>
			<div class="form-group">
				<h3>Sistema de Notas</h3>	
				<input type='number_format' name='campo1' placeholder='Nota1'><br><br>
				<input type='number_format ' name='campo2' placeholder="Nota2"><br><br>	
				<input type='submit' name="btn" class="btn btn-primary" value='NOTAS'>
			</div>
		</form>
</body>
</html>