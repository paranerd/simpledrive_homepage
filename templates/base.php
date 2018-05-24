<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="assets/css/design.css" />
</head>
<body>
	<div id="bg"></div>
	<div id="bg-overlay"></div>

	<header>
		<nav>
			<a class="navbar-brand" href="https://simpledrive.org">simpleDrive<span>Private. Secure. Simple.</span></a>

			<a href="#" class="menu-toggle"><span class="icon-menu"></span></a>

			<ul class="navbar-links">
				<li class="navbar-link collapse"><a href="https://github.com/paranerd/simpledrive/blob/master/README.md" target="_blank" rel="noopener noreferrer">How To</a></li>
				<li class="navbar-link collapse"><a href="https://play.google.com/store/apps/details?id=org.simpledrive" target="_blank" rel="noopener noreferrer">Android</a></li>
				<li class="navbar-link collapse"><a href="https://simpledrive.org/public/simpleDrive_Sync_Client.msi" target="_blank" rel="noopener noreferrer">Windows</a></li>
				<li class="navbar-link collapse"><a href="https://github.com/paranerd/simpledrive/issues" target="_blank" rel="noopener noreferrer">Issues</a></li>
				<li class="navbar-link collapse"><a class="scroll-trigger" href="#features">Features</a></li>
			</ul>
		</nav>

		<div id="motto">
			<?php
				if ($action && file_exists('templates/' . $action . '.html')) {
					include 'templates/' . $action . '.html';
				}
			?>
		</div>
	</header>

	<section id="features">
		<h2>- Features -</h2>
		<div class="card-wrapper">
			<div class="card">
				<span class="card-icon icon-home"></span>
				<p class="card-title">Simply Private</p>
				<p class="card-text">simpleDrive puts you in charge of your data.<br>The way it's meant to be.</p>
			</div>
			<div class="card">
				<span class="card-icon icon-mobile"></span>
				<p class="card-title">Access anywhere</p>
				<p class="card-text">Download our free Android-App to have your files at your fingertips at all times.</p>
			</div>
			<div class="card">
				<span class="card-icon icon-lock"></span>
				<p class="card-title">Password Manager</p>
				<p class="card-text">With the built-in AES-256 encrypted Vault, you can store all your passwords in a secure place.</p>
			</div>
		</div>
		<div class="card-wrapper">
			<div class="card">
				<span class="card-icon icon-cloud"></span>
				<p class="card-title">Cloud Backup</p>
				<p class="card-text">For added data-security you can upload your AES-256-encrypted files to GoogleDrive to combine the privacy of your home-server with the reliability of an online storage</p>
			</div>
			<div class="card">
				<span class="card-icon icon-share"></span>
				<p class="card-title">Sharing is caring</p>
				<p class="card-text">Share your files with another user on the same server or with anybody via link while being in control of the access rights.</p>
			</div>
			<div class="card">
				<span class="card-icon icon-sync"></span>
				<p class="card-title">Sync Client</p>
				<p class="card-text">Setup a folder on your Windows-Machine with your simpleDrive to always have your files synchronized.</p>
			</div>
		</div>
	</section>

	<footer>
		<a class="icon-user" href="http://paranerd.simpledrive.org/" target="_blank" rel="noopener noreferrer"></a>
		<a class="icon-google-plus" href="https://plus.google.com/104648037943654900163/about" target="_blank" rel="noopener noreferrer"></a>
		<a class="icon-youtube" href="https://www.youtube.com/channel/UC9W_n_6eXQcjeXVbaKHSuGg" target="_blank" rel="noopener noreferrer"></a>
		<a class="icon-envelop" href="paranerd.development@gmail.com"></a>
		<a class="icon-android" href="https://play.google.com/store/apps/details?id=org.simpledrive" target="_blank" rel="noopener noreferrer"></a>
		<a class="icon-github" href="https://github.com/paranerd/simpledrive/" target="_blank" rel="noopener noreferrer"></a>
	</footer>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>