<?php
require_once("restricted/S45GcfgT56Bh.php");
$db_handle = new DBController();
if(!empty($_POST["email"])) {
$result = mysql_query("SELECT count(*) FROM usersdata WHERE email='" . $_POST["email"] . "'");
$row = mysql_fetch_row($result);
$user_count = $row[0];
if($user_count>0) echo "<span class='status-not-available'><img src='images/check/cross.png'></span>";
else echo "<span class='status-available'> <img src='images/check/tick.png'></span>";
}
?>