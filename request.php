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
        <title>ระบบร้องขอหอพัก DatabaseGroup</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="container">
        <?php
        session_start();
        if(!isset($_POST['send'])){
        ?>    
        <form  method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="jumbotron">
                <h1><center> แบบฟอร์มการร้องขอ </center></h1>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">รหัสนิสิต :</label> 
                <div class="col-sm-10">
                    <?php echo $_SESSION['Username'];?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ชื่อหอพัก :</label> 
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="ชื่อหอพักที่ต้องการร้องขอ" name="dormname">
                </div>
            </div>
                <input type ="submit" class="btn btn-success" style="width:100px" name ="send" value="ตกลง">      
                <input type ="reset" class="btn btn-danger" style="width:100px" name ="cancel" value="ยกเลิก">  
        </form>
              
        <?php
        }
        else{
            include 'config.inc';
            $sid = $_SESSION['Username'];
            $dormname = $_POST['dormname'];

            $sql = "Insert Into request values('$sid','$dormname');";
            $result = $conn->query($sql);
            if ($result) {
                echo "ร้องขอเรียบร้อยแล้ว";
            } else {
                echo "ไม่สามารถร้องขอได้";
            }
            $conn->close();
        // put your code here
        }
        ?>
        <p>
        <br>
        <input type="submit" class="btn btn-primary" style="width:200px" onclick = "location.href='student.php'" value="กลับหน้าหลัก"> 
        </div>
    </body>
</html>
