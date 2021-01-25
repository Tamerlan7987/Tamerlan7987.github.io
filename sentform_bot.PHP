<?php
//https://api.telegram.org/bot1518261558:AAFGpEsRZp69ZQZsUhDwTeYAXuuaF5Zp2yY/getupdates

$user_name = $_POST['user_name'];
$number_phone = $_POST ['number_phone'];
$token = "1518261558:AAFGpEsRZp69ZQZsUhDwTeYAXuuaF5Zp2yY";
$chat_id = "-431120228"
$art =array(
    'Имя пользователя' => $user_name,
    ' номер телефона' => $number_phone,
);
foreach ($art as $key => $value) {
    echo $key.' '.$value;
}
 ?>
