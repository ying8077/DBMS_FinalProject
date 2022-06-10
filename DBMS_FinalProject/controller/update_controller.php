<?php
  session_start();

  include('../conn.php');

  $uname = $_POST['name'];
  $ID = $_POST['id'];
  $HealthID = $_POST['hin'];
  $Email = $_POST['email'];
  
  $sql = "UPDATE `user` SET `Name`='$uname',`Email`='$Email' WHERE `User`.`U_ID` = '$ID' AND `User`.`HealthID` = '$HealthID'";
//   echo $sql;
  $conn->query($sql);

  $_SESSION["id"]=$ID;
  
  header("Location: ../view/search_view.php");
?>


