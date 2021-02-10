<?php
    require_once("dbcon.php");
    if(isset($_GET['delect'])) {
        $sql = "SELECT * FROM major WHERE major_id ='{$_GET['id']}'";
        if(mysqli_query($conn,$sql)) {
            echo "record delect";
        }
    }
    $sql = "SELECT * FROM major";
    if(isset($_GET['search_click'])) {
      $sql = "SELECT * FROM major WHERE major_id LIKE '%{$_GET['search']}%' OR major_name LIKE '%{$_GET['search']}%' ";
      echo "<p>คุณกำลังค้นหา : {$_GET['search']}</p>";
  }
    $result = $conn->query($sql);
?>
<a href ="insert_from.php">เพิ่มภาพยนต์</a>
<form action="" method="get">
  <label for="search">ช่องค้นหา</label>
  <input type ="text" name = "search" id = "search">
  <button type="submit" name = "search_click">ค้นหา</button>
</form>
<form action="" method="post">
    <button type="submit" name="logout">ออกจากระบบ</button>
</form>
<table style="width:100%;" border="1">
    <tr>
        <th>รหัสภาพยนต์</th>
        <th>ชื่อภาพยนต์</th>
        <th>เวลาที่เริ่มฉาย</th>
        <th>ชื่อผู้ใช้งาน</th>
        <th>pin</th>
      </tr>
  <?php
  if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $row['major_id'];?></td>
    <td><?php echo $row['major_name'];?></td>
    <td><?php echo $row['major_day'];?></td>
    <td><?php echo $row['major_member'];?></td>
    <td><?php echo $row['major_pin'];?></td>
    <td align = "center">
      <a href ="">แก้ไข</a>
      <a href ="">ลบ</a>
    </td>
  </tr>
  <?php 
  }
} else {
  echo "0 results";
  }
$conn->close();
?>
</table>