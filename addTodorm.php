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
        <title>เพิ่มข้อมูลนิสิต DatabaseGroup</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <?php
        if(!isset($_POST['send'])){
        ?>    
        <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1> จงกรอกข้อมูลนิสิตที่ต้องการเพิ่ม </h1>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">รหัสนิสิต :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="รหัสนิสิต" name="sid">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ชื่อหอพัก :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="ชื่อหอพัก" name="dormname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ห้อง :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="ห้อง" name="room">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">เตียง :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="เตียง" name="bed">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">วันที่เข้าหอ :</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" placeholder="วันที่เข้าหอ" name="accessdate">
                </div>
            </div>
            <input type ="submit" style="width:100px" class="btn btn-success" name ="send" value="ตกลง">    
            <input type ="reset" style="width:100px" class="btn btn-danger" name ="cancel" value="ยกเลิก">  
        </form>
              
        <?php
        }
        else{
            include 'config.inc';
            
            $sid = $_POST['sid'];
            $dormname = $_POST['dormname'];
            $room = $_POST['room'];
            $bed = $_POST['bed'];
            $accessdate = $_POST["accessdate"];
            
            $sql = "UPDATE student SET DormName='$dormname',BedNo='$bed',RoomNo='$room',AccessDate='$accessdate',DScore=0 "
                    . "WHERE Sid='$sid'";
            
            $result = $conn->query($sql);
            if ($result) {
                echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
            } else {
                echo "ไม่สามารถเพิ่มข้อมูลได้";
            }
            $conn->close();
        // put your code here
        }
        ?>
        <br>
        <input type ="submit" style="width:200px" class="btn btn-primary" onclick = "location.href='manageDorm.php'" value="ย้อนกลับ"> 
        </div>
    </body>
</html>
