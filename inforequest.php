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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    
    <body>
        <?php
            include 'config.inc';
            $sql = "select * from request;";
            $result = $conn->query($sql);
        ?>
            <div class="table-users">
            <div class="header">รายการนิสิตที่ร้องขอหอพัก</div>
            <table class="table table-bordered" border='1'><tr align='center'>
            <?php
                    echo "
                        <td><b>รหัสนิสิต</b></td>
                        <td><b>ชื่อหอพักที่ร้องขอ</b></td>
                        <td><center><b>เพิ่มเข้าหอ</b></center></td>
                        </tr>";
                    while($row = mysqli_fetch_array($result)){
                        $studentid = $row["Sid"];
                        $dormName = $row["dormname"];
                        echo "<tr>".
                             "<td>$studentid</td>"
                              ."<td>$dormName</td>"
                              ."<td><center><a href='addTodormbyreq.php?id=$row[0]&id2=$row[1]'> เพิ่ม</a></center></td>"
                              ."</tr>";
                    }
                    $conn->close();   
             ?></table>                       
	</div>          
        <center><input type="submit" class="btn btn-primary" value="กลับหน้าหลัก" onclick = "location.href='index.php'" /></center>


<!--===============================================================================================-->	
	<script src="s_table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="s_table/vendor/bootstrap/js/popper.js"></script>
	<script src="s_table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="s_table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="s_table/js/main.js"></script>
        
    </body>
</html>
