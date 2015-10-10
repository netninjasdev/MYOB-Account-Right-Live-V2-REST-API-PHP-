<?php
require_once('config.php');
require_once('src/AccountRightV2.php');

use Myob\AccountRightV2\AccountRightV2;

$accountRight = new AccountRightV2($myobConfig);

if(isset($_GET['code'])) {
	$json = $accountRight->getAccessToken($_GET['code']);

	// Set Company File
	$accountRight->getCompanyFile('TRIBECA PTY LTD');

	header('Location: index.php');
	
	exit;
} else {
	// TODO: Handle Exception
	die('No code found');
}
