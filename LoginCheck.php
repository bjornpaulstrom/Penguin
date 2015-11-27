	<?php
		session_start();
		
		if(isset($_SESSION['un']) && isset($_SESSION['pw']))
		{
			$user="johlen-3";
			$password="johlen-3";
			$database="johlen3db";
			mysql_connect('localhost',$user,$password);
			@mysql_select_db($database) or die( "Unable to select database");
			
			$u=$_SESSION['un'];
			$p=$_SESSION['pw'];
			
			$query="SELECT * FROM CUSTOMERS WHERE username='$u' AND password='$p'";
			$result=mysql_query($query);
			$num=mysql_numrows($result);
			if ($num)
			{
				echo '<table style="width:100%" border="0" bordercolor="green" bgcolor="yellow">
						<tr>
							<td width="4%">
								<IMG SRC="penguin.png" width="50" height="50">
							</td>
							<td width="91%">
								<font size="5" color="black">Penguin shop</font>
								<A HREF="shop.php">Shop</A>
								<A HREF="about.php">About</A>
							</td>
							<td>
								<p><A HREF="logout.php">Logout</A>: ' . $_SESSION['un'] . '</p>
							</td> 
						</tr>
					</table>';
			}
			else
			{
				echo '<table style="width:100%" border="0" bordercolor="green" bgcolor="yellow">
						<tr>
							<td width="4%">
								<IMG SRC="penguin.png" width="50" height="50">
							</td>
							<td width="91%">
								<font size="5" color="black">Penguin shop</font>
								<A HREF="shop.php">Shop</A>
								<A HREF="about.php">About</A>
							</td>
							<td>
								<A HREF="register.php">Register</A>
								<A HREF="login.php">Login</A>
							</td> 
						</tr>
					</table>';
			}
			
		}
		else
		{
			echo 	'<table style="width:100%" border="0" bordercolor="green" bgcolor="yellow">
						<tr>
							<td width="4%">
								<IMG SRC="penguin.png" width="50" height="50">
							</td>
							<td width="91%">
								<font size="5" color="black">Penguin shop</font>
								<A HREF="shop.php">Shop</A>
								<A HREF="about.php">About</A>
							</td>
							<td>
								<A HREF="register.php">Register</A>
								<A HREF="login.php">Login</A>
							</td> 
						</tr>
					</table>';
		}
	?>