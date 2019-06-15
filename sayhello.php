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
