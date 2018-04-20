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
        <title>ลบข้อมูล Request DatabaseGroup</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <?php
            include 'config.inc';
            $removeSid = strval($_GET['id']);
            $sql = "delete from request where Sid=$removeSid";
            $result = $conn->query($sql);
            if ($result) {
                echo "<p><b><center>ลบrequestเรียบร้อยแล้ว</center></b></p>";
            } else {
                echo "<p><b><center>ไม่สามารถลบrequestได้</center></b></p>";
            }
            $conn->close();   
        ?>
        <br>
            <center><button class="btn btn-danger" type ="submit" value="ย้อนกลับ" onclick = "location.href='index.php'">
		กลับหน้าหลัก
            </button></center>
        </div>
    </body>
</html>
