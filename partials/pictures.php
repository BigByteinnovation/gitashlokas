<?php
$LatestPics = array();
require_once('db.php');

$sql = "SELECT `img` FROM chant_data ORDER BY `id` DESC LIMIT 10";
$result = $conn->query($sql);

// Fetch result
if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    while($row = $result->fetch_assoc()){
    // echo var_dump($row);
        array_push($LatestPics,$row['img']);
    }
}
$myJSON = json_encode($LatestPics);
// echo var_dump($myJSON);

echo $myJSON;
?>
