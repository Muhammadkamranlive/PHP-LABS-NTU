<?php
require_once("DbConnection.php");
$obj = new DbConnection();
$data = $obj->SearchData($_GET['user_id']);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
   <h1 class="text-center">Update Record</h1>
    <div class="card">
        <form method="post" action="updated.php">
            <input type="hidden"  name="user_id" value="<?php echo $data[0]?>" />
             <div class="form-group">
                 <label for="">
                     username
                 </label>
                 <input type="text" name="Username" value="<?php echo $data[1]?>" />
             </div>
            <div class="form-group">
                <label for="">
                    username
                </label>
                <input type ="text" name="Password" value="<?php echo $data[2]?>"/>
            </div>
            <div class="form-group">
                <label for="">
                    username
                </label>
                <input type="text" name ="Email" value="<?php echo $data[3]?>"/>
            </div>

          <div class="form-group">
              <label for="">Update</label><br/>
              <input type="submit"   class="btn btn-primary" value="submit" name="submit">
          </div>

        </form>
    </div>
</div>
</body>
</html>

