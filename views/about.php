<?php

$section = (isset($_GET['s'])) ? $_GET['s'] : '';

?>

<!DOCTYPE html>
<html>
<head>
	<title>paranerd</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="assets/css/design.css" />
</head>

<body>
	<a href="index.php"><div class="header <?php echo ($section) ? 'header-top' : ''; ?>">
		<div class="logo">paranerd2</div>
		<div class="logo">development</div>
	</div></a>

	<div class="container">
		<a href="index.php?s=android"><div class="block circle <?php echo ($section == 'android') ? 'highlight' : ''; ?>">android</div></a>
		<a href="index.php?s=python"><div class="block circle <?php echo ($section == 'python') ? 'highlight' : ''; ?>">python</div></a>
		<a href="index.php?s=web"><div class="block circle <?php echo ($section == 'web') ? 'highlight' : ''; ?>">web</div></a>
		<a href="index.php?s=bash"><div class="block circle <?php echo ($section == 'bash') ? 'highlight' : ''; ?>">bash</div></a>
		<a href="index.php?s=cplusplus"><div class="block circle <?php echo ($section == 'cplusplus') ? 'highlight' : ''; ?>">c++</div></a>
		<a href="index.php?s=csharp"><div class="block circle <?php echo ($section == 'csharp') ? 'highlight' : ''; ?>">c#</div></a>
	</div>

	<?php
		if ($section && file_exists('templates/' . $section . '.html')) {

			include 'templates/' . $section . '.html';
		}
	?>
</body>
</html>