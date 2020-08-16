<?php
require_once "pdo.php";


if(isset($_POST['name'])){
	$sql="DELETE FROM users WHERE name=:name";
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(':name'=>$_POST['name']));
}
?>
<html>
<head></head>
<body>

<p>If you want to delete a user then your NAME below</p>
<form method="post">
<input type="text" name="name" size="10">
<input type="submit" value="Delete Account">
<?php 
if(isset($_POST['name']))  {
echo "Your account has been deleted successfully";
}
?>
</form>
<p>Go back to</p><a href="http://localhost/mydb1/insert.php">Login Page</a>
</body>
</html>
