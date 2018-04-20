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
        <title>ระบบหอพัก DatabaseGroup</title>
        <link rel="stylesheet" href="s_main/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    </head>
    <body>
<!-- / Begin Body -->
<div class='swanky'>
  <!-- / Introduction Block -->
  <div class='swanky_title'>
    <h1>ยินดีต้อนรับเข้าสู่</h1>
    <h2>ระบบจัดการหอพัก</h2>
    <p>ระบบจัดการหอพัก สำหรับ Admin By DatabaseGroup</p>
  </div>
  <!-- /////////// Begin Dropdown //////////// -->
  <div class='swanky_wrapper'>
    <input id='Dashboard' name='radio' type='radio'>
    <label for='Dashboard' onclick="location.href='managedorm.php'">
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/dash.png'>
      <span>จัดการข้อมูลนิสิต</span>
      <div class='bar'></div>
    </label>
    <input id='Sales' name='radio' type='radio'>
    <label for='Sales' onclick="location.href='score.php'">
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/del.png'>
      <span>จัดการคะแนนหอ</span>
      <div class='bar'></div>
    </label>
    <input id='Messages' name='radio' type='radio'>
    <label for='Messages' onclick="location.href='inforequest.php'">
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/mess.png'>
      <span>จัดการคำร้อง</span>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
      </div>
    </label >
    <input id='Settings' radio='radio' type='radio'>
    <label for='Settings' onclick="location.href='login.php'">
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/set.png'>
      <span>ออกจากระบบ</span>
    </label>
  </div>
  <!-- /////////// End Dropdown //////////// -->
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</html>
