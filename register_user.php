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
			
			$query="SELECT * FROM USERS WHERE username='$_POST[un]'";
			$result=mysql_query($query);
			$num=mysql_numrows($result);
			
			if ($num > 0)
			{
				echo "Username already taken! Please try again";
			}
			else
			{
				$query = "INSERT INTO USERS VALUES ('','$_POST[un]','$_POST[pw]','$_POST[em]', 'customer')";
				mysql_query($query);
				$query="SELECT * FROM USERS";
				$result=mysql_query($query);
				$num=mysql_numrows($result);
				
				$i=0;
				while ($i < $num)
				{
					$username=mysql_result($result,$i,"username");
					$password=mysql_result($result,$i,"password");
					$email=mysql_result($result,$i,"email");
					echo $username . ' ' . $password . ', ' . $email;
					echo "<br>";
					$i++;
				}
				
				echo "<br>";
				echo '<H1>User created</H1>';
				mysql_close();
			}
		?>
	</p>
	</body>
</html>
