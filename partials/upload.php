<?php

try {
    $status = null;
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $numbers = $_POST['numbers'];

    $target_dir = "../assets/uploads/";
    $target_file = $target_dir . basename($_FILES["uploadimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["uploadimg"]["tmp_name"]);
        if ($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
            // $sql = "INSERT INTO `blogs`( `title`, `category`, `description`, `featured_img`) VALUES ('$title','$category','$desc','$fimgname')";
            $newName = date("Ymds") . $_FILES["uploadimg"]["name"];
            // echo $newName;
            $fimgname = $target_dir . $newName;
            if (move_uploaded_file($_FILES["uploadimg"]["tmp_name"], $fimgname)) {
                // echo "img done";
                // $fimg = $_FILES["featured-img"]["tmp_name"];
                $sql = "INSERT INTO `chant_data`( `org_name`, `country`, `state`, `city`, `numbers`, `img`, `dt`) VALUES ('$name','$country','$state','$city','$numbers','$newName',NOW())";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $status = "Data uploaded Successfully!";
                } else {
                    $status = "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Some error occured, Try again";
            }
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    
}
echo $status;
} catch (\Throwable $th) {
    echo "some error occured";
}

?>
