<?php include 'studentheader.php'; ?>

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Apply Leave</h1>
                   
                </div>
            </div>
        </div>


 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="margin-right: auto;margin-left: auto;">
                    <form action="applydb" method="POST" >
                        <div class="row g-3">
                             <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;" name="StudentID" id="StudentID" placeholder="StudentID">
                                        
                            <?php 
$id6=$_GET['StudentID'];
include 'dbconfig.php';
$sql="SELECT * FROM `students` WHERE `StudentID`='$id6'";
$result=$conn->query($sql);
if ($result->num_rows>0)
 $username=$_GET['StudentID'];
    
    include 'dbconfig.php';
    
    $sql="SELECT * FROM `students` WHERE `StudentID`='$username'";
    $result=$conn->query($sql);
{
    while ($row=$result->fetch_assoc()) 
    {
        $username=$row['StudentID'];
        
        echo "$username";
        echo "<option value='$username'>$username</option>";

    }
}
                                                ?>
                                           </select>
                                </div>
                           <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="name" id="name" placeholder="Your Name" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <input type="text" onfocus="(this.type='date')" class="form-control border-0 bg-light px-4" name="Lfrom" id="Lfrom" placeholder="Leave From" style="height: 55px;" >
                            </div>
                            <div class="col-12">
                                <input type="text" onfocus="(this.type='date')" class="form-control border-0 bg-light px-4" name="Lto" id="Lto" placeholder="Leave To" style="height: 55px;" >
                            </div>
                                    
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" name="reason" id="reason" placeholder="Reason" ></textarea>
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">APPLY</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
