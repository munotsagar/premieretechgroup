<?php
echo "In My File...";
$userid= $_REQUEST['userid'];
$servername = "localhost";
$username = "avotreat_common";
$password = "S*VUxhp5qJbL";
$dbname = "avotreat_avo";
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from users";
echo $sql;
$res = $conn->query($sql);
echo "<pre>";
while($row = $res->fetch_assoc())
{

print_r($row);

}
?>