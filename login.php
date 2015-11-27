<html>
	<head>
		<title>
			Our E-commerce site : Login
		</title>
	</head>
	<body>
		<?php
			include 'header.php'
		?>
		<p>
			<form id="Form1" action="login_user.php" method="post">
				Username: <input type="text" name="un"><br>
				Password: <input type="password" name="pw"><br>
				<input type="hidden" name="SubmitCheck" value="sent">
				<input type="Submit" name="Form1_Submit" value="Login">
			</form>
		</p>
	</body>
</html>