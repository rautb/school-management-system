<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
    
   

<?php
                session_start();
                $schl_code=strval($_SESSION['sch_code']);
                $btn_val=$_POST['finl_btn'];
				$query = "select * from mst_category";
				$query_run = mysqli_query($connection,$query);
                $num_cat=mysqli_num_rows($query_run);
                $query = "select * from `student-info` where sch_code = '$schl_code'";
                $query_runnn = mysqli_query($connection,$query);
                $school_num=mysqli_num_rows($query_runnn);
               // echo $school_num;


               
               if($school_num==0){

                for ($i=1;$i<=12;$i++)
                {

                    for($j=1;$j<=$num_cat;$j++)
                    {
                        $var1="cls".strval($i)."b_".strval($j);
                        $var2="cls".strval($i)."g_".strval($j);
                        $boys=$_POST[$var1];
                        $girls=$_POST[$var2];  
                        if($btn_val=='final')
                        {                     
                        $insert_qryq="INSERT INTO `student-info`(`sch_code`, `category_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES ('$schl_code','$j','$i','1','3','$boys','0')";
                        $query_runq = mysqli_query($connection,$insert_qryq);
                        $insert_qry="INSERT INTO `student-info`(`sch_code`, `category_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES ('$schl_code','$j','$i','2','3','$girls','0')";
                        $query_run = mysqli_query($connection,$insert_qry);
                        }
                        else{
                            $insert_qryq="INSERT INTO `student-info`(`sch_code`, `category_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES ('$schl_code','$j','$i','1','3','$boys','1')";
                            $query_runq = mysqli_query($connection,$insert_qryq);
                            $insert_qry="INSERT INTO `student-info`(`sch_code`, `category_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES ('$schl_code','$j','$i','2','3','$girls','1')";
                            $query_run = mysqli_query($connection,$insert_qry); 
                        }
                    }
                }
            }else{
                for ($i=1;$i<=12;$i++)
                {

                    for($j=1;$j<=$num_cat;$j++)
                    {
                        $var1="cls".strval($i)."b_".strval($j);
                        $var2="cls".strval($i)."g_".strval($j);
                        $boys=$_POST[$var1];
                        $girls=$_POST[$var2];
                        if($btn_val=='final')
                        {                        
                        $update_qryq="UPDATE `student-info` set  `value`='$boys', `is_draft`='0' where `sch_code`='$schl_code' and `category_code`='$j' and `class_code`='$i' and `gender_code`='1'";
                        $query_runq = mysqli_query($connection,$update_qryq);
                        $update_qry="UPDATE `student-info` set  `value`='$girls', `is_draft`='0' where `sch_code`='$schl_code' and `category_code`='$j' and `class_code`='$i' and `gender_code`='2'";
                        $query_run = mysqli_query($connection,$update_qry);
                        }
                        else{
                        $update_qryq="UPDATE `student-info` set  `value`='$boys', `is_draft`='1' where `sch_code`='$schl_code' and `category_code`='$j' and `class_code`='$i' and `gender_code`='1'";
                        $query_runq = mysqli_query($connection,$update_qryq);
                        $update_qry="UPDATE `student-info` set  `value`='$girls', `is_draft`='1' where `sch_code`='$schl_code' and `category_code`='$j' and `class_code`='$i' and `gender_code`='2'";
                        $query_run = mysqli_query($connection,$update_qry);
                        }
                    }
                }
            }

?>
<!-- Religion wish -->
<?php
                $schl_code=strval($_SESSION['sch_code']);
				$query = "select * from mst_religion";
				$query_run = mysqli_query($connection,$query);
                $num_reli=mysqli_num_rows($query_run);
                $query = "select * from `student_relig_info` where sch_code = '$schl_code'";
                $query_runnn = mysqli_query($connection,$query);
                $school_num=mysqli_num_rows($query_runnn);

                //echo $num_cat;
                if($school_num==0){
                

                for ($i=1;$i<=12;$i++)
                {

                    for($j=1;$j<=$num_reli;$j++)
                    {
                        $var1="clss".strval($i)."b_".strval($j);
                        $var2="clss".strval($i)."g_".strval($j);
                        $boys=$_POST[$var1];
                        $girls=$_POST[$var2];
                        if($btn_val=='final')
                        { 
                        $insert_qryq="INSERT INTO `student_relig_info`(`sch_code`, `religion_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES ('$schl_code','$j','$i','1','3','$boys','0')";
                        $query_runq = mysqli_query($connection,$insert_qryq);
                        $insert_qry="INSERT INTO `student_relig_info`(`sch_code`, `religion_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES ('$schl_code','$j','$i','2','3','$girls','0')";
                        $query_run = mysqli_query($connection,$insert_qry);
                        }else{
                         $insert_qryq="INSERT INTO `student_relig_info`(`sch_code`, `religion_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES ('$schl_code','$j','$i','1','3','$boys','1')";
                        $query_runq = mysqli_query($connection,$insert_qryq);
                        $insert_qry="INSERT INTO `student_relig_info`(`sch_code`, `religion_code`, `class_code`, `gender_code`, `school_type_code`, `value`, `is_draft`) VALUES ('$schl_code','$j','$i','2','3','$girls','1')";
                        $query_run = mysqli_query($connection,$insert_qry);
                        }
                    }
                }
            }else{
                for ($i=1;$i<=12;$i++)
                {

                    for($j=1;$j<=$num_cat;$j++)
                    {
                        $var1="clss".strval($i)."b_".strval($j);
                        $var2="clss".strval($i)."g_".strval($j);
                        $boys=$_POST[$var1];
                        $girls=$_POST[$var2]; 
                        if($btn_val=='final')
                        {                       
                        $update_qryq="UPDATE `student_relig_info` set  `value`='$boys', `is_draft`='0' where `sch_code`='$schl_code' and `religion_code`='$j' and `class_code`='$i' and `gender_code`='1'";
                        $query_runq = mysqli_query($connection,$update_qryq);
                        $update_qry="UPDATE `student_relig_info` set  `value`='$girls', `is_draft`='0' where `sch_code`='$schl_code' and `religion_code`='$j' and `class_code`='$i' and `gender_code`='2'";
                        $query_run = mysqli_query($connection,$update_qry);
                        }
                        else{
                        $update_qryq="UPDATE `student_relig_info` set  `value`='$boys', `is_draft`='1' where `sch_code`='$schl_code' and `religion_code`='$j' and `class_code`='$i' and `gender_code`='1'";
                        $query_runq = mysqli_query($connection,$update_qryq);
                        $update_qry="UPDATE `student_relig_info` set  `value`='$girls', `is_draft`='1' where `sch_code`='$schl_code' and `religion_code`='$j' and `class_code`='$i' and `gender_code`='2'";
                        $query_run = mysqli_query($connection,$update_qry);
                        }
                    }
                }
            }


?>
<script type="text/javascript">
	alert("Data added successfully.");
	window.location.href = "entryfrom.php";
</script>