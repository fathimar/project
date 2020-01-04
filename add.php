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
                    <h1><center>ADDITION</center></h1>
                    <tr>
                        <td><b>NUMBER1</b></td>
                        <td><input type="text" class="form-control"name="num1"></td>
                    </tr>
                    <tr>
                        <td><b>NUMBER2</b></td>
                        <td><input type="text" class="form-control" name="num2"></td>
                    </tr>
                    <tr>
                        <td><b>OPERATION</b></td>
                        <td><select name="op" id="">
                            <option value="ADDITION">add</option>
                            <option value="SUBTRACTION">sub</option>
                            <option value="MULTIPLICATION">mul</option>
                            <option value="DIVISION">div</option>

                        </select></td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td><input type="submit" value="ADD" class="btn btn-success" name="add"></td>
                    </tr>
                    
                    
                </table>
                </form>
            </div>
            <div class="col col-12 col-sm-4">
            </div>    
    </body>
</html>
<?php
if(isset($_POST["add"]))
{
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$add=$num1+$num2;
$sub=$num1-$num2;
$mul=$num1*$num2;
$div=$num1/$num2;
echo"$num1";
echo"<br>";
echo"$num2";
echo"<br>";
{if($op==$add)

    echo "$add";

    elseif($op==$sub)
    
    echo "$sub";
    
    elseif($op==$mul)
    
    echo "$mul";
    
    else($op==$div)
    
    echo "$div";
}   
}

?>





