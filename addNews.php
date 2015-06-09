<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <!-- Place inside the <head> of your HTML -->
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
            <textarea name="newsName"></textarea>
          <input type="text" name="textNews">
            
          <input type="button" value="отправить" onclick="send()">
        </form>  
      
    </body>
</html>