<?php

$bdhost = 'localhost';
$bduser = 'akatobi';
$bdpass = '4515101';
$bdname = 'theFlake';

$conn = mysql_connect($bdhost , $bduser , $bdpass) or die ('ошибка подключения бд');

mysql_select_db($bdname) or die('базы не существует');



?>