<?php

require_once("DbConnection.php");
$obj= new DataBaseConnection();
$array=$obj->DisplayData();
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>


 
<div class="container py-5">
    <a href="Add.php" class="btn btn-primary">Add Product Page</a>
    <h1 class="text-center">Show Product Page</h1>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <tr>
                    <th>
                        SL
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Action
                    </th>

                </tr>
                <?php
                foreach($array as $list){
                    echo "<tr>";
                    echo "<td>$list[0]</td>";
                    echo "<td>$list[1]</td>";
                    echo "<td>$list[2]</td>";
                    echo "<td>₹$list[3]</td>";
                    echo "<td><a href='del.php?id=$list[0]' class='box' style='margin-left: 20px'  ><i class='fas fa-trash-alt  text-dark'  style='margin-left: 20px'  aria-hidden='true'></i></a></td>";
                    echo "<tr/>";

                }

                ?>
            </table>
        </div>
    </div>
</div>



</body>
</html>
