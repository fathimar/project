<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: grey;" >
    
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4">

        </div>
            <div class="col col-12 col-sm-4">
                <form action="" method="post">
                <table class="table">
                    <h1><center>PRODUCT TABLE</center></h1>
                    <tr>
                        <td><b>PRODUCT CODE</b></td>
                        <td><input type="text" class="form-control" name="code"></td>
                    </tr>
                    <tr>
                        <td><b>PRODUCT name</b></td>
                        <td><input type="text" class="form-control" name="pdt_name"></td>
                    </tr>
                    <tr>
                        <td><b>CATEGORY</b></td>
                        <td><select name="cat" id="">
                            <option value="fashion elc">fashion_elc</option>
                            <option value="bakery foods">Bakery foods</option>
                            <option value="PEN">PEN</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><b>quantity</b></td>
                        <td><input type="text" class="form-control" name="qty"></td>
                    </tr>
                    <tr>
                        <td><b>price</b></td>
                        <td><input type="text" class="form-control" name="price"></td>
                    </tr>
                    <tr>
                        <td><b>Dealer Name</b></td>
                        <td><input type="text" class="form-control" name="name"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-success" name="submit"></td>
                    </tr>
                    
                </table>
            </form>

            </div>
            <div class="col col-12 col-sm-4">
            </div>    
    </body>
</html>

<?php
if(isset($_POST["submit"]))
{
    $code=$_POST["code"];
    $pdt_name=$_POST["pdt_name"];
    $category=$_POST["cat"];
    $qty=$_POST["qty"];
    $price=$_POST["price"];
    $name=$_POST["name"];
    echo $code;
    echo "<br>";
    echo $pdt_name;
    echo "<br>";
    echo $category;
    echo "<br>";
    echo $qty;
    echo "<br>";
    echo $price;
    echo "<br>";
    echo $name;
}
?>