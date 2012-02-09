#!/usr/bin/php -q
<?php

	function shell_echo($string, $type)
	{
		switch($type) {
			case 1:
				echo("[INFO   ] ".$string."\r\n");
				break;
			case 2:
				echo("[ERROR  ] ".$string."\r\n");
				break;
			case 3:
				echo("[FATAL  ] ".$string."\r\n");
				break;
			case 4:
				echo("[WARNING] ".$string."\r\n");
				break;
		}
	}
	# Create package
	$packagetype = $argv['1'];
	$version = $argv['2'];
	if($argv['3'] = "-upload")
	{
		$upload2google = true;
	}

	switch($argv['1']) {
		case 'stable' || 'trunk':
			shell_echo("OpenUluh build script version 0.1.4-3",1);
			shell_echo("Creating package for trunk named OpenUluh-$version-$packagetype.tar.gz",1);
			exec("tar -cvzf ./packages/OpenUluh-$version-$packagetype.tar.gz ./openuluh/trunk/");
			if(file_exists("./packages/OpenUluh-$version-$packagetype.tar.gz"))
			{
				shell_echo("Package created successfully.",1);
			} else {
				shell_echo("Package was not created successfully.",3);
			}
			if($upload2google == true)
			{
				shell_echo("Uploading to Google Code under labels: Featured, OpSys-All, Release-$version, ReleaseType-stable, Type-Archive", 1);
				$errorcode = exec("./googlecode_upload.py -s 'Automatic Upload of $version-$packagetype' -p openuluh ./packages/OpenUluh-$version-$packagetype.tar.gz");
				if($errorcode != 1)
				{
				shell_echo("Package has been uploaded successfully.",1);
				} else {
				shell_echo("There was a problem uploading your package.",2);
				} 
			}
			break;

		case 'unstable':
			shell_echo("OpenUluh build script version 0.1.4-3",1);
			shell_echo("Creating package for unstable named OpenUluh-$version-$packagetype.tar.gz",1);
			exec("tar -cvzf ./packages/OpenUluh-$version-$packagetype.tar.gz ./openuluh/branches/unstable");
			if(file_exists("./packages/OpenUluh-$version-$packagetype.tar.gz"))
			{
				shell_echo("Package created successfully.",1);
			} else {
				shell_echo("Package was not created successfully.",3);
			}
			if($upload2google == true)
			{
				shell_echo("Uploading to Google Code under labels: Featured, OpSys-All, Release-$version, ReleaseType-unstable, Type-Archive", 1);
				$errorcode = exec("./googlecode_upload.py -s 'Automatic Upload of $version-$packagetype' -p openuluh ./packages/OpenUluh-$version-$packagetype.tar.gz");
				if($errorcode != 1)
				{
				shell_echo("Package has been uploaded successfully.",1);
				} else {
				shell_echo("There was a problem uploading your package.",2);
				} 
			}
			
			break;

		case 'proposed-stable':
			shell_echo("OpenUluh build script version 0.1.4-3",1);
			shell_echo("Creating package for trunk named OpenUluh-$version-$packagetype.tar.gz",1);
			exec("tar -cvzf ./packages/OpenUluh-$version-$packagetype.tar.gz ./openuluh/branches/proposed-stable");
			if(file_exists("./packages/OpenUluh-$version-$packagetype.tar.gz"))
			{
				shell_echo("Package created successfully.",1);
			} else {
				shell_echo("Package was not created successfully.",3);
			}
			if($upload2google == true)
			{
				shell_echo("Uploading to Google Code under labels: Featured, OpSys-All, Release-$version, ReleaseType-proposed-stable, Type-Archive", 1);
				$errorcode = exec("./googlecode_upload.py -s 'Automatic Upload of $version-$packagetype' -p openuluh ./packages/OpenUluh-$version-$packagetype.tar.gz");
				if($errorcode != 1)
				{
				shell_echo("Package has been uploaded successfully.",1);
				} else {
				shell_echo("There was a problem uploading your package.",2);
				} 
			}

			break;

		case 'experimental':
			shell_echo("OpenUluh build script version 0.1.4-3",1);
			shell_echo("Creating package for trunk named OpenUluh-$version-$packagetype.tar.gz",1);
			exec("tar -cvzf ./packages/OpenUluh-$version-$packagetype.tar.gz ./openluh/branches/experimental");
			if(file_exists("./packages/OpenUluh-$version-$packagetype.tar.gz"))
			{
				shell_echo("Package created successfully.",1);
			} else {
				shell_echo("Package was not created successfully.",3);
			}
			if($upload2google == true)
			{
				shell_echo("Uploading to Google Code under labels: Featured, OpSys-All, Release-$version, ReleaseType-experimental, Type-Archive", 1);
				$errorcode = exec("./googlecode_upload.py -s 'Automatic Upload of $version-$packagetype' -p openuluh ./packages/OpenUluh-$version-$packagetype.tar.gz");
				if($errorcode != 1)
				{
				shell_echo("Package has been uploaded successfully.",1);
				} else {
				shell_echo("There was a problem uploading your package.",2);
				} 
			}

			break;

		default:
			echo("OpenUluh Package Build Script\r\n");
			echo("Version 0.1.4-3\r\n");
			echo("\r\n");
			echo("createPackage.php [branch|trunk] [version] -upload\r\n");
			echo("\r\n");
			echo("Branches: stable; unstable; proposed-stable; experimental\r\n\r\n");
			echo("-upload: Uploads version to Google Code\r\n");
			echo("Creates OpenUluh-<version>-<branch>.tar.gz in ./packages.");
			exit;
			break;
	}	?>
