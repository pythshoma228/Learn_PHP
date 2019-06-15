<<<<<<< HEAD:ch_0/index.php
<!DOCTYPE html>
<html>
<head>
	<title>web</title>
</head>
<body>
	<form method="POST" action="sayhello.php">
		Имя:
		<input type="text" name="user">
		<br>
		<input type="submit" value="Отправить">
	</form>
</body>
</html>
=======
<?php 
print <<<_HTML_
<!DOCTYPE html>
<html>
<head>
	<title>web</title>
</head>
<body>
<form method="POST" action="sayhello.php">
		Имя:
		<input type="text" name="user"><br>
		<input type="submit"value="Отправить">
	</form>
	</body>
</html>
_HTML_;
?>
>>>>>>> 64f231b68b2cc8b8a466b8efdc2aa450e6d0cd32:index.php
