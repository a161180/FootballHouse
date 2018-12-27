<?php
session_start();

      if ( isset($_POST['username']) && isset($_POST['password']) ) {

          ob_start();
          $host="lrgs.ftsm.ukm.my"; // Host name 
          $username="a161180"; // Mysql username 
          $password="bigpinkbear"; // Mysql password 
          $db_name="a161180"; // Database name 
          $tbl_name="tbl_staffs_a161180_pt2"; // Table name

          // Connect to server and select databse.
          mysql_connect("$host", "$username", "$password") or die(mysql_error());
          // echo "Connected to MySQL<br />";
          mysql_select_db("$db_name") or die(mysql_error());
          // echo "Connected to Database<br />";

          $username=$_POST['username']; 
          $password=md5($_POST['password']);
          $username = stripslashes($username);
          $password = stripslashes($password);
          $username = mysql_real_escape_string($username);
          $password = mysql_real_escape_string($password);
          

          echo "$username "; 


          $sql="SELECT * FROM tbl_staffs_a161180_pt2 WHERE STAFF_EMAIL='$username' AND PASSWORD='$password'";

          $result=mysql_query($sql);
          // Mysql_num_row is counting table row
          $count=mysql_num_rows($result);
          // If result matched $username and $password, table row must be 1 row
          if ($count==1) {
              echo "Success! $count";
              $_SESSION['username'] = $username; //set session
              header('location:index.php');
          } else {
              echo " is not the correct credential. Please retype.";

          }

      } else {
          header('location:login.php');
          exit();
      }