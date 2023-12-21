<!DOCTYPE html>
<html>
  <head>
    <!-- <title>Simple PHP Video Gallery</title> -->
    <!-- <link rel="stylesheet" type="text/css" href="1b-gallery.css"> -->
    <!-- <script src="1c-gallery.js"></script> -->
 </head>
  <body>
    <h2 class="text-center mt-3" >Videos</h2>
    <!-- (A) CLOSE FULLSCREEN VIDEO -->
    <div id="vClose" onclick="vplay.toggle(false)">X</div>

    <!-- (B) VIDEO GALLERY -->
    <div class="gallery"><?php
      // (B1) GET VIDEO FILES FROM GALLERY FOLDER
      $dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
      $vid =  glob("$dir*.{webm,mp4,ogg}", GLOB_BRACE);
      // echo $dir;
      // echo $vid;

      // (B2) OUTPUT VIDEOS
      if (count($vid) > 0) { foreach ($vid as $v) {
        printf("<video src='assets/videos/gallery/%s'></video>", rawurlencode(basename($v)));
      }}
    ?></div>
  </body>
</html>