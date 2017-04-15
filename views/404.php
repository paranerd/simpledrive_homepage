<?php
	$version = json_decode(file_get_contents('demo/config/version.json'), true);
	$version_code = $version['version'];
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>simpleDrive</title>
	<link rel="stylesheet" href="assets/css/design.css" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<div id="bg">
		<div id="bg-overlay"></div>
		<div id="header">
			<div id="logo">
				<a href="http://simpledrive.org">simpleDrive<span>Private. Secure. Simple.</span></a>
			</div>

			<div id="links">
				<div class="link"><a href="https://github.com/paranerd/simpledrive/blob/master/README.md" target="_blank">HOW TO</a></div>
				<div class="link"><a href="https://play.google.com/store/apps/details?id=org.simpledrive">ANDROID</a></div>
				<div class="link"><a href="public/simpleDrive_Sync_Client.msi">WINDOWS</a></div>
				<div class="link"><a href="https://github.com/paranerd/simpledrive/issues">ISSUES</a></div>
				<div class="link"><a href="http://simpledrive.org/about">ABOUT</a></div>
				<div class="link demo"><a href="http://demo.simpledrive.org/core/login">DEMO</a></div>
			</div>
		</div>

		<div id="content">
			<div id="title-wrapper">
				<div id="title">404</div>
				<div id="subtitle">The site you requested could not be found.</div>
			</div>
		</div>
		<div id="footer" class="footer-light">
			<div class="footer-element">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
			<div class="footer-element footer-right">
				<span>Contact me:</span>
				<a class="contact-link youtube" href="https://www.youtube.com/channel/UC9W_n_6eXQcjeXVbaKHSuGg" target="_blank"></a>
				<a class="contact-link googleplus" href="https://plus.google.com/104648037943654900163/about" target="_blank"></a>
				<a class="contact-link mail" href="mailto:paranerd.development@gmail.com"></a>
			</div>
			<div class="footer-element footer-right">|</div>
			<div class="footer-element footer-right"><a href="http://simpledrive.org/privacy">Privacy</a></div>
		</div>
	</div>
</body>
</html>
