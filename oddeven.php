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
                <form action="" method="POST">
                <table class="table">
                    <h1><center>ODD OR EVEN</center></h1>
                    <tr>
                        <td><b>enter a number</b></td>
                        <td><input type="text" class="form-control" name="number"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="ODD OR EVEN" class="btn btn-success" name="oddeven"></td>
                    </tr>
                    
                    
                </table>
                </form>
            </div>
            <div class="col col-12 col-sm-4">
            </div>    
    </body>
</html>

<?php
if(isset($_POST["oddeven"]))
{
$number=$_POST["number"];
echo $number;


    if($number%2==0)
    {
        echo "even";
    }
    else
    {
        echo "odd";
    }

}
?>