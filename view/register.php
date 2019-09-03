<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>


<form action="/register" method="POST">

	<label>Name :</label>
	<input type="text" name="name">
	<br>
	<label>Email :</label>
	<input type="email" name="email">
	<br>
	<label>Password :</label>
	<input type="password" name="password">
	<input type="submit">
</form>
<?php 

if (isset($data['errors'])) {
	foreach ($data['errors'] as $error) {
		echo '</br><span>* *'.$error.'* *</span>';
	}
}
?>



</body>
</html>