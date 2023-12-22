<?php
try {

    require_once 'db.php';
    $sql = "SELECT * FROM `counter`";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $r = (int) $row['cc'];
    echo $r;
} catch (\Throwable $th) {
    //throw $th;
    echo "some error found";
}

// Close connection
$conn->close();
