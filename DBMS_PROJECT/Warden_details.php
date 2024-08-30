<?php include 'adminheader.php'; ?>

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Warden Details</h1>
                   
                </div>
            </div>
        </div>

 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="margin-right: auto;margin-left: auto;">
                    <form action="warden_detailDB" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="id" id="id" placeholder="Warden ID" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="fname" id="fname" placeholder="First Name" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="lname" id="lname" placeholder="Last Name" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <input type="number" class="form-control border-0 bg-light px-4" name="phno" id="phno" placeholder="Contact Number" style="height: 55px;" >
                            </div>
                            
                            <div class="col-12">
                                <input type="password" class="form-control border-0 bg-light px-4" name="pwd" id="pwd" placeholder="Password" style="height: 55px;" >
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
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Contact</td>
        <td>Password</td>
    </tr>
    <?php
    include 'dbconfig.php';
    $sql="SELECT * FROM `wardens`";
    $result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
         $usn=$row['WardenID'];
        $fname=$row['FirstName'];
        $lname=$row['LastName'];
        $Phone=$row['ContactNumber'];
        $pass=$row['Password'];
        
        echo "<tr><td>$usn</td><td>$fname</td><td>$lname</td><td>$Phone </td><td>$pass</td><td><a href='##?id0=$Phone'>DELETE</a></td><td><a href='empupdate?id=$Phone'>UPDATE</a></td></tr>";
    }
}
    
    ?>
</table>


<?php include 'footer.php'; ?>