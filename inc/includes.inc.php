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

session_start();

define('database','');
define('username','');
define('password','');

// Set in your MYOB developer console
$myobConfig['apiKey'] = '';
$myobConfig['apiSecret'] = '';
$myobConfig['apiCallback'] = 'http://yoursiteurl.com.au/oauth.php';
// MYOB my.myob login
$myobConfig['username'] = '';
// MYOB my.myob password
$myobConfig['password'] = '';
// Specific company file username
$myobConfig['cfusername'] = 'Administrator';
// Specific company file password
$myobConfig['cfpassword'] = '';
// Set the name of the company file you want to work with
$myobConfig['companyfile'] = '';
