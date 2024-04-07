<?php
// Making sure the file is included and not accessed directly.
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
	header('HTTP/1.1 403 Forbidden'); die();
}

// Used for opengraph head tags.
switch($_SERVER['SERVER_NAME']) {
	case "192.168.1.182":
	case "localhost":
	case "cicd.nibblepoker.lu":
		$host = "cicd.nibblepoker.lu";
		$host_uri = "https://cicd.nibblepoker.lu";
		$host_tld = "lu";
		break;
	case "cicd.nibblepoker.com":
		$host = "cicd.nibblepoker.com";
		$host_uri = "https://cicd.nibblepoker.com";
		$host_tld = "com";
		break;
	default:
		http_response_code(400);
		exit(1);
}

$dir_commons = dirname(__FILE__);
$dir_root = realpath($dir_commons . "/../");

// Debugging stuff
$print_execution_timer = true;
?>