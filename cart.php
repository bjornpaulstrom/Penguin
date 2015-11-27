<html>
	<head>
		<title>
			Our E-commerce site
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
				echo $name . ' ' . $desc . ', ' . $cost . ', ' . $stock . '
				<form id="Form1" action="add_to_cart.php" method="post">
					<button type="sumbit" name="itemid" value="' . $i . '">Buy!</button>
				</form>';
				echo "<br>";
				$i++;
			}
		?>
	</body>
</html>
