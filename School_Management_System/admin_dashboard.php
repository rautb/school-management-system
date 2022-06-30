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
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin User Name: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" name="search_school" value="Search School">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="edit_school" value="Edit School">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_new_school" value="Add New School">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="delete_school" value="Delete School">
					</td>
				</tr>
				<!-- <tr>
					<td>
						<input type="submit" name="show teacher" value="Show Teachers">
					</td>
				</tr> -->
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!-- #Code for search school---Start-->
			<?php
				if(isset($_POST['search_school']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter School Code:</b>&nbsp;&nbsp; <input type="text" name="sch_code">
					<input type="submit" name="search_by_school_code_for_search" value="Search">
					</form><br><br>
					<h4><b><u>School's details</u></b></h4><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_school_code_for_search']))
				{
					$query = "select * from school where sch_code = '$_POST[sch_code]'";
					$query_run = mysqli_query($connection,$query);

					if(mysqli_num_rows($query_run) > 0){
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
						</table>
						<?php
					}
				}else{
					 echo "No result found"; 
				}
				}
			?>
		<!-- #Code for edit school details---Start-->
		<?php
			if(isset($_POST['edit_school']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter School Code:</b>&nbsp;&nbsp; <input type="text" name="sch_code">
				<input type="submit" name="search_by_school_code_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>School's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_school_code_for_edit']))
			{
				$query = "select * from school where sch_code = $_POST[sch_code]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_school.php?sch_code=<?php echo $row['sch_code']; ?>" method="POST">
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
								<input type="text" name='sch_address' value="<?php echo $row['sch_type']?>">
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
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete school details---Start-->
		<?php
			if(isset($_POST['delete_school']))
			{
				?>
				<center>
				<form action="delete_school.php" method="post">
				&nbsp;&nbsp;<b>Enter School Code:</b>&nbsp;&nbsp; <input type="text" name="sch_code">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_school'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_school.php" method="POST">
						<table>
						<tr>
							<td>
								<b>School Name:</b>
							</td> 
							<td>
								<input type="text" name="sch_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>School Code:</b>
							</td> 
							<td>
								<input type="text" name="sch_code" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>School Address:</b>
							</td> 
							<td>
								<input type="text" name="sch_address" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>School Type:</b>
							</td> 
							<td>
							<select name="sch_type" require>
								<option value=""selected>--- Choose School Type ---</option>
								<option value="Boys">Boys</option>
								<option value="Girls" >Girls</option>
								<option value="Co-ed">Co-ed</option>
							</select>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add School"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
			
		</div>
	</div>
</body>
</html>