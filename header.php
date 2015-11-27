	<?php
		session_start();
		
		echo '<table style="width:100%" border="0" bordercolor="green" bgcolor="yellow">
					<tr>
						<td width="4%">
							<A HREF="index.php"><IMG SRC="penguin.png" width="50" height="50"></A>
						</td>
						<td width="91%">
							<font size="5" color="black">Penguin shop</font>
							<A HREF="shop.php">Shop</A>
							<A HREF="about.php">About</A>
							<A HREF="cart.php">Cart</A>
						</td>
						<td>';
		
		if(isset($_SESSION['un']) && isset($_SESSION['pw']))
		{
			$user="johlen-3";
			$password="johlen-3";
			$database="johlen3db";
			mysql_connect('localhost',$user,$password);
			@mysql_select_db($database) or die( "Unable to select database");
			
			$u=$_SESSION['un'];
			$p=$_SESSION['pw'];
			$r=$_SESSION['role'];
			
			$query="SELECT * FROM USERS WHERE username='$u' AND password='$p'";
			$result=mysql_query($query);
			$num=mysql_numrows($result);
			
			if ($num)
			{
				if ($r=='customer')
				{
					echo '<p>
							<A HREF="logout.php">Logout</A>: ' . $_SESSION['un'] . '</p>';
				}
				if ($r=='admin')
				{
					
					echo '<p><A HREF="admin.php">Admin</A><A HREF="logout.php">Logout</A>: ' . $_SESSION['un'] . '</p>';
				}
			}
			else
			{
				echo '<A HREF="register.php">Register</A>
					<A HREF="login.php">Login</A>';
			}	
		}
		else
		{
			echo 	'<A HREF="register.php">Register</A>
					<A HREF="login.php">Login</A>';

		}
		echo 	'</td> 
				</tr>
			</table>';		
	?>