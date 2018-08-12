<?php
	if (!isset($_COOKIE['admin'])) {
		setcookie('admin', 'ZmFsc2U=');
	}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Begone, BOTS</title>
</head>

<body>
	<?php if ($_COOKIE['admin']=="dHJ1ZQ=="): ?>
		<p> This is how you hide from Google. </p>
		<p> Second Flag: flag{r0b0t5_g7f0} </p>
	<?php else: ?>
		<p> You're a fast one, aren't you? Come back once you have the first flag. </p>
	<?php endif; ?>
</body>

</html>