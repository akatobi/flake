<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="jquery.min.js" type="text/javascript"></script>
        <script>
        function send() {
            var s=$('#news').serialize();
            $.ajax({
                type: 'POST',
                url: 'add.php',
                data: s,
                success: function(data) {
                alert(data);

                },
                error: function(a,b) {
                alert("error");
                }
                });
                }
        </script>
    </head>
    <body>
<?php
include 'bd.php';
include 'menu.php';
?>
      <form id = 'news'>
          <p>название</p>
            <input type="text" name="newsName">
          <p>текст</p>
            <input type="text" name="textNews">
            <br/>
            <br/>
          <input type="button" value="отправить" onclick="send()">
        </form>  
      
    </body>
</html>