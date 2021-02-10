<?php
$mysqli = new mysqli("localhost","root","","major");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
//echo ("connet db");

}
?>