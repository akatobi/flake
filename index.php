<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
<?php

include 'bd.php';
include 'menu.php';

$news = mysql_query("SELECT * FROM `news` WHERE 1");

while ($row = mysql_fetch_array($news)) {
    
echo '<div id="con'.$row['id'].'" class ="con">
<div id="name'.$row['id'].'" class = "name">'.$row['nameNews'].'</div>
<div id="text'.$row['id'].'" class = "text">'.$row['textNews'].'</div>
<div id="user'.$row['id'].'" class = "user">'.$row['userAddNews'].'</div>
<div id="date'.$row['id'].'" class = "date">'.$row['data'].'</div>
</div> 
<br/>';
    
}
?>


    </body>
    
    </html>