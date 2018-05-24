<!DOCTYPE html>
<html>
<head>
	<title>paranerd</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="assets/css/design.css" />
</head>

<body>
	<div class="center">
		<a href="http://paranerd.simpledrive.org">
			<div class="header">
				<p>paranerd</p>
				<p>development</p>
			</div>
		</a>

		<div class="row">
			<a href="android">
				<div class="circle <?php echo ($action == 'android') ? 'highlight' : ''; ?>">android</div>
			</a>
			<a href="python">
				<div class="circle <?php echo ($action == 'python') ? 'highlight' : ''; ?>">python</div>
			</a>
			<a href="web">
				<div class="circle <?php echo ($action == 'web') ? 'highlight' : ''; ?>">web</div>
			</a>
			<a href="bash">
				<div class="circle <?php echo ($action == 'bash') ? 'highlight' : ''; ?>">bash</div>
			</a>
			<a href="cplusplus">
				<div class="circle <?php echo ($action == 'cplusplus') ? 'highlight' : ''; ?>">c++</div>
			</a>
			<a href="csharp">
				<div class="circle <?php echo ($action == 'csharp') ? 'highlight' : ''; ?>">c#</div>
			</a>
		</div>

		<?php
			if ($action && file_exists('templates/' . $action . '.html')) {
				include 'templates/' . $action . '.html';
			}
		?>
	</div>
</body>
</html>