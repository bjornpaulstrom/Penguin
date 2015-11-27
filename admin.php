<html>
	<head>
		<title>
			Penguin shop :)
		</title>
	</head>
	<body>
		<?php
			include "header.php";

			echo '
			<table style="width:100%" border="1" bordercolor="green" bgcolor="red">
				<tr>
					<td>
						<H3>Items</H3>
					</td>
				</tr>
				<tr>
					<td width="10%">
						<H4>Create item</H4>
						<form id="Form1" action="create_item.php" method="post">
							Item name: <input type="text" name="in"><br>
							Description: <input type="text" name="desc"><br>
							Cost: <input type="text" name="cost"><br>
							Stock: <input type="text" name="stock"><br>
							<input type="hidden" name="SubmitCheck" value="sent">
							<input type="Submit" name="Form1_Submit" value="Create">
						</form>
					</td>
					<td width="91%">
						<font size="5" color="black"></font>
					</td>
				</tr>
				<tr>
					<td>
						<H3>Users</H3>
					</td>
				</tr>';
				
				$user="johlen-3";
				$password="johlen-3";
				$database="johlen3db";
				mysql_connect('localhost',$user,$password);
				@mysql_select_db($database) or die( "Unable to select database");
				
				$u=$_SESSION['un'];
				$p=$_SESSION['pw'];
				$r=$_SESSION['role'];
				
				$query="SELECT * FROM USERS;";
				$result=mysql_query($query);
				$num=mysql_numrows($result);
				$i = 0;
				while ($i < $num)
				{
					$uid=mysql_result($result,$i,"userid");
					$name=mysql_result($result,$i,"username");
					$desc=mysql_result($result,$i,"password");
					$cost=mysql_result($result,$i,"email");
					$stock=mysql_result($result,$i,"role");
					
					
					echo'
					<tr>
						<td width="91%">';
							echo $uid . ', ' . $name . ', ' . $desc . ', ' . $cost . ', ' . $stock . '
							<form id="Form1" action="delete_user.php" method="post">
							<button type="sumbit" name="itemid" value="' . $uid . '">Delete</button>
							</form>
						</td>
					</tr>';
					$i++;
				}
			echo '
			</table>';
		?>
		<p>

		

		</p>
	</body>
</html>
