<html>
	<head>
		<title>
			Penguin shop :)
		</title>
	</head>
	<body>
		<?php
			include "header.php";
			
			$user="johlen-3";
			$password="johlen-3";
			$database="johlen3db";
			mysql_connect('localhost',$user,$password);
			@mysql_select_db($database) or die( "Unable to select database");
				
			$query = "INSERT INTO ITEMS VALUES ('','$_POST[in]','$_POST[desc]','$_POST[cost]', '$_POST[stock]')";
			mysql_query($query);
			$query="SELECT * FROM ITEMS";
			$result=mysql_query($query);
			$num=mysql_numrows($result);
			
			$i=0;
			while ($i < $num)
			{
				$name=mysql_result($result,$i,"name");
				$desc=mysql_result($result,$i,"description");
				$cost=mysql_result($result,$i,"cost");
				$stock=mysql_result($result,$i,"stock");
				echo $name . ' ' . $desc . ', ' . $cost . ', ' . $stock;
				echo "<br>";
				$i++;
			}
			
			echo "<br>";
			echo '<H1>User created</H1>';
			mysql_close();
		?>
	</body>
</html>
