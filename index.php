<?php

//$output = file_get_contents('https://api.telegram.org/bot443240393:AAFZIp68nwDdB_aXjXdxmvMSiVVhMMlhi9s/GetUpdates');
$output = json_decode (file_get_contents('php://input'),true);

$id = $output['message']['chat']['id'];

file_get_contents('https://api.telegram.org/bot443240393:AAFZIp68nwDdB_aXjXdxmvMSiVVhMMlhi9s/sendMessage?chat_id='.$id.'&text= Добрый день, я бот платформы MISP, на стадии разработки!');

$text = $output['message']['text'];
file_put_contents('logs.txt',$text);
?>
