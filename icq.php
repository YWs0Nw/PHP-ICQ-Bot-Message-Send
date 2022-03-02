<?php
$token = 'your:token'; # Token 
$chatID = 'your username @'; # Your Icq UserName @...
$messages = "some%20text";
file_get_contents('https://api.icq.net/bot/v1/messages/sendText?token='.$token.'&chatId='.$chatID.'&text='.$messages);
?>
