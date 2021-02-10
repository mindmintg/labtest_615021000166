<?php 
    require_once("condb.php");
 
    $sql = "SELECT * FROM major where major_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
    }
?>
 
<h3>แก้ไขภาพยนต์<small><a href=".">ย้อนกลับ</a></small></h3>
 
<form action="update.php" method="post">
    <label for="major_id">รหัสนักศึกษา :</label>
    <input type="hidden" name="major_id" id="major_id" value = "<?php echo $row['major_id']?>">
    <?php echo $row['student_id']?>
    <br><br>
    <label for="major_name">ชื่อภาพยนต์ :</label>
    <input type="text" name="major_name" id="major_name" value = "<?php echo $row['major_name']?>">
    <br><br>
    <label for="major_day">วันฉาย :</label>
    <input type="date" name="major_day" id="major_day" value = "<?php echo $row['major_day']?>">
    <br><br>
    <label for="major_member">ชื่อผู้ใช้งาน :</label>
    <input type="hiden" name="major_member" id="student_bday" value = "<?php echo $row['student_bday']?>">
    <br><br>
    <label for="major_pin">pin :</label>
    <input type="hiden" name="major_pin" id="major_pin" value = "<?php echo $row['major_pin']?>">
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>
