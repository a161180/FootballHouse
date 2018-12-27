<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['checklogin'];
   
   $ses_sql = mysqli_query($db,"SELECT * FROM tbl_staffs_a161180_pt2 where STAFF_EMAIL = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
?>