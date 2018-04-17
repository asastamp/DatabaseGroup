<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ระบบหอพัก DatabaseGroup</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1><center>ระบบหอพัก DatabaseGroup</center></h1>
            </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" onclick = "location.href='managedorm.php'" value="จัดการข้อมูลหอของนิสิต">
        <input type="submit" class="btn btn-primary btn-lg btn-block" onclick = "location.href='score.php'" value="เพิ่มลดคะแนนหอ">
        <input type="submit" class="btn btn-primary btn-lg btn-block" onclick = "location.href='inforequest.php'" value="ข้อมูลการร้องขอหอพัก">
        <input type="submit" class="btn btn-danger btn-lg btn-block" onclick = "location.href='login.php'" value="ออกจากระบบ">
        </div>
    </body>
</html>
