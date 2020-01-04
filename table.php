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
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6">
                <table class="table">
                    <h1><u>LOGIN</u></h1>
                    <tr>
                        <td>USERNAME</td>
                        <td><input type="text" class="form-control" name="name"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="password" class="form-control" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" value="LOGIN " class="btn btn-success" name="button"></td>
                    </tr>
                </table>
            </div>
                    <div class="col col-12 col-sm-6">
                    <h1><u>REGISTRATION</u></h1>
                    <form action="" method="POST">

                    <table class="table">
                    <tr>
                        <td>NAME</td>
                        <td><input type="text" class="form-control" name="name"></td>
                    </tr>
                    <tr>
                        <td>E-MAIL ID</td>
                        <td><input type="text" class="form-control" name="email"></td>
                    </tr>
                    <tr>
                        <td>MOBILE</td>
                        <td><input type="text" class="form-control" name="MOBILE"></td>
                    </tr>
                    <tr>
                        <td>DISTRICT</td>
                        <td><select name="district" id="" class="form-control">
                        <option value="TRIVANDRUM">TRIVANDRUM</option>
                        <option value="KOLLAM">KOLLAM</option>
                        <option value="ALAPPUZHA">ALAPPUZHA</option>
                        </select>
                        </td>


                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" class="form-control" name="dob"></td>
                    </tr>
                    <tr>
                        <td>COURSE</td>
                           <td> <select name="course" id="" class="form-control">
                                <option value="BSc CS">BSc CS</option>
                                <option value="BSc Electronics">BSc Electronics</option>
                                <option value="BSC Mathematics">BSc Mathematics</option>
                            </select>
                        </td> 
                    </tr>
                    <tr>
                        <td>USERNAME</td>
                        <td><input type="text" class="form-control" name="user"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="password"  class="form-control" name="password"></td>
                    </tr>
                    <tr>
                        <td>confirm password</td>
                        <td><input type="password"  class="form-control" name="pass"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="REGISTER" class="btn btn-success" name="reg"></td>
                        
                    </tr>
                </table>
            </form>

            </div>

        
    
    
</body>
</html>
<?php
if(isset($_POST["reg"]))
{
    $name=$_POST["name"];
    $mail_id=$_POST["email"];
    $mobile=$_POST["MOBILE"];
    $mail_id=$_POST["email"];
    $district=$_POST["district"];
    $dob=$_POST["dob"];
    $course=$_POST["course"];
    $username=$_POST["user"];
    $password=$_POST["password"];
    $confirm=$_POST["pass"];
    echo $name;
    echo $mail_id;
    echo $mobile;
    echo $district;
    echo $dob;
    echo $course;
    echo $username;
    echo $password;
    echo $confirm;
}
?>