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
        <title>ข้อมูลหอพักสำหรับนักเรียน DatabaseGroup</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">            
                <h1><center>ข้อมูลหอพักของคุณ</center></h1>
            </div>
        <?php
            session_start();
            if($_SESSION['UserID'] == ""){
		echo "Please Login!";
		exit();
            }
            if($_SESSION['Status'] != "USER"){
		echo "This page for User only!";
		exit();
            }	
            include 'config.inc';
            $sql = "select * from student where Sid = '".$_SESSION['Username']."'";
            $result = $conn->query($sql);
        ?>
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
                        ."</tr>";
                           
            }
            
            
                $conn->close();   
        ?></table>
        <input type="submit" class="btn btn-success btn-lg btn-block" value="ส่งคำขอหอพัก" onclick = "location.href='request.php'" />  
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="ออกจากระบบ" onclick = "location.href='login.php'" />
        </div>
    </body>
</html>
