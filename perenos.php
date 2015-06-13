<html>
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <script src="jquery-2.1.4.min.js" type="text/javascript"></script>
        <script type="text/javascript">
       		function click(){
       			

       		}
        </script>

	</head>

	<body>
		<?php
			include 'bd.php';
			$num=mysql_query("SELECT COUNT(*) FROM news");
			$res=mysql_fetch_row($num);
			echo $res[0];
			$i=0;

			$news=mysql_query("SELECT * FROM `news` order by `id` desc limit $i, 2");  
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
		<input type="button" value="далее" onclick="click()" id="but">
	</body>

</html>