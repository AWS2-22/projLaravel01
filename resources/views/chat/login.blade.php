<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css " rel=stylesheet>
	<title>Twitter MSV 2</title>
	<style>
		nav { background-image: url("back4.jpg"); }
	</style>
	<nav class="navbar navbar-default">
		<div class="page-header">
			<h1 style="text-align: center;"><img src="msv_transparente.png" alt="..." class="img-rounded"></h1>
		</div>
	</nav>
</head>

<body>

<div class="container register">
	<div class="panel panel-default">
		<h1 class="text-center">
			Login
		</h1>
		<div class="panel-body">

			<form method="post">

				<p class="text-center">
					<label>Usuari:</label><br>
					<input type="text" name="usuari" size="32"><br>
				</p>
				<p class="text-center">
					<label>Password:</label><br>
					<input type="password" name="password" size="32"><br>
				</p>
				<p class="text-center">
					<input type="submit" name="entrar" value="Entra"/>
				</p>
				
			</form>	

			<p class="text-center">No tienes una cuenta? <a href="registro.php">Regístrate aquí!</a>!</p>

		</div>

	</div>
	
</div>

</body>
</html>