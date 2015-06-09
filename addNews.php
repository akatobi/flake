<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <!-- Place inside the <head> of your HTML -->
        <script src="jquery-2.1.4.min.js" type="text/javascript"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#textNews"
 });
</script>
        <script src="jquery-2.1.4.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        function send() {
            var s=$('#add').serialize();
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
        
        <div class="addNews">
        <form id = 'add'>
            <p>имя</p>
            <textarea name="name"></textarea>
            <p>текст</p>
            <div class="newsText">
            <textarea id="textNews" name="text"></textarea>
                </div>
            <p>файлы</p>
            <input type="submit" value="отправить">
        </form>
        </div>
    </body>
</html>