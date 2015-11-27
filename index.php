<html>
	<head>
		<title>
			Penguin shop :)
		</title>
	</head>
	<body>
		<?php
		/*
			$user="johlen-3";
			$password="johlen-3";
			$database="johlen3db";
			mysql_connect('localhost',$user,$password);
			@mysql_select_db($database) or die( "Unable to select database");
			
			$query="CREATE TABLE USERS (
				userid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				username VARCHAR(30) NOT NULL,
				password VARCHAR(30) NOT NULL,
				email VARCHAR(50),
				role VARCHAR(30) NOT NULL)";
			$result = mysql_query($query);
			if (!$result) 
			{
				die('1Invalid query: ' . mysql_error());
			}
			
			$query="CREATE TABLE ITEMS (
				itemid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				name VARCHAR(30) NOT NULL,
				description VARCHAR(300) NOT NULL,
				cost INT(6),
				stock INT(6))";
			$result = mysql_query($query);
			if (!$result) 
			{
				die('3Invalid query: ' . mysql_error());
			}
						
			$query="CREATE TABLE CART (
				userid INT(6) UNSIGNED,
				itemid INT(6) UNSIGNED,
				FOREIGN KEY (userid) REFERENCES USERS(userid),
				FOREIGN KEY (itemid) REFERENCES ITEMS(itemid))";
			$result = mysql_query($query);
			if (!$result) 
			{
				die('2Invalid query: ' . mysql_error());
			}*/
			
			include "header.php";
		?>
	</body>
</html>
