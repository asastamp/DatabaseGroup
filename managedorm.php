<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ระบบจัดการข้อมูลหอพักสำหรับนิสิต DatabaseGroup</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
        <?php
            include 'config.inc';
            $sql = "select distinct * from student,manage_dorm
                    WHERE student.Sid=manage_dorm.Sid";
            $result = $conn->query($sql);
        ?>
            <div class="table-users">
            <div class="header">ข้อมูลหอพักของนิสิต</div>
            <table class="table table-bordered" border='1'><tr align='center'>
        <?php    
            echo "
            
            <td><b>รหัสนิสิต</b></td>
            <td><b>ชื่อ</b></td>
            <td><b>นามสกุล</b></td>
            <td><b>ชื่อหอพัก</b></td>
            <td><b>ห้อง</b></td>
            <td><b>เตียง</b></td>
            <td><b>คะแนน</b></td>
            <td><b>วันที่เข้าพัก</b></td>
            <td><b>แก้ไข</b></td>
            <td><b>ยกเลิก</b></td>
            </tr>";
            
            while($row = mysqli_fetch_array($result)){
                $studentid = $row["Sid"];
                $FirstName = $row["FirstName"];
                $LastName = $row["LastName"];
                $dormname = $row["DormName"];
                $room = $row["RoomNo"];
                $bed = $row["BedNo"];
                $score = $row["DScore"];
                $accessdate = $row["AccessDate"];
                
                echo "<tr>".
                        "<td><center>$studentid</center></td>"
                        . "<td><center>$FirstName</center></td>"
                        . "<td><center>$LastName</center></td>"
                        . "<td><center>$dormname</center></td>"
                        . "<td><center>$room</center></td>"
                        . "<td><center>$bed</center></td>"
                        . "<td><center>$score</center></td>"
                        . "<td><center>$accessdate</center></td>"
                        ."<td><center><a href='updateTodorm.php?id=$row[0]'> แก้ไข</a></center></td>"
                        ."<td><center><a href='deleteTodorm.php?id=$row[0]'> ยกเลิก</a></center></td>"
                        ."</tr>";
                           
            }
            
            
                $conn->close();   
        ?></table>
            </div>
        <br>
        <center><input type="submit" class="btn btn-danger " style="width:200px" value="เพิ่มข้อมูลนิสิต" onclick = "location.href='addTodorm.php'" /></center><br>
        <center><input type="submit" class="btn btn-primary" style="width:200px" value="กลับหน้าหลัก" onclick = "location.href='index.php'" /></center>
        </div>
    </body>
</html>
