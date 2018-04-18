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
        <title>เพิ่มข้อมูลนิสิต DatabaseGroup</title>
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
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
                                            <h1>ที่ต้องการเพิ่ม</h1>
					</span>
					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="sid" placeholder="รหัสนิสิต :" value ="<?php echo $_GET['id']?>">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Dormname is required">
						<input class="input3" type="text" name="dormname" placeholder="ชื่อหอพัก :" value ="<?php echo $_GET['id2']?>">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Room is required">
						<input class="input3" type="text" name="room" placeholder="ห้อง :">
						<span class="focus-input3"></span>
					</div>

                                        <div class="wrap-input3 validate-input" data-validate = "Bed is required">
						<input class="input3" type="text" name="bed" placeholder="เตียง :">
						<span class="focus-input3"></span>
					</div>
                                    
                                        <div class="wrap-input3 validate-input" data-validate = "AccessDate is required">
						<input class="input3" type="date" name="accessdate" placeholder="วันที่เข้าหอ : ">
						<span class="focus-input3"></span>
					</div>
	
                                        <div class="container-contact3-form-btn"><center>
                                                <button class="contact3-form-btn" type ="submit" name ="send" >
							ตกลง
						</button>
                                                <button class="contact3-form-btn" type ="reset" name ="cancel">
							ยกเลิก
						</button>
                                        </center></div>
                                    
				</form>
			</div>
		</div>
            <center><button class="contact3-form-btn" type ="submit" value="ย้อนกลับ">
		กลับหน้าหลัก
	</button></center>
	</div>

<?php
}
        else{
            include 'config.inc';
            
            $sid = $_POST['sid'];
            $dormname = $_POST['dormname'];
            $room = $_POST['room'];
            $bed = $_POST['bed'];
            $accessdate = $_POST["accessdate"];
            $sql = "UPDATE student SET DormName='$dormname',BedNo='$bed',RoomNo='$room',AccessDate='$accessdate',DScore=0 "
                    . "WHERE Sid='$sid'";
            
            $result = $conn->query($sql);
            if ($result) {
                echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
                echo "<br>";
                echo "<a href='deleteToReq.php?id=$sid'> กลับหน้าหลัก</a>"
               
                ?>
                <?php
                
                
            } else {
                echo "ไม่สามารถเพิ่มข้อมูลได้";
                ?>
            <center><button class="contact3-form-btn" type ="submit"  onclick = "location.href='index.php'">
                    กลับหน้าหลัก
        </button></center>       
                <?php
            }
            $conn->close();
        // put your code here
        }
?>
       
	<div id="dropDownSelect1"></div>
        <!--===============================================================================================-->
	<script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/bootstrap/js/popper.js"></script>
	<script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js2/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    </body>
</html>
