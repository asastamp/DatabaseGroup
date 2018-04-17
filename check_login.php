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
	include 'config.inc';

	$sql = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($conn,$_POST['txtUsername'])."' 
	and Password = '".mysqli_real_escape_string($conn,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($conn,$sql);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
		echo 'Username หรือ Password ผิดหรือเปล่า';?>
            <br>
                  <input type="submit" class="btn btn-primary" value="กลับหน้า Login" onclick = "location.href='login.php'" />
	<?php
                }
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
                        $_SESSION["Username"] = $objResult["Username"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:index.php");
			}
			else
			{
				header("location:student.php");
			}
	}
	mysqli_close($conn);
?>
</div>
</body>
</html>              