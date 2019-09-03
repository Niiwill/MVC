<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>




<form action="/login" method="POST">
	<label>Email :</label>
	<input type="email" name="email" required>
	
	<label>Password :</label>
	<input type="password" name="password" required="">
	<input type="submit" value="LOGIN">
</form>

<a href="/register"><button>REGISTER</button></a>


<?php 

if (!empty($data)) {
	echo '</br><span>* *'.$data.'* *</span>';
}
	
?>



</body>
</html>