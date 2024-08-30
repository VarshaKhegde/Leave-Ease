<?php 
if (isset($_POST['submit']))
{
    $name=$_POST['AdminID'];
    $pass=$_POST['Password'];
    include 'dbconfig.php';
    $sql="SELECT * FROM `admins` WHERE `AdminID`= '$name' AND `Password`= '$pass'";
    $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while ($row=$result->fetch_assoc())
                {
                    session_start();
                    $_SESSION['username']=$name;
                    $_SESSION['password']=$pass;
                     //echo "<script type=\"text/javascript\">alert(\"Successfully Login\");</script>";
                    echo "<META http-equiv=\"refresh\" content=\"0;stud_details\">";

                }
            }
            else 

            {
                //echo "<script type=\"text/javascript\">alert(\"Password&Username dosen't match\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;adminlogin\">";

            }
    }
 else
 {
     echo "<META http-equiv=\"refresh\" content=\"0;stud_details\">";
 }


?>