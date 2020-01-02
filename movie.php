<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col col-12 col-sm-4">

            
        </div>
        <div class="col col-12 col-sm-4">

<form action="" method="GET">


        <table class="table">
                <tr>
                    <td>Released year</td>
                    <td><input type="text" class="form control" name="year"></td>
                </tr>
                <tr>
                    <td>Actor</td>
                    <td><input type="text" class="form control" name="actor"></td>
                </tr>
                <tr>
                    <td>Actress</td>
                    <td><input type="text" class="form control" name="Actress"></td>
                </tr>
                <tr>
                    <td>Director</td>
                    <td><input type="text" class="form control" name="director"></td>
                </tr>
                <tr>
                        <td>Producer</td>
                        <td><input type="text" class="form control" name="producer"></td>
                    </tr>
                    <tr>
                            <td>camera</td>
                            <td><input type="text" class="form control" name="camera"></td>
                        </tr>
                        <tr>
                                <td>Distribution</td>
                                <td><input type="text" class="form control" name="distribution"></td>
                            </tr>
                            <tr>
                                    <td></td>
                                    <td><input type="submit" value="Submit" class="btn btn-success" name="submit"></td>
                                </tr>
                            
        
    
            </table> 
</form>
        
        </div>
    <div class="col col-12 col-sm-4">

    </div>
</body>
</html>


<?php

if(isset($_GET["submit"]))

{

$year=$_GET["year"];
$actor=$_GET["actor"];
$actress=$_GET["Actress"];
$director=$_GET["director"];
$producer=$_GET["producer"];
$camera=$_GET["camera"];
$distribution=$_GET["distribution"];
echo $year;
echo "<br>";
echo $actor;
echo $actress;
echo $director;
echo $producer;
echo $camera;
echo $distribution;

}



?>