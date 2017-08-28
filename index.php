<?php
//$output = file_get_contents('https://api.telegram.org/bot443240393:AAFZIp68nwDdB_aXjXdxmvMSiVVhMMlhi9s/GetUpdates');
$output = json_decode (file_get_contents('php://input'),true);

file_put_contents('logs.txt',$output);
?>
