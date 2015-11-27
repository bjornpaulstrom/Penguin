<html>
	<head>
		<title>
			Our E-commerce site
		</title>
	</head>
	<body>
		<?php
			include "header.php";
			
			$deleteid = $_POST['itemid'];
			
			$user="johlen-3";
			$password="johlen-3";
			$database="johlen3db";
			mysql_connect('localhost',$user,$password);
			@mysql_select_db($database) or die( "Unable to select database");
				
			$query="DELETE FROM USERS WHERE userid=$deleteid;";
			$result=mysql_query($query);
		?>
		<p>
			This is us!
		</p>
	</body>
</html>