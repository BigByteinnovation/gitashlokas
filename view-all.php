<?php

require_once('partials/db.php');

$sql = "SELECT * FROM `chant_data` ORDER BY `id` DESC ";
$result = $conn->query($sql);

// // Check if there are rows in the result
// 

// $myJSON = json_encode($LatestPics); 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GIEO Gita : Ek minute ek saath Gita path</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .pic {
            width: 100%;
            object-fit: cover;
            overflow: hidden;
            aspect-ratio: 19/9;
            transition: transform 0.5s;
            cursor: pointer;
        }
        .pic:hover{
            transform: scale(1.08);
        }
        #viewPic{
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            backdrop-filter: blur(2px);
            transition: all 0.5s;
            transform-origin: center;
            overflow: hidden;
            border-radius: 50%;
            scale: 0;
            z-index: 100;
        }
        #activeImg{
            width: 90%;
            height: auto;
            border-radius: 10px;
            max-width: 600px;
        }
        #closeBtn{
            position: absolute;
            top: 10%;
            right: 10%;
            cursor: pointer;
            color: white;
            background-color: white;
            border-radius: 50%;
        }

    </style>
</head>

<body>
    <div id="viewPic" class="absolute d-flex flex-column align-items-center justify-content-center"> 
        <img id="activeImg" src="assets\uploads\2023122003Ankit--.jpg" alt="">
        <img id="closeBtn" width="50px" src="assets\close_btn.svg" alt="">
    </div>

    <div class="container">
        <div class="row ">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="p-2 col-md-3 ">
                        <img src="assets/uploads/'.$row['img'].'" alt="" class="pic shadow border border-white rounded-4">
                    </div>
                    ';
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function (e) {
            viewPic = document.getElementById('viewPic')
            activeImg = document.getElementById('activeImg')

            $('.pic').each(function (e, q) {
            $(q).click(()=>{
                activeImg.src = q.src
                viewPic.style.scale = "1";
                viewPic.style.borderRadius = "0px";
                console.log(viewPic)
                console.log(activeImg)
            })
          })
        })
    </script>
</body>

</html>