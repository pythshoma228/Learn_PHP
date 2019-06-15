<<<<<<< HEAD:ch_0/sayhello.php
<?php
if($_POST['user']){
	print "Hello, ";
	print $_POST['user'];
}
else {
print <<<_HTML_
	<form method="POST" action="$_SERVER[PHP_SELF]">
	<input type="text" name="user">
	<br>
	<input type="submit">
	</form>
_HTML_;
}
?>
=======
<?php
if($_POST['user']){
	print "Hello, ";
	print $_POST['user'];
}
else {
print <<<_HTML_
	<form method="POST" action="$_SERVER[PHP_SELF]">
	<input type="text" name="user">
	<br>
	<input type="submit">
	</form>
_HTML_;
}
?>
>>>>>>> 64f231b68b2cc8b8a466b8efdc2aa450e6d0cd32:sayhello.php
