<?php
/**
 * AccountRightV2 API class
 *
 * Development Center AccountRight Live API v2: http://developer.myob.com/api/accountright/v2/
 * 
 * THIS CLASS IS NOT IN ANY WAY AFFILIATED WITH MYOB OR ACCOUNTRIGHT
 *
 * @author Leigh Morrow <https://github.com/melbwebdesigns>
 * @version 1.0
 *
 */

require_once('inc/includes.inc.php');
require_once(__DIR__.'/src/AccountRightV2.php');

use Myob\AccountRightV2\AccountRightV2;

$accountRight = new AccountRightV2($myobConfig);
$accountRight->retriveAccessToken();
