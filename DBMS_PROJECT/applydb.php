
<?php

session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
    $username=$_SESSION['username'];
    $pass=$_SESSION['password'];
    //echo "$username $pass";
}
else
{
    echo "<META http-equiv=\"refresh\" content=\"0;logout\">";
}

?>

<?php 
if (isset($_POST['submit']))
{
    $usn1=$_POST['StudentID'];
    $name1=$_POST['name'];
    $lfrom=$_POST['Lfrom'];
    $lto=$_POST['Lto'];
    $reason=$_POST['reason'];
    $status='pending';
    include 'dbconfig.php';
    $sql="INSERT INTO `leaverequests`(`RequestID`, `StudentID`, `LeaveStartDate`, `LeaveEndDate`, `Reason`, `RequestStatus`) VALUES ('','$usn1','$lfrom','$lto','$reason','$status')";
    if (mysqli_query($conn, $sql))
    {
        //echo "<script type=\"text/javascript\">alert(\"Leave request submitted\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;Apply\">";
    }
        
 else {
        //echo "<script type=\"text/javascript\">alert(\"FAILED\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;Apply\">";
    }
} 
 else {
    echo "<META http-equiv=\"refresh\" content=\"0;Apply\">";
}
?>
