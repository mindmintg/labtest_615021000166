<h1>ส่งค่า update</h1>
<?php
    require_once("condb.php");
    $sql = "UPDATE major SET
        major_id = '{$_POST['major_name']}',
        major_name = '{$_POST['major_name']}',
        major_day = '{$_POST['major_day']}',
    WHERE major_id = '{$_POST['major_id']}' ";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?> 