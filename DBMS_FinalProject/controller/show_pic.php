<?php
session_start();
include('../conn.php');
$ID = $_SESSION["id"];
$Type = $_SESSION['Type'];
$sql="SELECT pic FROM user WHERE `U_ID`='$ID'";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
        $file = $row['pic'];
        $pic = base64_decode($file);
    } else {
      echo "0 results";
    }

    header("Content-Type: $Type");
    echo $pic;

?>