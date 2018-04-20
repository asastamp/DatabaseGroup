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
        session_start();
        if(!isset($_POST['send'])){
        ?>    
        <div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
        <form  method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
            <span class="contact3-form-title">
                <h1>แบบฟอร์มการร้องขอ</h1>          
            </span>
            <div class="wrap-input3 validate-input" data-validate="Name is required">
		<input class="input3" type="text" name="sid" placeholder="รหัสนิสิต :">
		<span class="focus-input3"></span>
                <div class="col-sm-10">
                    <?php echo $_SESSION['Username'];?>
                </div>
            </div>
            <div class="wrap-input3 validate-input" data-validate="dormname is required">
		<input class="input3" type="text" name="dormname" placeholder="ชื่อหอพัก :">
		<span class="focus-input3"></span>
                <div class="col-sm-10">
                    <input type="radio" class="btn btn-info" name="dormname" value="จำปา" checked> จำปา<br>
                    <input type="radio" class="btn btn-info" name="dormname" value="จำปี"> จำปี<br>
                    <input type="radio" class="btn btn-info" name="dormname" value="ชวนชม"> ชวนชม<br>
                    <input type="radio" class="btn btn-info" name="dormname" value="พุดตาล"> พุดตาล<br>
                    <input type="radio" class="btn btn-info" name="dormname" value="พุดซ้อน"> พุดซ้อน<br>
                </div>
            </div>
        
                <input type ="submit" class="btn btn-success" style="width:100px" name ="send" value="ตกลง">      
                <input type ="reset" class="btn btn-danger" style="width:100px" name ="cancel" value="ยกเลิก">  
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
            $sid = $_SESSION['Username'];
            $dormname = $_POST['dormname'];

            $sql = "Insert Into request values('$sid','$dormname');";
            $result = $conn->query($sql);
            if ($result) {
                echo "<p><b><center>ร้องขอเรียบร้อยแล้ว</center></b></p>";
            } else {
                echo "<p><b><center>ไม่สามารถร้องขอได้</center></b></p>";
            }
            $conn->close();?>
        <br>
            <center><button class="btn btn-danger" type ="submit" value="ย้อนกลับ" onclick = "location.href='student.php'">
		กลับหน้าหลัก
            </button></center>
     <?php
        
        }
        ?>
        
        
    </body>
</html>
