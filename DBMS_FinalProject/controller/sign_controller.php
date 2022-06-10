<?php
session_start();

include('../conn.php');

$uname = $_POST['name'];
$ID = $_POST['id'];
$HealthID = $_POST['hin'];
$Email = $_POST['email'];

echo "Filename: " . $_FILES['fileToUpload']['name'] . "<br>";
echo "Type : " . $_FILES['fileToUpload']['type'] . "<br>";
echo "Size : " . $_FILES['fileToUpload']['size'] . "<br>";
echo "Temp name: " . $_FILES['fileToUpload']['tmp_name'] . "<br>";
echo "Error : " . $_FILES['fileToUpload']['error'] . "<br>";

$Type = $_FILES['fileToUpload']['type'];
$_SESSION['Type'] = $Type;

if ($_FILES['fileToUpload']['error'] > 0) {
  switch ($_FILES['fileToUpload']['error']) {
    case 1:
      die("檔案大小超出php.ini:upload_max_filesize 限制 ");
    case 2:
      die("檔案大小超出MAX_FILE_SIZE 限制");
    case 3:
      die("檔案大小僅被部份上傳");
    case 4:
      die("檔案未被上傳");
  }
}

$file = fopen($_FILES["fileToUpload"]["tmp_name"], "rb");
$fileContents = fread($file, filesize($_FILES["fileToUpload"]["tmp_name"]));

fclose($file);

$fileContents = base64_encode($fileContents);

$SQLSTR = "INSERT INTO `user`(`Name`, `U_ID`, `HealthID`, `Email`,`pic`) VALUES ('$uname','$ID','$HealthID','$Email','$fileContents')";
$conn->query($SQLSTR);




$_SESSION["id"] = $ID;
header("Location: ../view/search_view.php");
