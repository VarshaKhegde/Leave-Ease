<?php include 'wardenheader.php'; ?>

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Approved History</h1>
                   
                </div>
            </div>
        </div>

<table id="customers" border="1" style="margin-left: auto;margin-right: auto; ">
    <tr>
        
       <th>RequestID</th>
        <th>Leave From</th>
        <th>Leave To</th>
        <th>Reason</th>
        <th>Status</th>
        <!--<th>Actions</th>-->      
    </tr>
<tbody>
                        <!-- loading all leave applications from database -->
                        
    <?php
include 'dbconfig.php';
$sql="SELECT * FROM `leaverequests` WHERE `RequestStatus`='Approved'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
        
        $reqid=$row['RequestID'];
        $lfrom=$row['LeaveStartDate'];
        $lto=$row['LeaveEndDate'];
        $res=$row['Reason'];
        $status=$row['RequestStatus'];
          echo "<tr><td>$reqid</td><td>$lfrom</td><td>$lto</td><td>$res</td><td>$status</td> </tr>";
         
          
          
     }
     }        
    
?> 
                
</table>
    <?php include 'footer.php'; ?>
