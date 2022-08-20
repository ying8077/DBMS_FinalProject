<?php
session_start();

require_once('../conn.php');

$uname = $_POST['name'];
$ID = $_POST['id'];

$sql = "SELECT `U_ID` FROM `User` WHERE `Name`='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['U_ID'] == $ID) {
        $_SESSION["id"] = $ID;
        header("Location:../view/search_view.php");
    } else {
        echo "<script>alert('請確認密碼是否正確')</script>";
        echo "<script> history.back();rn </script>";
    }
} else {
    echo "<script>alert('尚未註冊')</script>";
    echo "<script> history.back();rn </script>";
}
