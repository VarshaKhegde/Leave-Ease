<?php
if(isset($_POST['submit']))
{
            $id=$_POST['secid']; 
            $Fname=$_POST['fname'];
            $Lname=$_POST['lname'];
            $Phone=$_POST['phno'];
            $pass=$_POST['pwd'];

    include 'dbconfig.php';
    $sql="INSERT INTO `security`(`SecurityID`, `FirstName`, `LastName`, `ContactNumber`, `Password`) VALUES ('$id','$Fname','$Lname','$Phone','$pass')";
    if (mysqli_query($conn, $sql))
    {
        echo "<script type=\"text/javascript\">alert(\"Successfull Added\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;secuDetail\">";
    }
        
 else {
        echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;secuDetail\">";
    }

}
 else {
    echo "<META http-equiv=\"refresh\" content=\"0;secuDetail\">";
}
?>
