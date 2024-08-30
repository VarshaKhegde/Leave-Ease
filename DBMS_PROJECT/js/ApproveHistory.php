<?php include 'studentheader.php'; ?>











<table id="customers" border="1" style="margin-left: auto;margin-right: auto; ">
    <tr>
        <th>Request ID</th>
        <th>USN</th>
        <th>Name</th>
        <th>LName</th>
        <th>Leave FromDate</th>
       <th>Leave ToDate</th>
       <th>No.of Days</th>
        <th>HostelBlock</th>
        <th>Reason</th>
    </tr>
<?php
include 'dbconfig.php';
$sql="";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
         $usn=$row['StudentID'];
        $fname=$row['FirstName'];
        $lname=$row['LastName'];
        $Phone=$row['ContactNumber'];
        $email=$row['Email'];
        $hid=$row['HostelID'];
        $pass=$row['Password'];
        
        echo "<tr><td>$usn</td><td>$fname</td><td>$lname</td><td>$Phone </td><td>$email </td><td>$hid</td><td>$pass</td><td><a href='##?id0=$Phone'>DELETE</a></td><td><a href='empupdate?id=$Phone'>UPDATE</a></td></tr>";
    }
}
?>
</table>




<?php include 'footer.php';
