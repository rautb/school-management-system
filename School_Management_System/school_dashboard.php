<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
	</style>
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School Code: <?php echo $_SESSION['sch_code'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		
			<table>
				<tr>
					<td>
						<input type="submit" name="edit_detail" value="Edit Detail">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show_detail" value="Show Detail">
					</td>
				</tr>
				<tr>
					<td>
						<a href="/School_Management_System/entryfrom.php">Entry From</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from school where sch_code = '$_SESSION[sch_code]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<table>
				<tr>
								<td>
									<b>School Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['sch_name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>School Code:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['sch_code']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>School Address:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['sch_address']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>School Type:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['sch_type']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="password" value="<?php echo $row['password']?>" disabled>
								</td>
							</tr>
							<td></td>
							<td>
					</tr>
				</table>
				<?php
				}	
			}
			?>

			<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from school where sch_code = '$_SESSION[sch_code]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="edit_school.php?sch_code=<?php echo $row['sch_code']; ?>" method="post">
						<table>
						<tr>
								<td>
									<b>School Name:</b>
								</td> 
								<td>
									<input type="text" name='sch_name' value="<?php echo $row['sch_name']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>School Code:</b>
								</td> 
								<td>
									<input type="text" name='sch_code' value="<?php echo $row['sch_code']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>School Address:</b>
								</td> 
								<td>
									<input type="text" name='sch_address' value="<?php echo $row['sch_address']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>School Type:</b>
								</td> 
								<td>
									<input type="text" name='sch_type' value="<?php echo $row['sch_type']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="password" name='password' value="<?php echo $row['password']?>">
								</td>
							</tr>
							<td></td>
							<td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name='edit' value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
			?>
		</div>
	</div>
</body>
</html>
