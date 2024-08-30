<?php
if(isset($_POST['submit']))
{
           $usn=$_POST['usn'];
           $fname=$_POST['fname'];
           $lname=$_POST['lname'];
           $phone=$_POST['phno'];
           $email=$_POST['email'];
           $hid=$_POST['hostelid'];
           $password=$_POST['pwd'];
           $cpass=$_POST['Cpwd'];
           if($password==$cpass)
{
    include 'dbconfig.php';
    $sql1="INSERT INTO `students`(`StudentID`, `FirstName`, `LastName`, `ContactNumber`, `Email`, `Password`, `HostelID`) VALUES ('$usn','$fname','$lname','$phone','$email','$password','$hid')";
    if(mysqli_query($conn, $sql1))
    {
         //echo "<script type=\"text/javascript\">alert(\"Successfully Inserted\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;stud_details\">";
        
    }
 else 
     {
      //echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;stud_details\">";
    
     }
}

else 
    {

      // echo "<script type=\"text/javascript\">alert(\"Enter Correct password\");</script>";
       echo "<META http-equiv=\"refresh\" content=\"0;stud_details\">";    
     }
        }
        
else
    {
    echo "<META http-equiv=\"refresh\" content=\"0;stud_details\">";
}
?>
          