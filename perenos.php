<html>
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="style.css">

	</head>

	<body>
		<?php
			include 'bd.php';

			$news=mysql_query("SELECT * FROM `news` order by `id` desc limit 1");  
			while ($row = mysql_fetch_array($news)) {
    


				echo '<div id="con'.$row['id'].'" class ="con">
				<div id="name'.$row['id'].'" class = "name">'.$row['nameNews'].'</div>
				<div id="text'.$row['id'].'" class = "text">'.$row['textNews'].'</div>
				<div id="user'.$row['id'].'" class = "user">'.$row['userAddNews'].'</div>
				<div id="date'.$row['id'].'" class = "date">'.$row['data'].'</div>
				</div> 
				<br/>';

			}
			$num=mysql_fetch_row($news);
			echo $num;

		?>
		<input type="button" value="далее" onclick="click()" id="but">
	</body>

</html>