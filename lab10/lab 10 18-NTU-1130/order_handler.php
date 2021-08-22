<!DOCTYPE html>
<html>
<head>
    <title>Hnadler </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>


    <div class="container-fluid py-5 bg-light">
         <div class="container">

                 <h1 class="title">Billing Address</h1>
                 <form action="order_handler.php" method="get">
                     <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" name="txtfirstName">
                        </div>
                    </div>
                     <div class="col-sm-6">
                         <div class="form-group">
                             <label for="firstname">Last Name</label>
                             <input type="text" class="form-control" name="txtlastName">
                         </div>
                     </div>

                         <div class="col-sm-12">
                             <label for="userrname">Username</label>
                             <label class="sr-only" for="inlineFormInputGroup">Username</label>
                             <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                     <div class="input-group-text">@</div>
                                 </div>
                                 <input type="text" class="form-control" id="inlineFormInputGroup" name="txtuserName" placeholder="Username">
                             </div>
                         </div>

                         <div class="col-sm-12">
                             <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="email" class="form-control" name="txtemail" placeholder="email">
                             </div>
                         </div>


                         <div class="col-sm-12">
                             <div class="form-group">
                                 <label for="email">Address</label>
                                 <input type="text" class="form-control" name="txtaddress" placeholder="address">
                             </div>
                         </div>

                         <div class="col-sm-12">
                             <div class="form-group">
                                 <label for="add2">Address 2</label>
                                 <input type="text" class="form-control" name="txtaddress2" placeholder="Address 2">
                             </div>
                         </div>


                         <div class="col-lg-6">
                             <label for="country" class="form-label">Country</label>
                             <select id="country" class="custom-select" name="txtcountry">
                                 <option selected>Choose...</option>
                                 <option value="pakistan">pakistan</option>
                                 <option value="india">india</option>
                                 <option value="maldeep">maldeep</option>
                             </select>
                         </div>
                         <div class="col-lg-4">
                             <label for="State" class="form-label">State</label>
                             <select id="State" class="custom-select" name="txtState">
                                 <option selected>Choose...</option>
                                 <option value="kashmir">Kashmir</option>
                                 <option value="marashetera">mahashatera</option>
                             </select>
                         </div>
                         <div class="col-lg-2">
                             <label for="Zip" class="form-label">Zip</label>
                             <input type="text" class="form-control" id="Zip" name="txtzip">
                         </div>
                         <div class="col-12">
                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" id="check">
                                 <label class="form-check-label" for="check">
                                     Shipping address is same as my billing address
                                 </label>
                             </div>
                         </div>

                         <div class="col-12">
                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" id="check">
                                 <label class="form-check-label" for="check">
                                     Save this information for the next time
                                 </label>
                             </div>
                         </div>
                           <button type="submit" class="btn btn-primary " name="txtsubmit">Submit Form</button>
                     </div>
                 </form>

         </div>
    </div>
    </div>


</body>
</html>

<?php
     echo "<h1>Sumbmitted data through Get method</h1><br>";

     if (isset($_GET['txtsubmit'] )){
         echo  $_GET['txtfirstName'] ."<br>";
         echo  $_GET['txtlastName'] ."<br>";
         echo  $_GET['txtuserName'] ."<br>";
         echo  $_GET['txtemail'] ."<br>";
         echo  $_GET['txtaddress'] ."<br>";
         echo  $_GET['txtaddress2'] ."<br>";
         echo  $_GET['txtcountry'] ."<br>";
         echo  $_GET['txtState'] ."<br>";
         echo  $_GET['txtzip'] ."<br>";
     }