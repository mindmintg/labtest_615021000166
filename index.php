<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลภาพยนต์</title>
</head>
<body>
   <?php
require_once("condb.php");
session_start();
if(isset($_POST['login'])) {
    $sql = "SELECT * FROM major WHERE major_member = '{$_POST['major_member']}' AND major_pin = '{$_POST['major_pin']}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["major_member"] = $row['major_member'];
    } else {
        echo "<p>รหัสผิด</p>";
    }
}

if(isset($_POST['logout'])) {
    session_unset();
} //log-out

if(isset($_SESSION['major_name'])) {
    require_once("table1.php");
} else {
    require_once("login.php");
}
?>
</body>
</html>