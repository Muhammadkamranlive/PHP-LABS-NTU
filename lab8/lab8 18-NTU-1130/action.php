<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q4</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="h1">
            Q4
        </h1>
        <form action="action.php" method="POST">
        <div class="form control">
                <label for="">number1</label>
                <input type="number" class="form-control" name="number1" id="number1">
            </div>
            <div class="form control">
                <label for="">number2</label>
                <input type="number" class="form-control" name="number2" id="number2">
            </div>
            <div class="form control">
                
                <input type="submit" class="btn btn-block btn-primary" value="Calculate" >

            </div>
            <div class="form-group">
               <?php  
               
                 $Number1=$_POST["number1"];
                 $Number2=$_POST["number1"];
                 $Number3=$Number1+$Number2;
                 
               ?>
                <input type="number" class="btn btn-block btn-primary" name="number2" id="number2" value="<?php echo $Number3?>">
            </div>
        </form>
        
    </div>
</body>
</html>