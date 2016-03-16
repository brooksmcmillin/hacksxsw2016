<!DOCTYPE html>
<?php
    $videoName = $_GET["video"];
?>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $videoName ?></title>
    <meta name="description" content="We Are Concerts!">
    <script src="assets/js/aframe.js"></script>
</head>
<body>
<a-scene stats="true">
    <a-assets>
        <video id="video"
               preload="true"
               src="media/<?php echo $videoName;?>.mp4"
               width="360" height="360"
               autoplay loop="true"
               crossOrigin="anonymous"></video>
    </a-assets>

    <a-entity camera look-controls></a-entity>
    <a-entity material="shader: flat; src: #video"
              geometry="primitive: sphere; radius: 100" scale="-1 1 1">
    </a-entity>
</a-scene>
</body>
</html>
