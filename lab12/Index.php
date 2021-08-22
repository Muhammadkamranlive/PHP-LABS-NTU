<?php
$n=10;
function getPassword($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}
 require_once ("DbConnection.php");
 $obj= new DbConnection();
 $data=$obj->DisplayData();
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


       <table class="table">
           <thead class="thead-dark " style="margin-right:-90px">
           <tr>
               <th scope="col">#UserID</th>
               <th scope="col">Username</th>
               <th scope="col">Delete</th>
               <th scope="col">Update</th>
           </tr>
           </thead>
           <tbody>
           <?php
           foreach($data as $list){

               echo "<tr>";
               echo "<td>$list[0]</td>";
               echo "<td>$list[1]</td>";
               echo "<td>$list[3]</td>";
               echo "<td><a href='del.php?user_id=$list[0]' class='btn btn-danger'   > delete </a></td>";
               echo "<td><a href='update.php?user_id=$list[0]' class='btn btn-success' > Update </a></td>";
               echo "<tr/>";
           }

           ?>

           </tbody>
       </table>

         <div class="row mt-5">
             <h1 class="text-center">Add New User From Here</h1>
         </div>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           Add New User
       </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="container">
                           <div class="row">
                               <div class="col-sm-12">
                                   <h1 class="h1 text-center "> Add New User</h1>
                                   <form action="add.php" method="post">
                                       <div class="form-group">
                                           <label for="username">Username</label>
                                           <input type="text" class="form-control" id="username" name="Username">
                                       </div>
                                       <div class="form-group">
                                           <label for="password">Password</label>
                                           <input type="password" class="form-control" id="password" name="Password"  value="<?php echo getPassword($n) ?> ">
                                       </div>
                                       <div class="form-group">
                                           <label for="email">Email</label>
                                           <input type="email" class="form-control" id="email" name="Email" required>
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                           <button type="submit" class="btn btn-primary">Add User</button>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>


                   </div>

               </div>
           </div>
       </div>


   </div>
</body>
</html>
