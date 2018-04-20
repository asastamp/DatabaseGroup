<?php    
    include 'config.inc';
    $sql = "select distinct * from student,manage_dorm
                    WHERE student.Sid=manage_dorm.Sid;";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
?>


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
        <title>แก้ไขข้อมูลนิสิต DatabaseGroup</title>
        
           <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="s_form/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="s_form/vendor/animate/animate.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="s_form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="s_form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="s_form/css/util.css">
	<link rel="stylesheet" type="text/css" href="s_form/css/main.css">
    <!--===============================================================================================-->
    </head>
    <body>
        <?php
        if(!isset($_POST['send'])){
        ?>    
        <div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
        <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
            <span class="contact3-form-title">
                                            <h1>จงกรอกข้อมูลนิสิต</h1>
                                            <h1>ที่ต้องการแก้ไข</h1>
					</span>
            <div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="sid" placeholder="รหัสนิสิต :" value ="<?php echo $row['Sid']?>">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Dormname is required">
						<input class="input3" type="text" name="dormName" placeholder="ชื่อหอพัก :" value ="<?php echo $row['DormName']?>">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Room is required">
						<input class="input3" type="text" name="room" placeholder="ห้อง :" value ="<?php echo $row['RoomNo']?>">
						<span class="focus-input3"></span>
					</div>

                                        <div class="wrap-input3 validate-input" data-validate = "Bed is required">
						<input class="input3" type="text" name="bed" placeholder="เตียง :" value ="<?php echo $row['BedNo']?>">
						<span class="focus-input3"></span>
					</div>
                                    
                                        <div class="wrap-input3 validate-input" data-validate = "AccessDate is required">
						<input class="input3" type="date" name="accessdate" placeholder="วันที่เข้าหอ : " value ="<?php echo $row['AccessDate']?>">
						<span class="focus-input3"></span>
					</div>
	
                                        <div class="container-contact3-form-btn"><center>
                                                <button class="contact3-form-btn" type ="submit" name ="send">
							ตกลง
						</button>
                                                <button class="contact3-form-btn" type ="reset" name ="cancel">
							ยกเลิก
						</button>
                                        </center></div>
        </form>
              </div>
		</div>
            <center><button class="contact3-form-btn" type ="submit" value="ย้อนกลับ" onclick = "location.href='manageDorm.php'">
		กลับหน้าหลัก
	</button></center>
	</div>
        <?php
        }
        else{
            include 'config.inc';
            $sid = $_POST['sid'];
            $dormName = $_POST['dormName'];
            $room = $_POST['room'];
            $bed = $_POST['bed'];
            $accessdate = $_POST["accessdate"];
            
            $sql = "UPDATE manage_dorm SET DormName='$dormName',BedNo='$bed',RoomNo='$room',AccessDate='$accessdate' WHERE Sid='$sid'";
            $result = $conn->query($sql);
            if ($result) {
                echo "<p><b><center>แก้ไขข้อมูลเรียบร้อยแล้ว</center></b></p>";
            } else {
                echo "<p><b><center>ไม่สามารถแก้ไขข้อมูลได้</center></b></p>";
            }
            ?>
<br>
    <center><button class="btn btn-danger" type ="submit" value="ย้อนกลับ" onclick = "location.href='manageDorm.php'">
		กลับหน้าหลัก
            </button></center>
                <?php
            $conn->close();
        
        }
        ?>

    </body>
</html>
