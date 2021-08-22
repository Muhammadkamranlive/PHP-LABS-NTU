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
        <form action="order_handler2.php" method="post">
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
                <button type="submit" class="btn btn-primary " name="btnSubmit">Submit Form</button>
            </div>
        </form>

    </div>
</div>
</div>


</body>
</html>

<?php
echo "<h1>Sumbmitted data through Post method</h1><br>";

if (isset($_POST['btnSubmit'] )){
    echo  $_POST['txtfirstName'] ."<br>";
    echo  $_POST['txtlastName'] ."<br>";
    echo  $_POST['txtuserName'] ."<br>";
    echo  $_POST['txtemail'] ."<br>";
    echo  $_POST['txtaddress'] ."<br>";
    echo  $_POST['txtaddress2'] ."<br>";
    echo  $_POST['txtcountry'] ."<br>";
    echo  $_POST['txtState'] ."<br>";
    echo  $_POST['txtzip'] ."<br>";



        echo "<h2 style='text-align: center'>Question 3 (Validations)</h2>";
        echo "<h3>First Name Validation</h3>";
        $Fname = $_POST['txtfirstName'];
        if (strlen($Fname) >= 3) {
            if (preg_match("/^[a-zA-Z ]*$/", $Fname)) {
                echo "'$Fname' is a Valid name";
            } else {
                echo "Please enter Characters only";
            }
        } else {
            echo "Name must be of 3-characters or long";
        }
        echo "<h3>Email Validation</h3>";
        $email = $_POST['txtemail'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo "Please enter a valid email";
        } else {
            echo "'$email' is a Valid email";
        }
        echo "<h3>Country Validation</h3>";
        $country = $_POST['txtcountry'];
        if ($country== "") {
            echo "Select a country First";
        } else {
            echo "'$country' is a Valid country name";
        }
        echo "<h3>Zip Code</h3>";
        $var = $_POST['txtzip'];
        if (preg_match("/[0-9]/", $var)) {
            echo "'$var' is a Valid zipcode";
        } else {
            echo "Please enter Valid Zipcode";
        }
        // Q4,5 (Concat, CAPS):
        echo "<h2 style='text-align: center'>Question 4,5 (Concat, CAPS)</h2>";
        echo "<h3>First and Last Name Concatenation</h3>";
        $var = $_POST["txtfirstName"] . $_POST["txtlastName"];
        echo $var;
        echo "<h3>Username in CAPs</h3>";
        echo strtoupper($_POST["txtuserName"]);


}