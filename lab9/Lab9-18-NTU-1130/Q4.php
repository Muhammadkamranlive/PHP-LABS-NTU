<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
 <h1 class="heading">
     Stripped Table
 </h1>
 <table class="table table-striped">
     <tr>
         <td>
           First Column

         </td>
         <td>
             Second Column
         </td>
         <td>
             Third Column
         </td>
         <td>
             Fourth Column
         </td>
     </tr>

      <tr>
        <td>
            <?php
            for($i=1;$i<4;$i++){
                echo "$i <br>";
            }
            ?>
        </td>
          <td>
              <?php
              $data=array(2,3,4);
               foreach ($data as $value){
                   echo  "$value <br>";
               }
              ?>
          </td>
          <td>
              <?php
              $data=array(3,4,5);
              foreach ($data as $value){
                  echo  "$value <br>";
              }
              ?>
          </td>
          <td>
              <?php
              $data=array(4,5,6);
              foreach ($data as $value){
                  echo  "$value <br>";
              }
              ?>
          </td>
      </tr>

 </table>
</body>
</html>

