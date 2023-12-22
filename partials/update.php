
<?php
require_once 'db.php';
$sql = "SELECT * FROM `counter`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$r = (int) $row['cc'];
echo $r;
$r= $r+2777 ;
if($r<12500265){
$upsql = "UPDATE `counter` SET `cc` = '$r' WHERE `counter`.`id` = 1";
    $result = mysqli_query($conn, $upsql);
}

?>