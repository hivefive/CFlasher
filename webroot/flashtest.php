<!doctype html>
<html>
<head>
<meta charset='utf-8'/>
<title>Test CFlash</title>
<link rel='stylesheet' type='text/css' href='../css/flasher.css'/>
</head>
<?php
//
// Set the error reporting.
//
error_reporting(-1); // Report all type of errors
ini_set('display_errors', 1); // Display all errors
ini_set('output_buffering', 0); // Do not buffer outputs, write directly

//include the autoloader to make test.php work
require '../../../autoload.php';

//
// Set up the test environment
//
$flasher = new \Hivefive\CFlasher\CFlasher;

$flasher->setMessage('info');

$flash = $flasher->getMessage(); ?>
<body>
<div style="max-width:500px; margin:0 auto;" class="<?=$flash['type']?>">
<?=$flash['message'];?>
</div>

</body>
</html>
