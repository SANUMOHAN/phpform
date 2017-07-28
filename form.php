<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="mail"><br>
	<input type="password " name="pwd"><br>
	<button type="submit" value="add">add</button>
</form>
<?php echo $_POST["mail"]; ?><br>
<?php echo $_POST["pwd"]; ?><br>


</body>
</html>