<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/input.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
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
          <span class="input input--haruki">
					<input class="input__field input__field--haruki" type="text" id="input-1" name="login">
					<label class="input__label input__label--haruki" for="input-1">
						<span class="input__label-content input__label-content--haruki">First Name</span>
					</label>
				</span>
          <br/>
          <br/>
				<span class="input input--haruki">
					<input class="input__field input__field--haruki" type="password" id="input-2" name="pass">
					<label class="input__label input__label--haruki" for="input-2">
						<span class="input__label-content input__label-content--haruki">password</span>
					</label>
				</span>
          <br/>
          <br/>
				<span class="input input--haruki">
					<input class="input__field input__field--haruki" type="text" id="input-3" name="email">
					<label class="input__label input__label--haruki" for="input-3">
						<span class="input__label-content input__label-content--haruki">Email</span>
					</label>
				</span>
          <br/>
          <br/>
          <input type="button" onclick="send()" value="зарегестрироваться">
        </form>  
      <script src="js/classie.js"></script>
		<script src="js/main.js"></script>
        <script type="text/javascript" src="js/animate.js"></script>
    </body>
</html>