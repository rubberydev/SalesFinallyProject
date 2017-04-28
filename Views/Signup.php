<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Registro de Estudiantes</h1>
<form action="../Controllers/AccountController.php" method="POST">
<p><label>User: </label><input type="text" name="user" required/></p>
<p><label>Key: </label><input type="password" name="key" required/></p>
<p><input type="submit" name="Enviar" value="Send"/><input type="reset" name="Clean"/></p> 
</form>
</body>
</html>