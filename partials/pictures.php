<?php
$LatestPics = array();
require_once('db.php');

$sql = "SELECT * FROM `chant_data` ORDER BY `id` DESC LIMIT 10";
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Fetch result
    while ($row = $result->fetch_assoc()) {
        echo $row['img'];
        echo var_dump($row);
        array_push($LatestPics, $row['img']);
    }
}

$myJSON = json_encode($LatestPics);
echo $myJSON;
?>

