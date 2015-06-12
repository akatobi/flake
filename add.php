<?php
include 'bd.php';

$name = $_POST['login'];
$pass = $_POST['pass'];
$user = 'akatobi';
if ((empty($name)) or (empty($pass))) {

    echo 'заполните все поля';

}
else {
    $data = date("Y-m-d G:i");
    mysql_query("INSERT INTO `news`(`nameNews`, `textNews`, `userAddNews`, `data`) VALUES ('$name','$pass','$user','$data')");
    echo 'новость успешно добавлена';
    
}
?>