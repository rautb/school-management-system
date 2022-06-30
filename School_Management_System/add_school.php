<?php

//$passcodeen = hash('sha256', (get_magic_quotes_gpc() ? stripslashes($ppasscode) : $ppasscode));

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");

	if(isset($_POST['add'])){
	$query = "INSERT INTO `school`(`sch_name`, `sch_code`, `sch_address`, `sch_type`, `password`) VALUES ('$_POST[sch_name]','$_POST[sch_code]','$_POST[sch_address]','$_POST[sch_type]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
	}
?>
<script type="text/javascript">
	alert("School added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
