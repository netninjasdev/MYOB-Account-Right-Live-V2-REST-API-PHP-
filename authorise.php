<?php
require_once('inc/includes.inc.php');
require_once(__DIR__.'/src/AccountRightV2.php');

use Myob\AccountRightV2\AccountRightV2;

$accountRight = new AccountRightV2($myobConfig);
$accountRight->retriveAccessToken();
