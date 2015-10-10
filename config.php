<?php
session_start();

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
