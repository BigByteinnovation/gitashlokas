<?php
$total = [];
require_once ('db.php');
// $sql = "SELECT SUM(numbers) as smm FROM `chant_data`";
// // $sql = "SELECT `numbers` FROM `chant_data`";
// $result = mysqli_query($conn,$sql);
// echo ($result);
// while($row = mysqli_fetch_assoc($result)){
//     $total = [];
    
// }
// echo var_dump($totalCount);
$sql = "SELECT SUM(numbers) AS total FROM chant_data";
$result = $conn->query($sql);

// Fetch result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $sum = $row['total'];
    echo $sum;
} else {
    echo "No results found";
}

// Close connection
$conn->close();
?>