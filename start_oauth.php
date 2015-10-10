<?php
    require_once('config.php');
    
    require_once('src/AccountRightV2.php');
    
    use Myob\AccountRightV2\AccountRightV2;

    $accountRight = new AccountRightV2($myobConfig);

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MYOB oAuth</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="margin: 50px;">
        <h1>MYOB oAuth</h1>
        <a href="<?php echo $accountRight->getLoginUrl(); ?>" class="btn btn-primary">oAuth Authorize</a>
    </body>
</html>
