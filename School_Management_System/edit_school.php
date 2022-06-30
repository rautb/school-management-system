<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	if(isset($_POST['edit'])){
		$sch_code = $_GET['sch_code'];
		$query = "UPDATE `school` SET `sch_name`='$_POST[sch_name]',`sch_address`='$_POST[sch_address]',`sch_type`='$_POST[sch_type]',`password`='$_POST[password]' WHERE `sch_code` = '$sch_code'";
		$query_run = mysqli_query($connection,$query);
	}
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "school_dashboard.php";
</script>
