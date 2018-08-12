<?php
	if (!isset($_COOKIE['admin'])) {
		setcookie('admin', 'ZmFsc2U=');
	}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>RESTRICTED AREA</title>
</head>

<body>
	<h1> ADMIN PANEL </h1>
	<?php if ($_COOKIE['admin']=="dHJ1ZQ=="): ?>
		<p> Welcome back, Admin. </p>
		<p> Flag: flag{c00k13_d4ng3r} </p>
	<?php else: ?>
		<p> Authentication failed. </p>
	<?php endif; ?>
</body>

</html>