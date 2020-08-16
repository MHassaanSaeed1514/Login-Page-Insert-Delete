<?php
require_once "pdo.php";

if(isset($_POST['name']) & isset($_POST['email']) & isset($_POST['password'])){
	$sql= "INSERT INTO users(name,email,password) VALUES (:name,:email,:password)";
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(
	':name' => $_POST['name'],
	':email' => $_POST['email'],
	':password' => $_POST['password']));
}
?>

<html>
<head></head>
<body>
<form method="post">
<p>Name:
<input type="text" name="name" size="30"></p>
<p>Email:
<input type="text" name="email"></p>
<p>Password:
<input type="password" name="password"></p>
<input type="submit" value="Create Account">
<?php 
if(isset($_POST['name']) & isset($_POST['email']) & isset($_POST['password']))  {
echo "\n\nYour account has been Created successfully";
}
?>
<p>For deleting your account press</p>
</form>
<a href="http://localhost/mydb1/delete.php" class="w3-btn w3-black">Delete your existing account</a>
</body>
</html>