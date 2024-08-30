<?php include 'adminheader.php'; ?>

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Student Details</h1>
                   
                </div>
            </div>
        </div>

 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="margin-right: auto;margin-left: auto;">
                    <form action="stu_detailsDB" method="POST">
                        <div class="row g-3">
                            
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="usn" id="usn" placeholder="StudentID" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="fname" id="fname" placeholder="Your First Name" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="lname" id="lname" placeholder="Your Last Name" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <input type="number" class="form-control border-0 bg-light px-4" name="phno" id="phno" placeholder="Contact Number" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control border-0 bg-light px-4" name="email" id="email" placeholder="Your Email" style="height: 55px;" >
                            </div>
                            <!--<div class="col-12">
                                <input type="file" class="form-control border-0 bg-light px-4" name="photo" id="photo" placeholder="Image" style="height: 55px;" >
                            </div>
                            
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" name="address" id="address" placeholder="Address" ></textarea>
                            </div>-->
                            <!--<div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="hostelid" id="hostelid" placeholder="hostel id" style="height: 55px;" >
                            </div>-->
                            <div class="col-12">
                      
                                <select id="hostelid" name="hostelid">
                                    <?php
                                   
                                    include 'dbconfig.php';
$sql="SELECT * FROM `hostelblocks`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc()) 
    {
        $id=$row['HostelID'];
        $name=$row['HostelName'];
        //$status=$row['status'];
        
        echo "<option>Select Hostel</option><option value='$id'>$name</option>";

    }
}
                                    
                                    ?>
                                    
                                </select>
                               
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control border-0 bg-light px-4" name="pwd" id="pwd" placeholder="Password" style="height: 55px;" >
                            </div>
                            
                            <div class="col-12">
                                <input type="password" class="form-control border-0 bg-light px-4" name="Cpwd" id="Cpwd" placeholder="Confirm Password" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<table id="customers" border="2" style="margin-left: auto;margin-right: auto; ">
    <tr>
        <th>USN</th>
        <th>FName</th>
        <th>LName</th>
        <th>PhoneNo</th>
       <th>Email</th>
        <th>HostelBlock</th>
        <th>Password</th>
    </tr>
<?php
include 'dbconfig.php';
$sql="SELECT * FROM `students`";
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

<?php include 'footer.php'; ?>
