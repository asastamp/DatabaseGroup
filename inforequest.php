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
        <title>ข้อมูลการร้องขอหอพัก DatabaseGroup</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <?php
            include 'config.inc';
            $sql = "select * from request;";
            $result = $conn->query($sql);
        ?>
        <table class="table table-bordered" border='1'><tr align='center'>
        <?php
            echo "
            <td><b>รหัสนิสิต</b></td>
            <td><b>ชื่อหอพักที่ร้องขอ</b></td>
            </tr>";
            
            while($row = mysqli_fetch_array($result)){
                $studentid = $row["Sid"];
                $dormName = $row["dormname"];
                
                echo "<tr>".
                        "<td><center>$studentid</center></td>"
                        . "<td><center>$dormName</center></td>"
                        ."</tr>";
                           
            }
            
            
                $conn->close();   
        ?>
        </table>
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="กลับหน้าหลัก" onclick = "location.href='index.php'" />
        </div>
    </body>
</html>
