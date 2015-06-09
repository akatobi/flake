<?php
include 'menu.php';

$name = $_POST['name'];
$text = $_POST['text'];

if ((empty($name)) or (empty($text))) {

    echo 'заполните все поля';

}

?>