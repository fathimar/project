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
                        <td><b>PRODUCT NAME</b></td>
                        <td><input type="text" class="form-control" name="pro_name"></td>
                    </tr>
                    <tr>
                        <td><b>PRODUCT DESCRIPTION</b></td>
                        <td><input type="text" class="form-control" name="pdt_des"></td>
                    </tr>
                    <tr>
                        <td><b>QUANTITY</b></td>
                        <td><input type="text" class="form-control" name="qty"></td>
                    </tr>
                    <tr>
                        <td><b>PRICE</b></td>
                        <td><input type="text" class="form-control" name="price"></td>
                    </tr>
                    <tr>
                        <td><b>SUPPLIER NAME</b></td>
                        <td><input type="text" class="form-control" name="sup_name"></td>
                    </tr>
                    <tr>
                        <td><b>CATEGORY</b></td>
                        <td><select name="cat" id="">
                            <option value="SOAP">SOAP</option>
                            <option value="BOOK">BOOK</option>
                            <option value="PEN">PEN</option>
                        </select></td>
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
    $name=$_POST["pro_name"];
    $pro_des=$_POST["pdt_des"];
    $qty=$_POST["qty"];
    $price=$_POST["price"];
    $sup_name=$_POST["sup_name"];
    $cat=$_POST["cat"];
    echo $name;
    echo "<br>";
    echo $pro_des;
    echo "<br>";
    echo $qty;
    echo "<br>";
    echo $price;
    echo "<br>";
    echo $sup_name;
    echo "<br>";
    echo $cat;
}
?>