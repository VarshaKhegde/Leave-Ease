<?php 
if (isset($_POST['submit']))
{
    $name=$_POST['username'];
    $pass=$_POST['password'];
    include 'dbconfig.php';
    $sql="SELECT * FROM `security` WHERE `SecurityID`='$name' AND `password`= '$pass'";
    $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while ($row=$result->fetch_assoc())
                {
                    session_start();
                    $_SESSION['username']=$name;
                    $_SESSION['password']=$pass;
                     //echo "<script type=\"text/javascript\">alert(\"Successfully Login\");</script>";
                    echo "<META http-equiv=\"refresh\" content=\"0;view\">";

                }
            }
     else 

            {
                //echo "<script type=\"text/javascript\">alert(\"Password&Username dosen't match\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;seclogin\">";

            }
    }
 else
 {
     echo "<META http-equiv=\"refresh\" content=\"0;seclogin\">";
 }



?>