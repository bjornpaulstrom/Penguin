<html>
	<head>
		<title>
			Our E-commerce site
		</title>
	</head>
	<body>
		<?php
			session_start();
			session_unset();
			echo 	"<script type='text/javascript'>
						window.location.href = 'index.php'
					</script>";
		?>
	</body>
</html>
