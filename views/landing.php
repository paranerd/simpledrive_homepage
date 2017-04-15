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
				<div class="link demo"><a href="http://demo.simpledrive.org/core/login">DEMO</a></div>
			</div>
		</div>

		<div id="content">
			<div id="title-wrapper">
				<div id="title">All your files in a private place.</div>
				<div id="subtitle">Take back control of your personal data.</div>
			</div>

			<div id="buttons">
				<div id="button-try"><a href="http://demo.simpledrive.org/core/login">Try it!</a></div>
				<div id="button-download"><a href="public/download/zip">Get it!</a></div>
			</div>
		</div>
		<div id="look-down"> &#9660; </div>
	</div>

	<div id="features">
		<div id="features-text">- Features -</div>

		<div class="box">
			<div>
				<div class="box-img home"></div>
				<div class="box-title">Simply Private</div>
			</div>
			<div class="box-text">simpleDrive puts you in charge of your data - the way it's meant to be</div>
		</div>

		<div class="box">
			<div>
				<div class="box-img bird"></div>
				<div class="box-title">Lightweight</div>
			</div>
			<div class="box-text">Non bloated - yet feature-rich!<br>simpleDrive runs fast even on low-powered devices like a Raspberry Pi</div>
		</div>

		<div class="box">
			<div>
				<div class="box-img smartphone"></div>
				<div class="box-title">Access anywhere</div>
			</div>
			<div class="box-text">With our free Android-App or any WebDAV-Client you can have your files at your fingertips at all times</div>
		</div>

		<div class="box-newline"></div>

		<div class="box">
			<div>
				<div class="box-img updated"></div>
				<div class="box-title">Cloud Backup</div></div>
			<div class="box-text">For added data-security you can upload your AES-256-encrypted files to GoogleDrive to combine the privacy of your home-server with the reliability of an online storage</div>
		</div>

		<div class="box">
			<div>
				<div class="box-img network"></div>
				<div class="box-title">Sharing is caring</div></div>
			<div class="box-text">Share your files with another user on the same server or with anybody via link while being in control of the access rights</div>
		</div>

		<div class="box">
			<div>
				<div class="box-img sync"></div>
				<div class="box-title">Sync Client</div></div>
			<div class="box-text">Setup a folder on your Windows-Machine with your simpleDrive to always have your files synchronized</div>
		</div>

		<div id="footer">
			<div class="footer-element">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
			<div class="footer-element footer-right">
				<span>Contact me:</span>
				<a class="contact-link youtube" href="https://www.youtube.com/channel/UC9W_n_6eXQcjeXVbaKHSuGg" target="_blank"></a>
				<a class="contact-link googleplus" href="https://plus.google.com/104648037943654900163/about" target="_blank"></a>
				<a class="contact-link mail" href="mailto:paranerd.development@gmail.com"></a>
			</div>
			<div class="footer-element footer-right">|</div>
			<div class="footer-element footer-right"><a href="http://simpledrive.org/privacy">Privacy</a></div>
			<div class="footer-element footer-right">|</div>
			<div class="footer-element footer-right"><a href="http://paranerd.simpledrive.org">paranerd development</a></div>
		</div>
	</div>
</body>
</html>
