<?php
	// Copy files
	installer_message("Copying files");
	FileHelper::copyRecurs(PACKAGE_DIR . "/plugins", \Config::APPROOT . "/plugins");
	FileHelper::copyRecurs(PACKAGE_DIR . "/media", \Config::APPROOT . "/media");
	
	// Register extensions
	installer_message("Registering extensions");
	ExtensionHelper::registerExtension("crispycat.highlightjsplugin/HighlightJsPlugin", "plugin", "frontend");
	
	installer_message("highlight.js plugin installed!", \Crispage\Application\InstallerApplication::IMSG_INFO);
?>
