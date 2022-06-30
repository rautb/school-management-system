<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    
<?php
 session_start();
 $schl_code=strval($_SESSION['sch_code']);
 $query = "select * from `student-info` where sch_code = '$schl_code'";
 $query_runnn = mysqli_query($connection,$query);
 $school_num=mysqli_num_rows($query_runnn);
?>

<div class="container">
    <form action="/School_Management_System/formAddData.php" method="POST" id="entryForm">
<!-- <form action="/sms_project/test.php" method="POST" id="entryForm"> -->

    <div class="row my-4">
        <table class="table table-bordered">
            <tr>
                <td rowspan="2">Category Wise</td>
                <td colspan="2" class="text-center"> Class I</td>
                <td colspan="2" class="text-center">Class II</td>
                <td colspan="2" class="text-center">Class III</td>
                <td colspan="2" class="text-center">Class IV</td>
                <td colspan="2" class="text-center">Class V</td>
                <td colspan="2" class="text-center">Class VI</td>
                <td colspan="2" class="text-center">Class VII</td>
                <td colspan="2" class="text-center">Class VIII</td>
                <td colspan="2" class="text-center">Class IX</td>
                <td colspan="2" class="text-center">Class X</td>
                <td colspan="2" class="text-center">Class XI</td>
                <td colspan="2" class="text-center">Class XII</td>
            </tr>
            <tr>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
            </tr>
            <?php
            if($school_num<=0){
            ?>

            <?php
				$query = "select * from mst_category";
				$query_run = mysqli_query($connection,$query);
                $x=0;
				while ($row = mysqli_fetch_assoc($query_run)) 
                {
                    $x++;
			?>
            <tr>
                <td><?php echo $row['description']?></td>
                <td> <input type="text" class="col-12" name=<?php echo "cls1b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls1g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls2b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls2g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls3b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls3g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls4b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls4g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls5b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls5g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls6b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls6g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls7b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls7g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls8b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls8g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls9b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls9g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls10b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls10g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls11b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls11g_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls12b_".strval($x)?> > </td>
                <td> <input type="text" class="col-12" name=<?php echo "cls12g_".strval($x)?> > </td>
            </tr>
            <?php
                }
            }
            else{
                $query = "select * from `student-info` where sch_code = '$schl_code' and `is_draft`='1'";
                $query_runnn = mysqli_query($connection,$query);
                $school_num=mysqli_num_rows($query_runnn);

                if($school_num==0)
                {
			?>
            <!-- Read Only-->
            
            <?php
				$query = "select * from mst_category";
				$query_run = mysqli_query($connection,$query);
                $x=0;

				while ($row = mysqli_fetch_assoc($query_run)) 
                {
                    $x++;
			?>
            <tr>
                <td><?php echo $row['description']?></td>
                <?php
                for ($i=1;$i<=12;$i++)
                {
                    $query_boys="select * from `student-info` where sch_code = '$schl_code' and class_code='$i' and category_code='$row[category_code]' and gender_code='1'";
                    $query_run_boys = mysqli_query($connection,$query_boys);
                    $data_b = mysqli_fetch_array($query_run_boys);
                    $query_girls="select * from `student-info` where sch_code = '$schl_code' and class_code='$i' and category_code='$row[category_code]' and gender_code='2'";
                    $query_run_girls = mysqli_query($connection,$query_girls);
                    $data_g = mysqli_fetch_array($query_run_girls);
                    //echo $data['value'];
                    echo '<td> <input type="text" disabled class="col-12" name="cls'.strval($i).'b_'.strval($x).'" value='.$data_b['value'] .'> </td>';
                    echo '<td> <input type="text" disabled class="col-12" name="cls'.strval($i).'g_'.strval($x).'" value='.$data_g['value'] .'> </td>';

                }
                ?>
               
            </tr>
            <?php
                }
			?>
            <!-- End Read only -->
                <?php
                }
                else
                {
                ?>
               <!-- Edit only -->
               <?php
				$query = "select * from mst_category";
				$query_run = mysqli_query($connection,$query);
                $x=0;
				while ($row = mysqli_fetch_assoc($query_run)) 
                {
                    $x++;
			?>
            <tr>
                <td><?php echo $row['description']?></td>
                <?php
                for ($i=1;$i<=12;$i++)
                {
                    $query_boys="select * from `student-info` where sch_code = '$schl_code' and class_code='$i' and category_code='$row[category_code]' and gender_code='1'";
                    $query_run_boys = mysqli_query($connection,$query_boys);
                    $data_b = mysqli_fetch_array($query_run_boys);
                    $query_girls="select * from `student-info` where sch_code = '$schl_code' and class_code='$i' and category_code='$row[category_code]' and gender_code='2'";
                    $query_run_girls = mysqli_query($connection,$query_girls);
                    $data_g = mysqli_fetch_array($query_run_girls);
                    //echo $data['value'];
                    echo '<td> <input type="text" class="col-12" name="cls'.strval($i).'b_'.strval($x).'" value='.$data_b['value'] .'> </td>';
                    echo '<td> <input type="text" class="col-12" name="cls'.strval($i).'g_'.strval($x).'" value='.$data_g['value'] .'> </td>';

                }
                ?>
               
            </tr>
            <?php
                }
			?>
               <!-- End Edit only -->
                <?php
                }
            }
                ?>
            <!-- Religion Wise -->
             <tr>
                <td rowspan="2">Religion Wise</td>
                <td colspan="2" class="text-center"> Class I</td>
                <td colspan="2" class="text-center">Class II</td>
                <td colspan="2" class="text-center">Class III</td>
                <td colspan="2" class="text-center">Class IV</td>
                <td colspan="2" class="text-center">Class V</td>
                <td colspan="2" class="text-center">Class VI</td>
                <td colspan="2" class="text-center">Class VII</td>
                <td colspan="2" class="text-center">Class VIII</td>
                <td colspan="2" class="text-center">Class IX</td>
                <td colspan="2" class="text-center">Class X</td>
                <td colspan="2" class="text-center">Class XI</td>
                <td colspan="2" class="text-center">Class XII</td>
            </tr>
            <tr>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
                <td>Boys</td>
                <td>Girls</td>
            </tr>

            <?php
            $query = "select * from `student_relig_info` where sch_code = '$schl_code'";
            $query_runnn = mysqli_query($connection,$query);
            $school_num=mysqli_num_rows($query_runnn);
            if($school_num<=0){
            ?>

             <?php
				$query = "select * from mst_religion";
				$query_run = mysqli_query($connection,$query);
                $z=0;
				while ($row = mysqli_fetch_assoc($query_run)) 
               {$z++;
			?>
            <tr> 
                 <td><?php echo $row['description']?></td>
                <td><input class="col-12" name=<?php echo "clss1b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss1g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss2b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss2g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss3b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss3g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss4b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss4g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss5b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss5g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss6b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss6g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss7b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss7g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss8b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss8g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss9b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss9g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss10b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss10g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss11b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss11g_".strval($z)?> ></td>
                <td><input class="col-12" name=<?php echo "clss12b_".strval($z)?> > </td>
                <td><input class="col-12" name=<?php echo "clss12g_".strval($z)?> ></td>
            </tr> 
            <?php
                }
            }
            else{
                $query = "select * from `student_relig_info` where sch_code = '$schl_code' and `is_draft`='1'";
                $query_runnn = mysqli_query($connection,$query);
                $school_num=mysqli_num_rows($query_runnn);

                if($school_num==0)
                {
			?>
            <!-- Read Only-->
            <?php
				$query = "select * from mst_religion";
				$query_run = mysqli_query($connection,$query);
                $x=0;
				while ($row = mysqli_fetch_assoc($query_run)) 
                {
                    $x++;
			?>
            <tr>
                <td><?php echo $row['description']?></td>
                <?php
                for ($i=1;$i<=12;$i++)
                {
                    $query_boys="select * from `student_relig_info` where sch_code = '$schl_code' and class_code='$i' and religion_code='$row[religion_code]' and gender_code='1'";
                    $query_run_boys = mysqli_query($connection,$query_boys);
                    $data_b = mysqli_fetch_array($query_run_boys);
                    $query_girls="select * from `student_relig_info` where sch_code = '$schl_code' and class_code='$i' and religion_code='$row[religion_code]' and gender_code='2'";
                    $query_run_girls = mysqli_query($connection,$query_girls);
                    $data_g = mysqli_fetch_array($query_run_girls);
                    //echo $data['value'];
                    echo '<td> <input type="text" disabled class="col-12" name="clss'.strval($i).'b_'.strval($x).'" value='.$data_b['value'] .'> </td>';
                    echo '<td> <input type="text" disabled class="col-12" name="clss'.strval($i).'g_'.strval($x).'" value='.$data_g['value'] .'> </td>';

                }
                ?>
               
            </tr>
            <?php
                }
			?>
           
            <!-- End Read only -->
                <?php
                }
                else
                {
                ?>
               <!-- Edit only -->
               <?php
				$query = "select * from mst_religion";
				$query_run = mysqli_query($connection,$query);
                $x=0;
				while ($row = mysqli_fetch_assoc($query_run)) 
                {
                    $x++;
			?>
            <tr>
                <td><?php echo $row['description']?></td>
                <?php
                for ($i=1;$i<=12;$i++)
                {
                    $query_boys="select * from `student_relig_info` where sch_code = '$schl_code' and class_code='$i' and religion_code='$row[religion_code]' and gender_code='1'";
                    $query_run_boys = mysqli_query($connection,$query_boys);
                    $data_b = mysqli_fetch_array($query_run_boys);
                    $query_girls="select * from `student_relig_info` where sch_code = '$schl_code' and class_code='$i' and religion_code='$row[religion_code]' and gender_code='2'";
                    $query_run_girls = mysqli_query($connection,$query_girls);
                    $data_g = mysqli_fetch_array($query_run_girls);
                    //echo $data['value'];
                    echo '<td> <input type="text" class="col-12" name="clss'.strval($i).'b_'.strval($x).'" value='.$data_b['value'] .'> </td>';
                    echo '<td> <input type="text" class="col-12" name="clss'.strval($i).'g_'.strval($x).'" value='.$data_g['value'] .'> </td>';

                }
                ?>
               
            </tr>
           
            <?php
                }
			?>
             <tr>
            <td colspan="8">
                <button type="button" class="btn btn-primary"  id="btn_d">Reset</button>
</td>
                <td colspan="9">
        <button type="button" class="btn btn-primary" onclick="save_as_draft()" id="btn_d">Save As Draft</button>

                </td>
                <td colspan="8">
        <button type="button" class="btn btn-primary" onclick="finalize()" id="btn_f">Finalize</button>

                </td>

            </tr>
               <!-- End Edit only -->
                <?php
                }
            }
                ?>
           
            
        </table>
       
    </div>
  
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    function finalize(){
        var form=document.getElementById("entryForm");
        var x = document.createElement("INPUT");
        x.setAttribute("type", "text");
        x.setAttribute("type", "hidden");
        x.setAttribute("name", "finl_btn");
        x.setAttribute("value", "final");
        form.append(x);
        form.submit();
        
    }

    function save_as_draft(){
        var form=document.getElementById("entryForm");
        var x = document.createElement("INPUT");
        x.setAttribute("type", "text");
        x.setAttribute("type", "hidden");
        x.setAttribute("name", "finl_btn");
        x.setAttribute("value", "draft");
        form.append(x);
        form.submit();
    }
</script>
</body>
</html>
