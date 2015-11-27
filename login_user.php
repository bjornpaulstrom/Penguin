<html>
	<head>
		<title>
			Our E-commerce site
		</title>
	</head>
	<body>
		<BR>
		<?php
			include "header.php";
			
			$user="johlen-3";
			$password="johlen-3";
			$database="johlen3db";
			mysql_connect('localhost',$user,$password);
			@mysql_select_db($database) or die( "Unable to select database");
			
			if (isset($_POST['un']) && isset($_POST['pw']))
			{
				$query="SELECT * FROM USERS WHERE username='$_POST[un]' AND password ='$_POST[pw]'";
				$result=mysql_query($query);
				$num=mysql_numrows($result);
				if ($num)
				{
					$_SESSION['un']=$_POST['un'];
					$_SESSION['pw']=$_POST['pw'];
					$_SESSION['role']=mysql_result($result,0,'role');
					echo 	"<script type='text/javascript'>
								window.location.href = 'index.php'
							</script>";
				}
				else
				{
					echo 	"Failed to log in";
				}
			}
			else
			{
				echo 	"<script type='text/javascript'>
							window.location.href = 'index.php'
						</script>";
			}
		?>
	</body>
</html>