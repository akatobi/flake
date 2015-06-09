<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <!-- Place inside the <head> of your HTML -->
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#textNews"
 });
</script>
        <script src="jquery-2.1.4.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        
        </script>
    </head>
    <body>
<?php
include 'bd.php';
include 'menu.php';
?>
        
        <div class="addNews">
        <form>
            <p>имя</p>
            <textarea></textarea>
            <p>текст</p>
            <div class="newsText">
            <textarea id="textNews" ></textarea>
                </div>
            <p>файлы</p>
        </form>
        </div>
    </body>
</html>