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
        <title>จัดการคะแนนหอ DatabaseGroup</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <?php
        if(!isset($_POST['send'])){
        ?>    
        <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1> จงกรอกข้อมูลนิสิตที่ได้รับคะแนนหรือเสียคะแนน </h1>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">รหัสนิสิต :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="รหัสนิสิต" name="sid">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">คะแนน :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="คะแนน" name="score">
                </div>
            </div>
            <input type="radio" class="btn btn-info" name="val" value="add" checked> เพิ่ม<br>
            <input type="radio" class="btn btn-info" name="val" value="sub"> ลด<br><br>
            <input type ="submit" style="width:100px" class="btn btn-success" name ="send" value="ตกลง">    
            <input type ="reset" style="width:100px" class="btn btn-danger" name ="cancel" value="ยกเลิก">  
        </form>
              
        <?php
        }
        else{
            include 'config.inc';
            $sid = $_POST['sid'];
            $score = (int)($_POST['score']);
            if($_POST['val']=='add'){
                $sql = "UPDATE student SET DScore=DScore+$score WHERE Sid='$sid'";
            }else{
                $sql = "UPDATE student SET DScore=DScore-$score WHERE Sid='$sid'";
            }
            
            $result = $conn->query($sql);
            if ($result) {
                echo "สำเร็จ";
            } else {
                echo "ไม่สำเร็จ";
            }
            $conn->close();
        // put your code here
        }
        ?>
        <br>
        <input type ="submit" style="width:200px" class="btn btn-primary" onclick = "location.href='index.php'" value="ย้อนกลับ"> 
        </div>
    </body>
</html>
