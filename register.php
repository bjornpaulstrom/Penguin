<html>
	<head>
		<title>
			Register for our E-commerce site
		</title>
	</head>
	<body>
		<?php
			include "header.php";
		?>
		<p>
			<form id="Form1" action="register_user.php" method="post">
				Username: <input type="text" name="un"><br>
				Password: <input type="password" name="pw"><br>
				E-mail:: <input type="text" name="em"><br>
				<input type="hidden" name="SubmitCheck" value="sent">
				<input type="Submit" name="Form1_Submit" value="Register">
			</form>
		</p>
	</body>
</html>
