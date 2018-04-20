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
                                            <h2>จงกรอกข้อมูลนิสิต</h2>
                                            <h2>ที่ได้รับคะแนนหรือเสียคะแนน</h2>
					</span>
					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="sid" placeholder="รหัสนิสิต :">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "score is required">
						<input class="input3" type="text" name="score" placeholder="คะแนน :">
						<span class="focus-input3"></span>
					</div>
                                        <input type="radio" class="btn btn-info" name="val" value="add" checked> เพิ่ม<br>
                                        <input type="radio" class="btn btn-info" name="val" value="sub"> ลด<br><br>
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
            <center><button class="contact3-form-btn" type ="submit" value="ย้อนกลับ" onclick = "location.href='index.php'">
		กลับหน้าหลัก
	</button></center>
	</div>

              
        <?php
        }
        else{
            include 'config.inc';
            $sid = $_POST['sid'];
            $score = (int)($_POST['score']);
            if($_POST['val']=='add'){
                $sql = "UPDATE manage_dorm SET DScore=DScore+$score WHERE Sid='$sid'";
            }else{
                $sql = "UPDATE manage_dorm SET DScore=DScore-$score WHERE Sid='$sid'";
            }
            
            $result = $conn->query($sql);
            if ($result) {
                echo "<p><b><center>สำเร็จ</center></b></p>";
            } else {
                echo "<p><b><center>ไม่สำเร็จ</center></b></p>";
            }
            $conn->close();?>
        <br>
            <center><button class="btn btn-danger" type ="submit" value="ย้อนกลับ" onclick = "location.href='index.php'">
		กลับหน้าหลัก
            </button></center>
     <?php
        }
        ?>
    </body>
</html>
