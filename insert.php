
<?php

require_once("dbcon.php");
$sql = "INSERT INTO student (major_id, major_name, major_day,major_member, major_pin)
VALUES ('{$_POST['major_id']}', '{$_POST['major_name']}','{$_POST['major_day']}')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>