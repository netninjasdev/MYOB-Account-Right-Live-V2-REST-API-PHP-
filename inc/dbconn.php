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

require_once(__DIR__.'/includes.inc.php');

try {
    $conn = new PDO('mysql:host=localhost;dbname='.database,username,password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
