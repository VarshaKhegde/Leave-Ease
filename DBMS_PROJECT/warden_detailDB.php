<?php
if(isset($_POST['submit']))
{
           $wardid=$_POST['id'];
           $fname=$_POST['fname'];
           $lname=$_POST['lname'];
           $phone=$_POST['phno'];
           $password=$_POST['pwd'];
          
    include 'dbconfig.php';
    $sql1="INSERT INTO `wardens`(`WardenID`, `FirstName`, `LastName`, `ContactNumber`, `Password`) VALUES ('$wardid','$fname','$lname','$phone','$password')";
    if(mysqli_query($conn, $sql1))
    {
         //echo "<script type=\"text/javascript\">alert(\"Successfully Inserted\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;Warden_details\">";
        
    }
 else 
     {
      //echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;Warden_details\">";
    
     }
}

else
    {
    echo "<META http-equiv=\"refresh\" content=\"0;Warden_details\">";
}
?>











?>
