<?php include 'header.php'; ?>


<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 5px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Security Login</h1>
                    
                </div>
                <div class="row g-5" >
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="margin-right: auto;margin-left: auto;" >
                    <form action="seclogindb" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6" >
                                <input type="text" class="form-control border-0 bg-light px-4" name="username" id="username" placeholder="User Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control border-0 bg-light px-4" name="password" id="password" placeholder="Password" style="height: 55px;">
                            </div>
                           
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
            </div>
        </div>
                
 

<?php include 'footer.php'; ?>