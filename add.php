<?php


$name = $_POST['newsName'];
$text = $_POST['textNews'];

if ((empty($name)) or (empty($text))) {

    echo 'заполните все поля';

}
else {
echo 'все окей';
}
?>