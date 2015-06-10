<?php
include 'bd.php';

$name = $_POST['newsName'];
$text = $_POST['textNews'];
$user = 'akatobi';
if ((empty($name)) or (empty($text))) {

    echo 'заполните все поля';

}
else {
    $data = date("Y-m-d G:i");
    mysql_query("INSERT INTO `news`(`nameNews`, `textNews`, `userAddNews`, `data`) VALUES ('$name','$text','$user','$data')");
    echo 'новость успешно добавлена';
    
}
?>