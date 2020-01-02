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
                    <h1><center>STUDENT TABLE</center></h1>
                    <tr>
                        <td><b>STUDENT NAME</b></td>
                        <td><input type="text" class="form-control"name="name"></td>
                    </tr>
                    <tr>
                        <td><b>ROLL NO</b></td>
                        <td><input type="text" class="form-control" name="roll_no"></td>
                    </tr>
                    <tr>
                        <td><b>ADM NO</b></td>
                        <td><input type="text" class="form-control" name="adm_no"></td>
                    </tr>
                    <tr>
                        <td><b>COLLEGE</b></td>
                        <td><input type="textarea" class="form-control" name="college"></td>
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
$name=$_POST["name"];
$roll=$_POST["roll_no"];
$adm=$_POST["adm_no"];
$college=$_POST["college"];
echo $name;
echo"<br>";
echo $roll;
echo"<br>";
echo $adm;
echo"<br>";
echo $college;
echo"<br>";
}
?>


