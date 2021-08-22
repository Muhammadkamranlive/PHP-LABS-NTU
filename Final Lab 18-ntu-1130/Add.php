
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container ">
    <h1 class="text-center">Add Product Page</h1>
    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="insert.php">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Product Name"/>
                    <br/>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type ="text" name="description" class="form-control" placeholder="Enter Product Description"/>
                    <br/>
                 </div>
                 <div class="form-group">
                     <label for="">Price</label>
                     <input type="text" name ="price" class="form-control" placeholder="Enter Product Price"/>
                     <br/>
                 </div>
                <div class="form-group">
                    <label for=""></label> <br/>
                    <input type="submit" value="Add Product" class="btn btn-primary" name="submit" >
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>