<?php include 'wardenheader.php'; ?>
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Leave Requests</h1>
                   
                </div>
            </div>
        </div>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["approveButton"])) {
    // Assuming you have the request ID from the form
    $requestId = $_POST["requestId"];

    // Assuming you have the approval status (Approved/Denied) from the form
    $approvalStatus = $_POST["approvalStatus"];

    // Include the database configuration file
    include 'dbconfig.php';

    // Update the status in the LeaveRequests table
    $sql = "UPDATE LeaveRequests SET RequestStatus = '$approvalStatus' WHERE RequestID = $requestId";
    $result = $conn->query($sql);

    if ($result) {
        //echo "Leave request status updated successfully!";
    } else {
        echo "Error updating leave request status: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warden Approval/Denial</title>
</head>
<body>
    <!-- Your HTML form for warden interaction --><div style="margin-left: auto; margin-right:40%;">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="margin-left: 50%; margin-right:auto;">
        <label for="requestId">Request ID:</label>
        <input type="text" name="requestId" id="requestId" required><br>
        <br>
        <label for="approvalStatus">Approval Status:</label>
        <select name="approvalStatus" id="approvalStatus" required>
            <option value="Approved">Approved</option>
            <option value="Denied">Denied</option>
        </select>

        <button type="submit" name="approveButton">Approve/Deny</button>
    </form>
    </div>
</body>
</html>

<br><br>
<table id="customers" border="1" style="margin-left: auto;margin-right: auto; ">
    <tr>
        <th>Request ID</th>
        <th>USN</th>
        <th>Leave FromDate</th>
       <th>Leave ToDate</th>
       <th>Reason</th>
        <th>HostelBlock</th>
        <th>Name</th>
           
    </tr>
<tbody>
                        <!-- loading all leave applications from database -->
                        
    <?php
include 'dbconfig.php';
$sql="SELECT * FROM `leaverequests` WHERE `RequestStatus`='Pending'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
        $reqid=$row['RequestID'];
        $stuid=$row['StudentID'];
        
        $lfrom=$row['LeaveStartDate'];
        $lto=$row['LeaveEndDate'];
        $res=$row['Reason'];
        
  //Store data to id      
$sql1="SELECT * FROM `students` WHERE `StudentID`='$stuid'";
$result1=$conn->query($sql1);
if ($result1->num_rows>0)
{
     while ($row1=$result1->fetch_assoc())
    {
         $stuid=$row1['StudentID'];
         $hid=$row1['HostelID'];
         $name=$row1['FirstName'];
          echo "<tr><td>$reqid</td><td>$stuid</td><td>$lfrom</td><td>$lto</td><td>$res</td><td>$hid</td><td>$name</td>  </tr>";
          
          
     }
     }        
    }
}
?> 
                
</table>
    <?php include 'footer.php'; ?>


<!--<td><a href=\"updateStatusAccept?reqid={$row['RequestID']}&stuid={$row['StudentID']}\"><button class='btn-success btn-sm' >Accept</button></a>
                                                    <a href=\"?reqid={$row['RequestID']}&stuid={$row['StudentID']}\"><button class='btn-danger btn-sm' >Reject</button></a></td>
                                                  -->